@extends('frontend.app')
@section('content')
<div class="main_slider">
    <div class="main-slider owl-carousel">
        <div class="item">
            <div class="banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="bantext">
                                <h1>"Nifticals”  - Physical NFT’s
                               </h1>
                               <p>Bringing Art From Your Digital Wallet to Your Wall</p>
                               <!--  <p>It is a long established fact that a reader will be distracted by the readable content of a page when.</p>
                                <a href="#">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 slide_pic">
                            <img src="{{ asset('frontend/images/slider_pic1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="item">
            <div class="banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="bantext">
                                <h1>"Nifticals”  - Physical NFT’s
                               </h1>
                               <p>Bringing Art From Your Digital Wallet to Your Wall</p>
                               <!--  <p>It is a long established fact that a reader will be distracted by the readable content of a page when.</p>
                                <a href="#">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 slide_pic">
                            <img src="{{ asset('frontend/images/slider_pic1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<section class="print_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h4>Paints that inspires you</h4>
                <h2>Showcase your NTS's with a <strong>Nifticals</strong></h2>
                <a href="{{ route('satirtha.product') }}">Order Now</a>
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="{{ asset('frontend/images/print_pic.png') }}">
            </div>
        </div>
    </div>
</section>

<!-- <section class="prod_area">
    <div class="container">
        <div class="row">
            <h2>Our Products</h2>
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
</section>

<section class="canvas_sec_back" style="background: url(images/canvas_sec_back.png) no-repeat center;">
    <div class="container">
        <div class="row">
            <h2>Make Your Wall Amazing With Our Canvas Prints</h2>
           <a href="#" data-toggle="modal" data-target="#myModal2">Order Now</a>
        </div>
    </div>
</section>

<section class="prod_area">
    <div class="container">
        <div class="row">
            <h2>Recent Products</h2>
            <div class="col-md-3 col-sm-3 col-6">
                <div class="prod_pic">
                    <div class="prod_pic_con">
                        <img src="images/p_pic9.png">
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
                        <img src="images/p_pic10.png">
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
                        <img src="images/p_pic11.png">
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

<div class="clearfix"></div>
@endsection
@section('jsContent')

@endsection