@extends('client.layout')

@section('page-title','Home')

@section('content')
<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="outline_text d-none d-lg-block">
            Webbenders
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="slider_text text-center">
                        <span>Tech Teams That Work For You</span>
                        <h3>
                            We Create Digital Products That Empower Organizations
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->


{{-- portfolio area --}}
{{-- <div class="portfolio_area">
    <div class="portfolio_wrap">
        <div class=" single_gallery">
            <div class="thumb">
                <img src="img/portfolio/tea.png" alt="">
            </div>
            <div class="gallery_hover">
                <div class="hover_inner">
                    <span>Web Application</span>
                    <a target="blank" href="https://keepcalmdrinktea.netlify.app/">
                        <h3>Tea Station Project</h3>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="more_works text-center">
        <a href="portfolio-work.html">More Works</a>
    </div>
</div> --}}
{{-- end of portfolio area --}}

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






{{-- blog area --}}
<div class="creative_blog_area">
    <div class="outline_text blog d-none d-lg-block ">
        Blog
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-6">
                <div class="blog_title">
                    <h3>Recent Blog Posts</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="more_blog">
                    <a href="{{route('blog')}}" class="boxed-btn3">More Blogs</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="creative_blog_active owl-carousel">
                    @forelse ($blogs->take(4) as $blog)


                    <div class="single_blog">
                        <div class="thumb">
                            <a href="{{route('blogDetail',$blog->id)}}">
                                <img class="w-75" src="{{asset('blog_images').'/'.$blog->id.'.jpg'}}" alt="">
                            </a>
                        </div>
                        <div class="blog_content">
                            <a href="#">
                                <span class="date">{{$blog->created_at->format('M, d, Y')}}</span>
                            </a>
                            <a href="{{route('blogDetail',$blog->id)}}">
                                <h3> {{$blog->title}} </h3>
                            </a>
                            <div class="owner_info">
                                <div class="author_thumb">
                                    <img src="img/creative_blog/author2.png" alt="">
                                </div>
                                <div class="info">
                                    <a href="#">
                                        <h4> {{$blog->author}} </h4>
                                    </a>
                                    <p>Content Creator</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>

</div>
{{-- end of blog area --}}

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
                                        <img class="rounded-circle" src="img/testmonial/testimonial1.png" alt="">
                                    </div>
                                    <p>Professional, responsive, and able to keep up with ever-changing demand and tight
                                        deadlines: That's how I would describe
                                        Webbenders Company.</p>
                                    <div class="testmonial_author">
                                        <h3>Alexander Kjilakov</h3>
                                        <span>Webforrest Project Manager</span>
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
                                        <img class="rounded-circle" src="img/testmonial/testimonial3.png" alt="">
                                    </div>
                                    <p>“The Webbender Company has been an integral part of our content marketing
                                        success. We have seen a notable increase in
                                        organic leads since we began using their services in 2016.”</p>
                                    <div class="testmonial_author">
                                        <h3>Roland Weedon</h3>
                                        <span>CEO & Founder, Seldom Media </span>
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
                                        <img class="rounded-circle" src="img/testmonial/testimonial2.png" alt="">

                                    </div>
                                    <p>Webbender Web Design is the real deal! Best. Product. Ever! I have gotten at
                                        least 50 times the value from Webbenders
                                        Web Design. </p>
                                    <div class="testmonial_author">
                                        <h3>Mike Ramirez</h3>
                                        <span>Independent Blogger, Adventurer</span>
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
                    <a class="boxed-btn3" href="{{route('contact')}}">Start Talking</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- discuss_projects_end  -->
@endsection