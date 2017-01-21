@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}"/>
    <meta name="description" content="{{ $page->meta_description }}"/>
    @stop

    @section('content')
            <!--Start breadcrumb area-->
    <section class="header-breadcrumb">
        <div class="container">
            <div class="row m0 page-cover">
                <div class="section-header">
                    <h2>A Funding Solution For Every Business</h2>

                </div>
                <ol class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Products</li>
                </ol>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--start  latest featured area-->
    <section class="latest-featured-area">
        <div class="container">

            <div class="row">
                <div class="col-md-9 featured-left">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="items">
                                <a href="#">
                                    <img class="img-responsive"
                                         src="{{Theme::url("image/services-page-img/left-1.jpg")}}" alt="">
                                </a>
                                <a href="#"><h2 class="tittle">Gross Revenue Advance</h2></a>

                                <p>This is a simple, fixed fee product based on your current gross sales/revenue. We
                                    have
                                    terms ranging from 3 months to 2 years and this is an unsecured business finance
                                    product. </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="items">
                                <a href="#">
                                    <img class="img-responsive"
                                         src="{{Theme::url("image/services-page-img/left-4.jpg")}}" alt="">
                                </a>
                                <a href="#"><h2 class="tittle">Unsecured Fixed Weekly Advance</h2></a>

                                <p>For those business owners who qualify, we can provide unsecured financing with a
                                    simple
                                    weekly payback program. This is a great product for business owners who generate
                                    revenue
                                    on more of a sporadic basis, but are above our minimum qualifications.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="items">
                                <a href="#">
                                    <img class="img-responsive"
                                         src="{{Theme::url("image/services-page-img/left-2.jpg")}}" alt="">
                                </a>
                                <a href="#"><h2 class="tittle">Unsecured Fixed Daily Advance</h2></a>

                                <p>Get up to $5 Million dollars in literally hours with an easy daily debit payback
                                    structure. You know exactly how much you will pay back and each day, we
                                    automatically
                                    withdraw the funds from your account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="items">
                                <a href="#">
                                    <img class="img-responsive"
                                         src="{{Theme::url("image/services-page-img/left-5.jpg")}}" alt="">
                                </a>
                                <a href="#"><h2 class="tittle">Merchant Account Financing</h2></a>

                                <p>If your business processes credit cards, then you can get access to a quick and easy
                                    program. We can fund your business up to 200% of your monthly credit card sales in
                                    just
                                    hours. The payback is even easier because we can just simply instruct your processor
                                    to
                                    send us a small portion of your sales each day.</p>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="row m0 case-info">
                                <p>
                                    Instead of trying to sell you on one funding product, we create a specific funding
                                    program to suit your exact needs.
                                </p>

                                <div class="media">

                                    <div class="media-body">
                                        <h3>Minimum Requirements for funding:</h3>

                                        <div class="list">
                                            <h4>Must be in business greater than 6 months</h4>
                                        </div>
                                        <div class="list">
                                            <h4>Must generate a minimum of $10K per month in gross deposits</h4>
                                        </div>
                                        <div class="list">
                                            <h4>No open bankruptcy</h4>
                                        </div>
                                        <div class="list">
                                            <h4>Credit requirement is determined by each applicant</h4>
                                        </div>
                                        <div class="list">
                                            <h4>There are no application fees or obligations, so find out if you are
                                                eligibile today!</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
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

                </div>
            </div>
        </div>
    </section>
    <!--End  latest featured area-->
@stop
