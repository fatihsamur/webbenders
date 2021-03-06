@extends('client.layout')

@section('page-title','portfolio detail')

@section('content')
    
    <div class="work_details_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="details_catagory_wrap">
                        <div class="single_catagory">
                            <span>Client</span>
                            <h4>Mesica Chouhan</h4>
                        </div>
                        <div class="single_catagory">
                            <span>Category</span>
                            <h4>Mobile App</h4>
                        </div>
                        <div class="single_catagory">
                            <span>Project Date</span>
                            <h4>Oct 12, 2019</h4>
                        </div>
                        <div class="single_catagory">
                            <span>Share Project</span>
                            <div class="social_links">
                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </div>
                        </div>
                        <div class="single_catagory">
                            <a class="boxed-btn3 porject_btn" href="#">Project Link</a>
                        </div>
                    </div>
                    <div class="banner">
                        <img src="img/details/banner_details.png" alt="">
                    </div>
                    <div class="details_info">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="info">
                                    <p>A wonderful serenity has taken to the possession of my entire soul network infrastructure, including consolidation of established network designed and created infrastructure. Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info">
                                    <p>A wonderful serenity has taken to the possession of my entire soul network infrastructure, including consolidation of established network designed and created infrastructure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details_single_img">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="thumb">
                                    <img src="img/details/1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="thumb">
                                    <img src="img/details/2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area ">
            <div class="outline_text white testmonial d-none d-lg-block">
                    Testimonial
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_carousel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="single_testmonial text-center">
                                                <div class="thumb">
                                                        <img src="img/testmonial/thumb.png" alt="">
                                                </div>
                                            <p>Innovative brewing methods and our coffee is sourced from various parts of the globe and are roasted to perfection. </p>
                                            <div class="testmonial_author">
                                                <h3>Mesica Chouhan</h3>
                                                <span>Mesica Chouhan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="single_testmonial text-center">
                                                <div class="thumb">
                                                        <img src="img/testmonial/thumb.png" alt="">
                                                </div>
                                            <p>Innovative brewing methods and our coffee is sourced from various parts of the globe and are roasted to perfection. </p>
                                            <div class="testmonial_author">
                                                <h3>Mesica Chouhan</h3>
                                                <span>Mesica Chouhan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="single_testmonial text-center">
                                                <div class="thumb">
                                                        <img src="img/testmonial/thumb.png" alt="">
                                                </div>
                                            <p>Innovative brewing methods and our coffee is sourced from various parts of the globe and are roasted to perfection. </p>
                                            <div class="testmonial_author">
                                                <h3>Mesica Chouhan</h3>
                                                <span>Mesica Chouhan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /testimonial_area  -->
    
    <!-- discuss_projects_start  -->
    <div class="discuss_projects">
            <div class="outline_text white project d-none d-lg-block">
                    Let’s talk
            </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_text text-center">
                        <h3>Let’s start your project with us</h3>
                        <a class="boxed-btn3" href="#">Start Talking</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- discuss_projects_end  -->
@endsection