@extends('backEnd.pages.dashBoard')
@section('mainContent')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
<style>
        body{
            color: #fff;
        }
        #draggable {
            width: 150px;
            height: 150px;
            padding: 0.5em;
        }
        .warper{
            margin: 0 auto;
            width: 500px;
            height: 300px;
            text-align: center;
        }
        .content{
            position: relative;
            background: green;
            width: 500px;
            height: 300px;
        }
        .mainContent{
            top: 0;
            position: absolute;
        }
        .cursor{
            cursor: pointer;
        }
        .bg { 
            /* The image used */
            background-image: url("SurfaceBook.jpg");

            /* Full height */
            height: 100%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<link rel="stylesheet" href="{{asset('backEnd/stepper')}}/dist/css/bs-stepper.min.css">
<div id="content" class="pmd-content content-area dashboard">
    <div class="container-fluid">
        <div class="row" id="card-masonry">
            <!-- Today's Site Activity -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pmd-card pmd-z-depth">
                    <div class="pmd-card-title">
                        <h2 style="text-align: center; color: #4bdc4b;">Desing Banner Create</h2>
                    </div>
                    <div class="pmd-card-body">
                        <div class="mb-5 p-4 bg-white shadow-sm">
                            <div id="stepper1" class="bs-stepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <div class="step" data-target="#test-l-1">
                                        <button type="button" class="bs-stepper-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Selcet Desing</span>
                                        </button>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-2">
                                        <button type="button" class="bs-stepper-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Profile</span>
                                        </button>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-3">
                                        <button type="button" class="bs-stepper-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">Banner Desing</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <form onSubmit="return false" class="tab-content">
                                        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
                                            <div class="form-group">
                                                <div class="row">
                                                    @foreach($farmes as $farme)
                                                    <div class="col-sm-4">
                                                        <div class="card" style="width: 18rem;">
                                                            <a href="#">
                                                                <img class="card-img-top" src="{{ asset($farme->farme_image) }}" style="height: 200px" alt="farme Image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper1.next()">Next</a>
                                        </div>
                                        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2">
                                            <div class="form-group row">
                                                <div class="col-sm-2">
                                                    <label>Logo</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="file" class="form-control-file" name="banner_logo">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-2">
                                                    <label>Product Name</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="banner_name" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-2">
                                                    <label>Product Price</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="banner_price" placeholder="Product Price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-2">
                                                    <label>Product Image</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="file" class="form-control-file" name="banner_image">
                                                </div>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper1.previous()">Previous</a>
                                            <a class="btn btn-primary" onclick="stepper1.next()">Next</a>
                                        </div>
                                        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
                                            <div class="form-group row">
                                                <div class="col-sm-8 col-sm-offset-2 content">
                                                    <img src="{{asset('backEnd/stepper')}}/img/pic_trulli.jpg">
                                                </div>
                                            </div>
                                            <div id="productName" class="ui-widget-content">
                                                    <h2 class="cursor">Product Name</h2>
                                                </div>
                                                <div id="productPrice" class="ui-widget-content">
                                                    <h2 class="cursor">Product Price</h2>
                                                </div>
                                            <a class="btn btn-primary mt-5" onclick="stepper1.previous()">Previous</a>
                                            <button type="submit" class="btn btn-primary mt-5">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#productName").draggable();
        $("#productPrice").draggable();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bs-breakpoints/dist/bs-breakpoints.min.js"></script>
<script src="{{asset('backEnd/stepper')}}/dist/js/bs-stepper.min.js"></script>
<script src="{{asset('backEnd/stepper')}}/js/main.js"></script>
@endsection
