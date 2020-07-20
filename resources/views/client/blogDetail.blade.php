@extends('client.layout')

@section('page-title','Blog')

@section('content')
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="{{asset('blog_images').'/'.$blog->id.'.jpg'}}" alt="">
               </div>
               <div class="blog_details">
                  <h2> {{$blog->title}} </h2>
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a href="{{route('category',$blog->category->category_id)}}"><i class="fa fa-user"></i>
                           {{$blog->category->category_name }}</a></li>
                  </ul>
                  <p class="excert">
                     {!! $blog->content !!}
                  </p>
               </div>
            </div>
            <div class="navigation-top">
               <div class="d-sm-flex justify-content-between text-center">
                  <p class="like-info"><span class="align-middle"></p>
                  <div class="col-sm-4 text-center my-2 my-sm-0">
                  </div>
                  <ul class="social-icons">
                     <li>
                        <div class="sharethis-inline-share-buttons"></div>
                     </li>
                  </ul>
               </div>
               <div class="navigation-area">
                  <div class="row">
                  </div>
               </div>
            </div>
            <div class="blog-author">
               <div class="media align-items-center">
                  <img src="{{asset('img/team/author.jpg')}}" alt="">
                  <div class="media-body">
                     <a href="#">
                        <h4> Web Bender </h4>
                     </a>
                     <p>Technology company who blogs about science</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="blog_right_sidebar">
               <aside class="single_sidebar_widget post_category_widget">
                  <h4 class="widget_title">Category</h4>
                  <ul class="list cat-list">
                     @forelse ($categories as $category)
                     <li>
                        <a href="{{route('category',$blog->category->category_id)}}" class="d-flex">
                           <p> {{$category->category_name}} </p>
                           <p> </p>
                        </a>
                     </li>
                     @empty
                     @endforelse
                  </ul>
               </aside>
               <aside class="single_sidebar_widget popular_post_widget">
                  <h3 class="widget_title">Recent Posts</h3>
                  @forelse ($blogs->take(3) as $blog)
                  <div class="media post_item">
                     <img class="w-25" src="{{asset('blog_images').'/'.$blog->id.'.jpg'}}" alt="post">
                     <div class="media-body">
                        <a href="{{route('blogDetail',$blog->id)}}">
                           <h3> {{$blog->title}} </h3>
                        </a>
                        <p> {{$blog->created_at->format('M, d, Y')}} </p>
                     </div>
                  </div>
                  @empty
                  @endforelse
               </aside>
            </div>
         </div>
      </div>
   </div>
</section>
<!--================ Blog Area end =================-->

@endsection