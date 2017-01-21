@extends('layouts.master')

@section('title')
    {{ $post->title }} | @parent
    @stop

    @section('content')
            <!--Start breadcrumb area-->
    <section class="breadcrumb b-banner">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="{{ URL::route($currentLocale . '.blog') }}">Blog</a></li>
            </ol>
        </div>
    </section>
    <!--End breadcrumb area-->
    <!--start  single blog area-->
    <section class="single-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 single-blog">
                    <h2>{{ $post->title }}</h2>
                    <article class="blog-items">
                        <ul class="post-meta nav">
                            <li><i class="pe-7s-clock"></i><a href="#">{{ $post->created_at->format('d F, Y') }}</a>
                            </li>
                            <li>Posted by: <a href="#"> admin</a></li>
                            <li>
                                <?php if ($previous = $post->present()->previous): ?>
                                <a href="{{ route(locale() . '.blog.slug', [$previous->slug]) }}">Read also {{$previous->title}}</a>
                                <?php endif; ?>
                                <?php if ($next = $post->present()->next): ?>
                                <a href="{{ route(locale() . '.blog.slug', [$next->slug]) }}">Read also {{$next->title}}</a>
                                <?php endif; ?>
                            </li>
                            {{--<li><i class="pe-7s-chat" aria-hidden="true"></i><a href="#">3Comments</a></li>--}}
                        </ul>
                        {{--<img class="img-responsive" src="image/single1.jpg" alt="">--}}
                        {!! $post->content !!}
                    </article>
                    <div class="row m0 posts-social">
                        {{--<ul class="tag">--}}
                        {{--<li><a href="#">99k</a></li>--}}
                        {{--<li><a href="#">online services</a></li>--}}
                        {{--<li><a href="#">portfolios</a></li>--}}
                        {{--</ul>--}}
                        <ul class="social">
                            <li><a href="#"><i class=" social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_googleplus"></i></a></li>
                            <li><a href="#">+</a></li>
                        </ul>
                    </div>
                    <div class="media author-bio">
                        {{--<div class="media-left">--}}
                            {{--<a href="#"></a>--}}
                        {{--</div>--}}
                        <div class="media-body media-middle">
                            {{--<h4><a href="#">--}}
                                    {{--<small>Author</small>--}}
                                    {{--<br>ADMIN</a></h4>--}}
                            <p>The views expressed here are those of the authors and do not necessarily represent or
                                reflect the views of <b>AveNewFunding</b>.</p>
                        </div>
                    </div>
                    {{--<h3 class="leave-reply-title">Leave a reply</h3>--}}

                    {{--<form id="contactForm" class="row contact-form" novalidate="novalidate">--}}
                        {{--<div class="col-sm-4 form-group"><input type="text" id="name" name="name"--}}
                                                                {{--placeholder="First name" required=""--}}
                                                                {{--class="form-control"></div>--}}
                        {{--<div class="col-sm-4 form-group"><input type="email" id="email" name="email" placeholder="Email"--}}
                                                                {{--required="" class="form-control"></div>--}}
                        {{--<div class="col-sm-4 form-group"><input type="text" id="phone" name="phone"--}}
                                                                {{--placeholder="Website" class="form-control"></div>--}}
                        {{--<div class="col-sm-12 form-group"><textarea placeholder="Message"></textarea></div>--}}
                        {{--<div class="col-sm-12">--}}
                            {{--<button type="submit" class="btn submit button">post a comment</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                </div>
                <div class="col-md-3 sidebar-right sidebar_res">
                    <div class="sidebar-widget widget-categories">
                        <h2 class="widget-tittle">Category</h2>
                        <ul class="nav categories">
                            <li><a href="#">{{$post->category->name}}</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget managment">
                        <img class="img-responsive" src="{{Theme::url("image/services-page-img/right1.jpg")}}" alt="">

                        <div class="content">
                            <h2>$5,000 to $5,000,000 in 24-72 hours?</h2>

                            <p>We're here to help you!</p>
                            <a class="btn button" href="#">get started</a>
                        </div>
                    </div>

                    <div class="row m0 sidebar-widget widget-tag">
                        <h2 class="widget-tittle">Tag</h2>
                        <ul class="tag">
                            @foreach($post->tags as $tag)
                                <li><a href="#">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    {{--<div class="row m0 sidebar-widget widget-gallery">--}}
                        {{--<h2 class="widget-tittle">Ree our gallery</h2>--}}
                        {{--<ul class="gallery">--}}
                            {{--<li><a href="#"></a></li>--}}
                            {{--<li><a href="#"></a></li>--}}
                            {{--<li><a href="#"></a></li>--}}
                            {{--<li><a href="#"></a></li>--}}
                            {{--<li><a href="#"></a></li>--}}
                            {{--<li><a href="#"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>
    <!--End  single blog area-->
@stop
