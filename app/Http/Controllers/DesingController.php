<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farme;
use Session;

class DesingController extends Controller {

    public function saveFeame(Request $request) {
        $image = $request->file('farme_image');
        $image_name = $image->getClientOriginalName();
        $feame_image = 'farme_image/';
        Image::make($image)->resize(1359, 339)->save($feame_image . $image_name);
        $feame = new Farme();
        $feame->admin_id = Session::get('admin_id');
        $feame->farme_image = $feame_image . $image_name;
        $feame->status = $request->status;
        $feame->save();
        return redirect('/manage-frame')->with('message', 'Farme Saved Successfully');
    }

    public function updateFeame(Request $request) {
        $image = $request->file('image');
        $this->mainCategoryValidation($request);
        $main_category = MainCategories::where('id', $request->category_id)->first();
        if ($image) {
            unlink($main_category->image);
            $image_name = time() . '_' . $image->getClientOriginalName();
            $category_image = 'category_image/';
            Image::make($image)->resize(1359, 339)->save($category_image . $image_name);
            $main_category->image = $category_image . $image_name;
        }
        $main_category->category_name = $request->category_name;
        $main_category->category_name_ban = $request->category_name_ban;
        $main_category->category_name_hin = $request->category_name_hin;
        $main_category->category_description = $request->category_description;
        $main_category->status = $request->status;
        $main_category->update();
        return redirect('/main-categories')->with('message', 'Category Updated Successfully !!!');
    }

    public function manageFrame() {
        if (Session::get('admin_role') == 1) {
            $farmes = Farme::where('admin_id', Session::get('admin_id'))->orderBy('id', 'DESC')->get();
        } else {
            $farmes = Farme::orderBy('id', 'DESC')->get();
        }
        return view('backEnd.pages.desingBanner.manageFrame', compact('farmes'));
    }

    public function unpublishedFrame($id) {
        $product = Farme::where('id', $id)->first();
        $product->status = 0;
        $product->update();
        return redirect('/manage-frame')->with('message', 'Frame Unpublished Successfully');
    }

    public function publishedFrame($id) {
        $product = Farme::where('id', $id)->first();
        $product->status = 1;
        $product->update();
        return redirect('/manage-frame')->with('message', 'Frame Published Successfully');
    }

    public function fbCover() {
        $farmes = Farme::all();
        return view('backEnd.pages.desingBanner.fbCover', compact('farmes'));
    }

}
