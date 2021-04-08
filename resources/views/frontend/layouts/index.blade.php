@extends('frontend.app')
@section('content')
<div class="main_slider">
    <div class="main-slider owl-carousel" id="banner-frontend-id">
        <div class="item">
            <div class="banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="bantext">
                                <h1><span>"Nifticals"</span>  - Physical NFT’s
                               </h1>
                               <p>Bringing art from your digital wallet to your wall.</p>
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
        <!-- <div class="item">
            <div class="banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="bantext">
                                <h1>"Nifticals”  - Physical NFT’s
                               </h1>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                               
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 slide_pic">
                            <img src="{{ asset('frontend/images/slider_pic1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div> -->
    </div>
</div>


<section class="print_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <!-- <h4>Paints that inspires you</h4> -->
                <h2>Showcase your NFT's with a <br><strong>Niftical</strong></h2>
                <a href="product.php">Order Now</a>
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
<script>
    $(function(){
        load_banner_fx();
    });

    function load_banner_fx()
    {
        $.ajax({
            url: "{{ route('satirtha.banner-all-data') }}",
            type: "GET",
            dataType: "json",
            success: function(e){
                console.log(e);
                    $("#banner-frontend-id").html(e.banner_html);
                    load_banner_owl_fx();
            }, error: function(e){

            }
        })
    }

    function load_banner_owl_fx()
    {
        var owl = $('.main-slider');
        owl.owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            loop: true,
            items: 1,
            center: true,
            nav: true,
            thumbs: false,
            thumbImage: false,
            thumbsPrerendered: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item',
            navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],

        });	
        var owl = $('.testi_slider');
        owl.owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            loop: true,
            items: 1,
            center: true,
            nav: true,
            thumbs: true,
            thumbImage: false,
            thumbsPrerendered: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item',
            navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
        });
        var owl = $('.product_rolling');
        owl.owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            loop: true,
            items:4,
            itemsMobile:[568,2],
            itemsTablet:[768,3],
            itemsTablet:[1024,3],
            center: false,
            nav: true,
            thumbs: true,
            thumbImage: false,
            thumbsPrerendered: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item',
            navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
            responsive: {
                0: {
                items: 1
                },

                600: {
                items: 2
                },

                1024: {
                items: 3
                },

                1366: {
                items: 4
                }
            }
        });
    }
</script>
@endsection