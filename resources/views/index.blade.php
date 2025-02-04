@extends("base")
@section("content")
<div id="side-bar" class="side-bar header-three">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset('/assets/images/banner/bg.webp') }}" alt="elevate">
        </div>
        <div class="inner-content">
            <h4 class="title">Professional Manufacturer for Diamond Tools and Power Tools Accessories.</h4>
            <p class="disc">
                We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
            </p>
            <!--<div class="footer">
                <h4 class="title">Got a project in mind?</h4>
                <a href="{{ route('contact') }}" class="rts-btn btn-seconday">Let's talk</a>
            </div>-->
        </div>
    </div>
    <!-- mobile menu area start -->
    @include('mobile-nav')
    <!-- mobile menu area end -->
</div>


<!-- rts banner swiper wrapper -->
<div class="swiper mySwiper-bannner-12">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <!-- rts banner area start -->
            <div class="rts-banner-area-12 rts-section-gap bg-image-h-15 bg_image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-content-12-wrapper with-thirteen">
                                <h1 class="title-main">
                                    PROFESSIONAL POWER TOOLS ACCESSORIES <br> SUPPLIERS ALL OVER INDIA
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts banner area end -->
        </div>
    </div>
    <div class="swiper-button-next"><i class="fa-light fa-arrow-right"></i></div>
    <div class="swiper-button-prev"><i class="fa-light fa-arrow-left"></i></div>
</div>
<!-- rts banner swiper wrapper end -->


<!-- our offer area start -->
<div class="rts-our-offer-area-main rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="offer-left-13">
                    <div class="title-area-wrapper-13">
                        <span>ABOUT US</span>
                        <h2 class="title">
                            DiamondK2 Power Tools Accessories
                        </h2>
                        <p class="disc text-justify">
                            We specializes in providing a wide range of high-quality add-ons and attachments for power tools. These accessories are designed to enhance the performance, versatility, and lifespan of various power tools, including drills, saws, grinders, sanders, and more. The product range typically includes items like drill bits, saw blades, sanding discs, polishing pads, screws, adapters, extension cords, batteries, and storage solutions.<br /><br />
                            At <a href="https://diamondk2.com" class="text-orange">DiamondK2</a>, we focuses on offering durable, precision-engineered products that improve the efficiency and accuracy of construction, woodworking, metalworking, and other trades that rely on power tools.<br /><br />
                            Whether for professional contractors or DIY enthusiasts, <a href="https://diamondk2.com" class="text-orange">DiamondK2</a> provides reliable and high-performing products to ensure optimal tool performance and safety. We may also focus on innovation, offering specialized products that meet the ever-evolving needs of the industry.
                        </p>
                        <a href="{{ asset('/assets/docs/catalogue.pdf') }}" class="rts-btn btn-primary" target="_blank">View Catalogue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-shape">
        <img src="{{ asset('/assets/images/about/01.png') }}" alt="about">
    </div>
</div>
<!-- our offer area end -->
<!-- our service area start -->
<div class="rts-service-area-three rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="col-12">
                <span>INDUSTRIES WE SERVE</span>
                <h2 class="title">
                    We are Power Tools Accessories manufacturer & supplier in India and beyond to the following industries.
                </h2>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-ship fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">MARINE</h5>
                        </a>
                        <p class="disc">Power Tools used in Marine</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-anchor fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">OFFSHORE</h5>
                        </a>
                        <p class="disc">Power Tools used in Offshore</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-cogs fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">ENGINEERING</h5>
                        </a>
                        <p class="disc">Power Tools used in Engineering</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-tint fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">OIL & GAS</h5>
                        </a>
                        <p class="disc">Power Tools used in Oil & Gas Industry</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-city fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">CONSTRUCTION</h5>
                        </a>
                        <p class="disc">Power Tools used for Construction</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-truck-loading fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">INDUSTRIAL LIFTING</h5>
                        </a>
                        <p class="disc">Power Tools used in Industrial Lifting</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-snowplow fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">PILING & FOUNDATION</h5>
                        </a>
                        <p class="disc">Power Tools used in Piling & Foundation</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single service area start-->
                <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <a href="#" class="">
                        <i class="fas fa-forklift fa-5x text-orange"></i>
                    </a>
                    <div class="content-area">
                        <a href="#">
                            <h5 class="title">CRANE & ENGINEERING</h5>
                        </a>
                        <p class="disc">Power Tools used in Crane & Engineering</p>
                        <a href="#" class="read-more-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service area end-->
            </div>

        </div>
    </div>
