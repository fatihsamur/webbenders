@extends('client.layout')


@section('page-title','About Us')
@section('content')
<div class="about_wrap_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="about_heading text-center">
                    <h3>MORE THAN A VENDOR: WE'RE AN EXTENSION OF YOUR TEAM</h3>
                </div>
            </div>
        </div>
        <div class="about_info_wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_info">
                        <p> &nbsp&nbsp&nbsp&nbsp At Webbenders, our purpose is to empower digital relationships through
                            mobility.
                            By
                            designing and developing custom apps and mobile web-apps, we act as a guide, leading our
                            clients through the process of building complex digital products. <br>
                            &nbsp&nbsp&nbsp&nbsp We plan, design and develop innovative websites. We collaborate with
                            you throughout the project. We learn
                            about your organization
                            and design technology
                            solutions that meet your strategic objectives.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_info">
                        <p> &nbsp&nbsp&nbsp&nbsp We've crafted our development processes for maximum efficiency and
                            transparency, helping you manage your
                            costs and keeping you up to date on your project in case anything may affect the bottom line
                            <br> &nbsp&nbsp&nbsp&nbsp
                            We partner with our clients to understand their unique business context and create custom
                            software that turns their
                            “secret sauce” into an enhanced competitive edge. We have in-house expertise in the most
                            sustainable, adaptable
                            technologies and platforms.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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