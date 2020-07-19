@extends('client.layout')

@section('page-title',$categories[$category_id - 1]->category_name)

@section('content')

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">


                    @forelse ($blogs as $blog)




                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0 w-50" src=" {{asset('blog_images').'/'.$blog->id.'.jpg'}} "
                                alt="">
                            <a href="#" class="blog_item_date">
                                <h3> {{$blog->created_at->format('d')}} </h3>
                                <p> {{$blog->created_at->format('M')}} </p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{route('blogDetail',$blog->id)}}">
                                <h2> {{ $blog->title }} </h2>
                            </a>
                            <p>
                                {{Str::limit(str_replace("&nbsp;","",strip_tags($blog->content)),100)}}
                            </p>
                            <ul class="blog-info-link">
                                <li><a href="{{route('category',$blog->category->category_id)}}"><i
                                            class="fa fa-user"></i> {{ $blog->category->category_name }} </a></li>

                            </ul>
                        </div>
                    </article>

                    @empty

                    @endforelse

                    {{ $blogs->links() }}


                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">


                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            @forelse ($categories as $category)
                            <li>
                                <a href="{{route('category',$category->category_id)}}" class="d-flex">
                                    <p> {{$category->category_name}} </p>
                                    <p></p>
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
<!--================Blog Area =================-->

@endsection