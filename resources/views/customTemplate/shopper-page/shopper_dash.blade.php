@extends('customTemplate.index')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/customTemplate/styles/')}}/bootstrap4/bootstrap.min.css">
<link href="{{asset('/customTemplate/plugins/')}}/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('/customTemplate/styles/')}}/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('/customTemplate/styles/')}}/contact_responsive.css">
@endsection

@section('mainContent')
<div class="contact_form">
    <div class="container">
        <div class="row">
            @if(Session::get('message'))
            <h4 style="margin: 0 auto; margin-bottom: 20px; color: green;">{{Session::get('message')}}</h4>
            @endif
        </div>
        <div class="row" style="border: 1px solid gainsboro; padding-top: 30px; padding-bottom: 50px">
            <div class="col-lg-12">
                <a href="{{ route('/shopper-create-product') }}" class="btn btn-success" style="float: right; margin-bottom: 20px;">Add Product</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">
                                Product.Name : <br>
                                Product.Price : <br>
                            </th>
                            <th scope="col">Product.Code</th>
                            <th scope="col">Action</th>
                            <th scope="col">Admin Status</th>
                        </tr>
                    </thead>
                    @foreach($products as $product)
                    <tbody>
                        <tr>
                            <td>
                                @foreach($images as $image)
                                @if($product->id == $image->product_id)
                                <img src="{{ asset($image->large_image) }}" alt="Image" width="50" height="50">
                                @break
                                @endif
                                @endforeach()
                            </td>
                            <td>
                                Product.Name : {{ $product->product_name_eng}}<br>
                                Product.Price : {{ $product->product_price_eng}} .Tk<br>
                            </td>
                            <td># {{ $product->id }}<br>
                            </td>
                            <td>
                                @if($product->status == 0)
                                <a class="btn btn-success" href="{{URL::to('published_product/'.$product->id)}}">
                                    <i class="far fa-thumbs-up"></i>  
                                </a>
                                @else
                                <a class="btn btn-danger" href="{{URL::to('unpublished_product/'.$product->id)}}">
                                    <i class="far fa-thumbs-down"></i> 
                                </a>
                                @endif
                                <a class="btn btn-info" href="{{ URL::to('shopper-image-update-product/'.$product->id) }}">
                                    <i class="fas fa-images"></i>
                                </a>
                                <a class="btn btn-info" href="{{ URL::to('shopper-edit-product/'.$product->id) }}">
                                    <i class="fas fa-edit"></i> 
                                </a>
                                <a class="btn btn-danger" href="{{ URL::to('/shoppe-delete-product/'.$product->id) }}" onclick="return confirm('Are You Sure to Delete');">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                            <td>
                                @if($product->status == 2)
                                <a class="btn btn-success">Published</a>
                                @else
                                <a class="btn btn-danger">Unpublished</a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach()
                </table>
            </div>
        </div>
    </div>
    <div class="panel"></div>
</div>
@endsection

@section('js')
<script src="{{asset('/customTemplate/js/')}}/jquery-3.3.1.min.js"></script>
<script src="{{asset('/customTemplate/styles/')}}/bootstrap4/popper.js"></script>
<script src="{{asset('/customTemplate/styles/')}}/bootstrap4/bootstrap.min.js"></script>
<script src="{{asset('/customTemplate/plugins/')}}/greensock/TweenMax.min.js"></script>
<script src="{{asset('/customTemplate/plugins/')}}/greensock/TimelineMax.min.js"></script>
<script src="{{asset('/customTemplate/plugins/')}}/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{asset('/customTemplate/plugins/')}}/greensock/animation.gsap.min.js"></script>
<script src="{{asset('/customTemplate/plugins/')}}/greensock/ScrollToPlugin.min.js"></script>
<script src="{{asset('/customTemplate/plugins/')}}/easing/easing.js"></script>
{{--<script src="{{asset('/customTemplate/js/')}}/contact_custom.js"></script>--}}
{{--<script src="{{asset('/customTemplate/js/')}}/contact_custom.js"></script>--}}

<script type="text/javascript">

</script>
@endsection