</div>
<!-- our service area end -->
<div class="rts-blog-grid-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <span>PRODUCTS</span>
                        <h2 class="title">
                            Trusted Power Tools Accessories Manufacturer and Suppliers in India
                        </h2>
                    </div>
                </div>
                <div class="row g-24">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/11.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 4" - ₹121.25 / unit</h5>
                                </a>
                                <p class="disc">
                                    Diamond Blade Zero Chipping Wet Cut - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Diamond Blade Zero Chipping Wet Cut" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/2.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 4" - ₹125.00 / unit</h5>
                                </a>
                                <p class="disc">
                                    Circular Tungsten Carbide Tipped Saws (4-30T) - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Circular Tungsten Carbide Tipped Saws (4-30T)" class="rts-btn btn-seconday" target="_blank">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/8.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 5" - ₹162.50 / unit</h5>
                                </a>
                                <p class="disc">
                                    Diamond Blade Zero Chipping Wet Cut - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Diamond Blade Zero Chipping Wet Cut" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/7.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 4" - ₹128.75 / unit</h5>
                                </a>
                                <p class="disc">
                                    Diamond Blade Zero Chipping Wet Cut - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Diamond Blade Zero Chipping Wet Cut" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail three">
                                <img src="{{ asset('/assets/images/products/6.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 4" - ₹133.75 / unit</h5>
                                </a>
                                <p class="disc">
                                    Diamond Blade Zero Chipping Wet Cut - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Diamond Blade Zero Chipping Wet Cut" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/4.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 4" - ₹143.75 / unit</h5>
                                </a>
                                <p class="disc">
                                    Diamond Blade Zero Chipping Wet Cut - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Diamond Blade Zero Chipping Wet Cut" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                </div>
                <div class="row g-24">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/10.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 3" - ₹135.00 / unit</h5>
                                </a>
                                <p class="disc">
                                    Cup Grinidng Wheel - General Purpose - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Cup Grinidng Wheel - General Purpose" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                </div>
                <div class="row g-24">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/1.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 4" - ₹137.50 / unit</h5>
                                </a>
                                <p class="disc">
                                    Circular Tungsten Carbide Tipped Saws (4-30T) - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Circular Tungsten Carbide Tipped Saws (4-30T)" class="rts-btn btn-seconday" target="_blank">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/9.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 4" - ₹153.75 / unit</h5>
                                </a>
                                <p class="disc">
                                    Circular Tungsten Carbide Tipped Saws (4-40T) - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Circular Tungsten Carbide Tipped Saws (4-40T)" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail two">
                                <img src="{{ asset('/assets/images/products/3.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 5" - ₹206.25 / unit</h5>
                                </a>
                                <p class="disc">
                                    Circular Tungsten Carbide Tipped Saws (5-40T) - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Circular Tungsten Carbide Tipped Saws (5-40T)" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single project area start -->
                        <div class="rts-single-project-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('/assets/images/products/5.jpeg') }}" alt="product">
                            </a>
                            <div class="project-inner">
                                <a href="#">
                                    <h5 class="title">Marble and Ceramic Cutting 7" - ₹287.50 / unit</h5>
                                </a>
                                <p class="disc">
                                    Circular Tungsten Carbide Tipped Saws (7-40T) - 500+ Feet Guaranteed
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=919881330858&text=Hello I want to know more details about Circular Tungsten Carbide Tipped Saws (7-40T)" class="rts-btn btn-seconday">Enquire Now</a>
                            </div>
                        </div>
                        <!-- single project area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("content")