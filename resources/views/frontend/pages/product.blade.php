@extends('frontend.app')
@section('content')

<div class="inner-ban">
    <img src="{{ asset('frontend/images/inner-ban.jpg') }}" alt="">
    <div class="ban text">
        <h2>Products</h2>
        <ul>
            <li><a href="#">Home <i class="fas fa-chevron-right"></i></a></li>
            <li>Products</li>
        </ul>
    </div>
</div>



<!-- <section class="prod_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-left">
                <select name="" id="">
                    <option value="">
                        Categories
                    </option>
                </select>
            </div>
             <div class="col-lg-6 col-md-6 text-right">
                <select name="" id="">
                    <option value="">
                        Short By
                    </option>
                </select>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic1.png">
                        <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                    </div>
                    <h3>Canvas Photo Printing</h3>
                    <h4>$77.65</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic2.png">
                        <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                    </div>
                    <h3>Canvas Photo Printing</h3>
                    <h4>$77.65</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic3.png">
                        <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                    </div>
                    <h3>Canvas Photo Printing</h3>
                    <h4>$77.65</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic4.png">
                        <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                    </div>
                    <h3>Metallic Arts Golden Steel Wall Clocks</h3>
                    <h4>$77.65</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic5.png">
                        <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                    </div>
                    <h3>Canvas Photo Printing</h3>
                    <h4>$77.65</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic6.png">
                        <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                    </div>
                    <h3>Canvas Photo Printing</h3>
                    <h4>$77.65</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic7.png">
                        <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                    </div>
                    <h3>Canvas Photo Printing</h3>
                    <h4>$77.65</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic8.png">
                        <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                    </div>
                    <h3>Metallic Arts Golden Steel Wall Clocks</h3>
                    <h4>$77.65</h4>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="feature_area">
  <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-6">
            <div class="feature_pic">
                <div class="feature_pic_con">
                    <img src="{{ asset('frontend/images/metal_design.jpg') }}">
                    <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                </div>
                <h3>Metal prints</h3>
            </div>
        </div>

        <div class="col-md-3 col-sm-3 col-6">
            <div class="feature_pic">
                <div class="feature_pic_con">
                    <img src="{{ asset('frontend/images/f_pic4.png') }}">
                     <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                </div>
                <h3>Canvas prints</h3>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-3 col-6">
            <div class="feature_pic">
                <div class="feature_pic_con">
                    <img src="{{ asset('frontend/images/IMG_0799.jpg') }}">
                     <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                </div>
                <h3>Acrylic block</h3>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-3 col-6">
            <div class="feature_pic">
                <div class="feature_pic_con">
                    <img src="{{ asset('frontend/images/cst-img.jpg') }}">
                     <div class="hov-but">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
                    </div>
                </div>
                <h3>Custom hashmask print</h3>
            </div>
        </div>
    </div>
  </div>
</section>

<div class="clearfix"></div>
@endsection
@section('jsContent')

@endsection