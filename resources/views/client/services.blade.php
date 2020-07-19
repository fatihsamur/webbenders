@extends('client.layout')

@section('page-title','Services')

@section('content')
<!-- service_area  -->
<div class="service_area">
    <div class="outline_text white d-none d-lg-block">
        Services
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/1.svg" alt="">
                    </div>
                    <h3>Web Development</h3>
                    <p>Expend your online presence<br> and get the future proof <br>solution to your business needs<br>
                        with our web development services </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/2.svg" alt="">
                    </div>
                    <h3>Mobile Development</h3>
                    <p>Get a competitive edge <br> increase your brand recognition<br>
                        and create loyalty with great<br> mobile applications</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/3.svg" alt="">
                    </div>
                    <h3>Online Marketing</h3>
                    <p>Ensure high visibility of your site <br> with the help of online marketing <br>
                        such as a succesful SEO strategy<br>and a blog promotions</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service_area">
    <div class="outline_text white d-none d-lg-block">
        Technology
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/html5.svg" alt="">
                    </div>
                    <h3>HTML & CSS</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/javascript.svg" alt="">
                    </div>
                    <h3>Javascript</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/laravel.svg" alt="">
                    </div>
                    <h3>Laravel</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/ service_area  -->





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
                    <a class="boxed-btn3" href="{{route('contact')}}">Start Talking</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- discuss_projects_end  -->
@endsection