@extends('layouts.master')

@section('title')
    Blog | @parent
    @stop

    @section('content')
            <!--Start breadcrumb area-->
    <section class="header-breadcrumb">
        <div class="container">
            <div class="row m0 page-cover">
                <div class="section-header">
                    <h2>Blog</h2>

                </div>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="latest-featured-area">
        <div class="container">
            <div class="row">

                <div class="col-md-9 featured-left">
                    <div class="row">
                        <?php if (isset($posts)): ?>
                        <?php foreach($posts as $post): ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="items">
                                <a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">
                                    <img class="img-responsive"
                                         src="{{ $post->files->first()->path}}" alt="">
                                </a>
                                <a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}"><h2
                                            class="tittle">{{ $post->title }}</h2></a>

                                <p class="text-center"><i class="pe-7s-clock"></i>{{$post->created_at->format('d F')}}</p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3 sidebar-right">
                    <div class="sidebar-widget managment">
                        <img class="img-responsive" src="{{Theme::url("image/services-page-img/right1.jpg")}}" alt="">

                        <div class="content">
                            <h2>$5,000 to $5,000,000 in 24-72 hours?</h2>

                            <p>We're here to help you!</p>
                            <a class="btn button" href="#">get started</a>
                        </div>
                    </div>
                    <div class="sidebar-widget testimonial">
                        <p>They are my first and only call when I need financing. I needed financing quickly to fund
                            an event that I otherwise would not have been able to take on. Thank you AveNew!</p>
                        <img src="{{Theme::url("image/services-page-img/right2.png")}}" alt="">
                        <a href="#"><h4>Michele,<span> Texas. CEO</span></h4></a>
                    </div>
                    <div class="sidebar-widget r-news">

                        <h4>Recent news</h4>
                        <?php if (isset($latestPosts)): ?>
                        <?php foreach ($latestPosts as $latest): ?>
                        <p class="p-t">{{$latest->title}} </p>
                        <a href="#"><i class="pe-7s-clock"></i>{{$latest->created_at->format('d F')}}</a>
                        <?php endforeach; ?>
                        <?php endif;?>
                    </div>

                </div>
            </div>
        </div>
    </section>
@stop
