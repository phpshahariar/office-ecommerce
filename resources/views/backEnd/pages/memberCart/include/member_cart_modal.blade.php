<div class="row">
    <div class="col-md-6 col-sm-6">
        <button data-target="#member-cart-add-modal" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth pmd-ripple-effect " type="button">Add Member Cart</button>

        <div tabindex="-1" class="modal fade" id="member-cart-add-modal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bordered">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h2 class="pmd-card-title-text">Add Country</h2>
                    </div>
                    <div class="modal-body">

                        {{Form::open(['url'=> '/save-member', 'method' => 'post', 'class' => 'form-horizontal' ])}}
                        <div class="component-box">

                            <!-- Text fields example -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pmd-card pmd-z-depth pmd-card-custom-form">
                                        <div class="pmd-card-body">
                                            <!-- Regular Input -->
                                            <div class="form-group">
                                                <label for="regular1" class="control-label">Member Cart Name</label>
                                                <input type="text" id="regular1" class="form-control" name="member_cart_name">
                                            </div>
                                            @if ($errors->has('member_cart_name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('member_cart_name') }}</strong>
                                    </span>
                                            @endif
                                            <div class="form-group">
                                                <label for="regular1" class="control-label">Member Cart Number</label>
                                                <input type="number" id="regular1" class="form-control" name="member_cart_number">
                                            </div>
                                            @if ($errors->has('member_cart_number'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('member_cart_number') }}</strong>
                                    </span>
                                            @endif
                                            <div class="form-group">
                                                <label for="regular1" class="control-label">Member Cart Discount</label>
                                                <input type="number" id="regular1" class="form-control" name="member_cart_discount">
                                            </div>
                                            @if ($errors->has('member_cart_discount'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('member_cart_discount') }}</strong>
                                    </span>
                                            @endif

                                            <!-- Textarea -->

                                            <!-- Bootstrap Selectbox -->

                                            <div class="form-group">
                                                <label class="radio-inline pmd-radio">
                                                    <input type="radio" name="status" id="inlineRadio1" value="1">
                                                    <span for="inlineRadio1">Publish</span> </label>
                                                <label class="radio-inline pmd-radio">
                                                    <input type="radio" name="status" id="inlineRadio2" value="2" >
                                                    <span for="inlineRadio2">Unpublish</span> </label>
                                            </div>
                                            @if ($errors->has('status'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('status') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div><!-- end Text fields example -->

                        </div>
                        <div class="pmd-modal-action">
                            <button  class="btn pmd-ripple-effect btn-primary" type="submit">Save</button>
                            <button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default" type="button">Discard</button>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div> <!--Form dialog example end -->

</div>
