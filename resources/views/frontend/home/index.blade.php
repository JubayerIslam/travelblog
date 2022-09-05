@extends('frontend/master') 

@section('content')
<!-- Hero Section -->
<main class="hero-blog-container mt-lg-1 mb-sm-4">
    <section class="mb-30px">
        <div class="container">
            <div class="hero-banner">
                <div class="hero-banner-content">
                    <h3>Tours & Travels</h3>
                    <h1>Amazing Places on earth</h1>
                    <h4>July 12, 2022</h4>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- ************ -->
<!-- Blog Card Section -->
<section class="recent-post-blog mb-4">
    <div class="container mt-lg-3">
        <div class="row align-items-center mb-md-5">
            <div class="col">
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('/frontend/') }}/img/xblog-slide.webp" alt="Woman on Hill" />
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('/frontend/') }}/img/xblog-slide3.webp" alt="Handbag" />
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('/frontend/') }}/img/xblog-slide2.webp" alt="Man Jacket" />
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***************** -->
<!-- Blog Section -->
<section class="blog-post-area section-margin mt-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ( $posts as $post)
                <div class="single-recent-blog-post">
                    <div class="thumb">
                      <a href="{{ url('blog/details'.$post->id.'/'.str_replace(' ','-', strtolower($post->title))) }}">
                        <img class="img-fluid" src="{{ asset('post/img/'.$post->image) }}" alt="" />
                      </a>
                        <ul class="thumb-info">
                            <li>
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i>{{ $post->user ? ucfirst($post->user->name) : 'Guest User' }}</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>{{ date('F d, Y', strtotime($post->created_at)); }}</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i>2 Comments</a>
                            </li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="#">
                            <h3>{{ $post->title }}</h3>
                        </a>
                        <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                        <p>
                            {{ $post->description }}
                        </p>
                        <a class="button" href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                @endforeach
                {{-- Pagination --}}
                {{ $posts->links() }}
            </div>
            


            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget newsletter-widget">
                        <h4 class="single-sidebar-widget__title">Newsletter</h4>
                        <div class="form-group mt-30">
                            <div class="col-autos">
                                <input type="text" class="form-control mb-3" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" />
                            </div>
                        </div>
                        <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                    </div>
                    <div class="single-sidebar-widget post-category-widget">
                        <h4 class="single-sidebar-widget__title">Catgory</h4>
                        <ul class="cat-list mt-20">
                            @foreach($categories as $category)
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>{{ $category->name }}</p>
                                    <p>(01)</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 class="single-sidebar-widget__title">Popular Post</h4>
                        <div class="popular-post-list">
                            <div class="single-post-list">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('/frontend/') }}/img/xthumb1.webp" alt="" />
                                    <ul class="thumb-info">
                                        <li><a href="#">Adam Colinge</a></li>
                                        <li><a href="#">Dec 15</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="single-post-list">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('/frontend/') }}/img/xthumb2.webp" alt="" />
                                    <ul class="thumb-info">
                                        <li><a href="#">Adam Colinge</a></li>
                                        <li><a href="#">Dec 15</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h6>Tennessee outback steakhouse the worker diagnosed</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="single-post-list">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('/frontend/') }}/img/xthumb3.webp" alt="" />
                                    <ul class="thumb-info">
                                        <li><a href="#">Adam Colinge</a></li>
                                        <li><a href="#">Dec 15</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h6>Tennessee outback steakhouse the worker diagnosed</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="single-sidebar-widget__title">Popular Post</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">software</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
