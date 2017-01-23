@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}"/>
    <meta name="description" content="{{ $page->meta_description }}"/>
@stop

@section('content')
    <section class="slider-area">
        <div class="slider-carousel">
            <div class="item">
                <div class="slider-img">
                    <img src="{{Theme::url("image/easy.jpg")}}" alt="">
                </div>
                <div class="s-content">
                    <h3 class="wow slideInLeft">We Make Small Business</h3>

                    <h2 class="wow slideInRight">Funding Easy</h2>

                    <p>Less Paperwork. More Attention. No Hidden Fees.</p>
                    <a class="btn button" href="#get-started">Get Started</a>
                </div>
            </div>
            <div class="item slider-img">
                <div class="slider-img">
                    <img src="{{Theme::url("image/slide2.jpg")}}" alt="">
                </div>
                <div class="s-content">
                    <h3 class="wow slideInLeft">Repay at your own pace</h3>

                    <h2 class="wow slideInRight">Grow your business</h2>

                    <p>Through merchant cash advance. No collateral needed</p>
                    <a class="btn button" href="#get-started">Get Started</a>
                </div>
            </div>
            <div class="item slider-img">
                <div class="slider-img">
                    <img src="{{ Theme::url("image/slider-img1.jpg")}}" alt="">
                </div>
                <div class="s-content">
                    <h3 class="wow slideInLeft">Proven Funder</h3>

                    <h2 class="wow slideInRight">Get the best rate</h2>

                    <p>By receiving multiple offers. Get the capital you need</p>
                    <a class="btn button" href="#get-started">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!--End slider area-->

    <!--start services area-->
    <section class="services-area">
        <div class="container">
            <div class="row m0 service-group">
                <div class="col-md-4 service-group-1">
                    <div class="box-i">
                        <img src="{{Theme::url("image/icon/1.png")}}" alt="">
                    </div>
                    <div class="content">
                        <h2>Account Financing</h2>

                        <p>If your business processes credit cards, then you can get access to a quick and easy
                            program. We
                            can fund your business up to 200% of your monthly credit card sales in just hours..</p>
                        <a class="read-button" href="/products">Read more <i class="arrow_right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 service-group-1">
                    <div class="box-i">
                        <img src="{{Theme::url("image/icon/2.png")}}" alt="">
                    </div>
                    <div class="content">
                        <h2>Weekly Advance</h2>

                        <p>For those business owners who qualify, we can provide unsecured financing with a simple
                            weekly
                            payback program. This is a great product for business owners who generate revenue..</p>
                        <a class="read-button" href="/products">Read more <i class="arrow_right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 service-group-1">
                    <div class="box-i">
                        <img src="{{Theme::url("image/icon/3.png")}}" alt="">
                    </div>
                    <div class="content">
                        <h2>Gross Revenue Advance</h2>

                        <p>This is a simple, fixed fee product based on your current gross sales/revenue. We have
                            terms
                            ranging from 3 months to 2 years and this is an unsecured business finance product.</p>
                        <a class="read-button" href="/products">Read more <i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row m0 services-promo">
                <div class="section-header">
                    <h2>We help you to grow your business</h2>

                    <p>We know the pain of growing a business! We have been their, our employees have been their,
                        our
                        partners have been their. So we know what your pain! And we want to help. </p>
                </div>
                <div class="row services-info">
                    <div class="col-md-3 col-sm-6">
                        <div class="s-info">
                            <span>20</span>
                        </div>
                        <div class="s-info-text">
                            <h4>Year of <br>experience</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="s-info">
                            <span>88</span>
                        </div>
                        <div class="s-info-text">
                            <h4>Award<br> winning</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="s-info">
                            <span>324</span>
                        </div>
                        <div class="s-info-text">
                            <h4>Happy<br> customers</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="s-info">
                            <span>100%</span>
                        </div>
                        <div class="s-info-text">
                            <h4>Satisfied<br>customers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End services area-->

    <!--start about us area-->
    <section class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 a-text">
                    <div class="section-header">
                        <h2>about us</h2>

                        <p>Built by business owners for business owners. We have owned restaurants, healthcare and
                            marketing
                            companies &dash; just like you. We found it almost impossible to obtain financing
                            partners and
                            products that could meet the demands of our businesses &dash; so we decided to start
                            one. We won&lsquo;t
                            stop until we bring you the best funding option at the lowest rate possible.</p>
                        <a class="btn button" href="#">Read More<i class="arrow_right"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="{{Theme::url("image/about-us/1.png")}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--End about us area-->

    <!--start call-action-baner-area-->
    <section class="call-action-baner-area">
        <div class="baner-content">
            <h2>Get the cash to grow <br> your business <span>now</span></h2>

            <p>Our loan consultants will help you get the cash you need</p>
            <a class="btn button" href="#get-started">get started</a>
        </div>
    </section>
    <!--End call-action-baner-area-->

    <!--start why-choose-us-area-->
    <section class="why-choose-us-area">
        <div class="container">
            <div class="section-header">
                <h2>Why choose us?</h2>
            </div>
            <div class="row choose-us">
                <div class="col-md-3">
                    <div class="service-group-1">
                        <div class="box-i">
                            <img src="{{Theme::url("image/icon/4.png")}}" alt="">
                        </div>
                        <div class="content">
                            <h2>Experienced</h2>

                            <p>In molestie, neque et porta lobortis, ligula sem auctor mauris, a luctus lacus quam
                                sit amet
                                augue. Aliquam eu felis. Nullam vel erat. Phasellus erat nibh</p>
                        </div>
                    </div>
                    <div class="service-group-1">
                        <div class="box-i">
                            <img src="{{Theme::url("image/icon/6.png")}}" alt="">
                        </div>
                        <div class="content">
                            <h2>Professional</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-6 why-r-texts">
                    <div class="service-group-1">
                        <div class="box-i">
                            <img src="{{Theme::url("image/icon/5.png")}}" alt="">
                        </div>
                        <div class="content">
                            <h2>Easy To Use</h2>

                            <p>Nulla eros neque, egestas ut, auctor eu, luctus vitae, nisi. Aenean malesuada leo a
                                nunc.
                                Etiam fermentum neque in justo. Aliquam erat volutpat. Aenean tellus</p>
                        </div>
                    </div>
                    <div class="service-group-1">
                        <div class="box-i">
                            <img src="{{Theme::url("image/icon/7.png")}}" alt="">
                        </div>
                        <div class="content">
                            <h2>Vibrant</h2>

                            <p>Neque et porta lobortis, ligula sem auctor mauris, a luctus lacus quam sit amet
                                augue.
                                Aliquam eu felis. Nullam vel erat. Phasellus erat nibh, nonummy sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End why-choose-us-area-->

    <!--start our process area-->
    <section class="process-area" id="how-it-works">
        <div class="container">
            <div class="section-header">
                <h2>How it Works</h2>

                <p><b>Your Benefits</b> &dash; No commitment or obligation, Compare offers from different lenders
                    and
                    Instant access
                    to future working capital</p>
            </div>
            <div class="row m0 p-timeline">
                <div class="column">
                    <div class="timeline">
                        <div class="media">
                            <div class="media-body">
                                <h2>Fill Out Application Form</h2>
                            </div>
                            <div class="media-left">
                                <span>01</span>
                            </div>
                        </div>
                        <p>Provide us with your name and contact details. We will be needing these to process your
                            loan
                            application.</p>
                    </div>
                </div>
                <div class="column top">
                    <div class="timeline">
                        <div class="media">
                            <div class="media-left">
                                <span>02</span>
                            </div>
                            <div class="media-body">
                                <h2>Get Matched With Lenders</h2>
                            </div>
                        </div>
                        <p>Check your loan options from our partner banks and lenders and choose the best one.</p>
                    </div>
                </div>
                <div class="column">
                    <div class="timeline">
                        <div class="media">
                            <div class="media-body">
                                <h2>Get Loan!</h2>
                            </div>
                            <div class="media-left">
                                <span>03</span>
                            </div>
                        </div>
                        <p>Get your loan after processing and approval from our partners.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End  our process area-->

    <!--start team area-->
    <section class="team-area">
        <div class="container">
            <div class="section-header">
                <h2>Meet our team</h2>
            </div>
            <div class="team">
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/1.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/2.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/3.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/1.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/2.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/3.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/1.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/2.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{Theme::url("image/team/3.jpg")}}" alt="">
                            <ul class="social-icon">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                                <li><a href="#"><i class="icon_mail"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <a href="#"><h4>John Joe</h4></a>

                            <p>Chartered Financial Advisor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End team area-->

    <!--start partner-logo-->
    <section class="partner-logo-area">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>Meet our team</h2>
                </div>
                <div class="col-md-2">
                    <img src="{{Theme::url("image/client_logo1.png")}}" alt="">
                </div>
                <div class="col-md-3 middle_client">
                    <img src="{{Theme::url("image/client_logo2.png")}}" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{Theme::url("image/client_logo3.png")}}" alt="">
                </div>
                <div class="col-md-3">
                    <img src="{{Theme::url("image/client_logo4.png")}}" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{Theme::url("image/client_logo5.png")}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--End partner-logo-->

    <!--start latest news area-->
    <section class="latest-news-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 l-news-left">
                    <h2 class="tittle">latest NEWS</h2>

                    <div class="news-info">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{Theme::url("image/l-news/left-1.jpg")}}" alt="">
                            </div>
                            <div class="media-body">
                                <h3>Prepare for the Unexpected: How to Keep Your Retirement</h3>
                                <ul class="nav post-meta">
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#"><i class="pe-7s-clock"></i>30 March</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img src="{{Theme::url("image/l-news/left-2.jpg")}}" alt="">
                            </div>
                            <div class="media-body">
                                <h3>
                                    Should I Invest Or Pay Down My Student Loans?</h3>
                                <ul class="nav post-meta">
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#"><i class="pe-7s-clock"></i>30 March</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img src="{{Theme::url("image/l-news/left-3.jpg")}}" alt="">
                            </div>
                            <div class="media-body">
                                <h3>

                                    Finance news you need to know today</h3>
                                <ul class="nav post-meta">
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#"><i class="pe-7s-clock"></i>30 March</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="read-button" href="/blog/posts">Read more <i class="arrow_right"></i></a>
                </div>
                <div class="col-md-6 l-news-right">
                    <div class="l-slider">
                        <div class="item">
                            <div class="slider-contennt">
                                <p>They are my first and only call when I need financing. I needed financing quickly
                                    to fund
                                    an event that I otherwise would not have been able to take on. Thank you
                                    AveNew!</p>

                                <div class="slider-img">
                                    <img class="img-circle" src="{{Theme::url("image/l-news/avatar3.jpg")}}" alt="">
                                </div>
                                <a href="#"><h4>Michele,<span> Texas. CEO</span></h4></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-contennt">
                                <p><strong>Paul McKenzie</strong> is one of a kind! He has been nothing but
                                    professional and
                                    consistent in guiding me
                                    through all the available options. He is knowledgeable and forward-looking, he
                                    is
                                    already processing my next loan!.</p>

                                <div class="slider-img">
                                    <img class="img-circle" src="{{Theme::url("image/l-news/avatar2.jpg")}}" alt="">
                                </div>
                                <a href="#"><h4>Charlie,<span> New York. CEO</span></h4></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-contennt">
                                <p>
                                    Wow, want to save time and headaches? Look into AveNew Funding first! This is my
                                    third
                                    round of funding with them. My rep Ryan Ray is a superstar and understand the
                                    whole
                                    process. Honesty and integrity is what I have come to expect, which is why
                                    AveNew is
                                    FIRST.
                                </p>

                                <div class="slider-img">
                                    <img class="img-circle" src="{{Theme::url("image/l-news/avatar1.jpg")}}" alt="">
                                </div>
                                <a href="#"><h4>Rex,<span> Toronto. CEO</span></h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End latest news area-->

    <!--start requst area-->
    <section class="request-area" id="get-started">
        <div class="container">
            <div class="row">
                <div class="col-md-6 request-content">
                    <h2 class="tittle">Get Started Now!</h2>

                    <p>
                        <b>Funding in 24 hours?</b>It's possible, but our average is more like 72 hours. We will be
                        in
                        constant
                        communication while we are funding and even afterwards. No matter what it takes, we are
                        going to
                        do everything possible to find a finance solution for your business. We know that time is
                        money,
                        so we won't waste any of yours. If we can't fund your business, we will be direct and
                        efficient
                        to respect your time. You will get an assigned funding manager who will be with you each
                        step of
                        the way.</p>
                </div>
                <div class="col-md-6 request-contact">
                    <form id="contactForm" class="row contact-form" name="applyform" novalidate="novalidate">
                        <div class="col-sm-12 form-group">
                            <label>Desired Loan Amount</label>

                            <div class="input-group">
                                <select name="amount" class="selectpicker">
                                    <option></option>
                                    <option>Under 10K</option>
                                    <option>$10,000 - $20,000</option>
                                    <option>$20,000 - $30,000</option>
                                    <option>$30,000 - $40,000</option>
                                    <option>$40,000 - $50,000</option>
                                    <option>$50,000 - $60,000</option>
                                    <option>$60,000 - $70,000</option>
                                    <option>$70,000 - $80,000</option>
                                    <option>$80,000 - $90,000</option>
                                    <option>$90,000 - $100,000</option>
                                    <option>$100K +</option>
                                    <option>Start-Up Business, No Revenue Yet</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label>Average Monthly Revenue ($)</label>
                            <input type="text" value="" name="annualrevenue" class="form-control">
                        </div>
                        <div class="col-sm-12 form-group">
                            <label>Business Inception</label>
                            {{ csrf_field() }}
                            <div class="input-group">
                                <select name="businessinceptionmonth" class="selectpicker">
                                    <option></option>
                                    <option value="-6months">Under 6 months</option>
                                    <option value="6mon-1yr">6 months - 1 year</option>
                                    <option value="1yr-2yr">1 year - 2 years</option>
                                    <option value="2yr-4yr">2 year - 4 years</option>
                                    <option value="4yr-6yr">4 year - 6 years</option>
                                    <option value="6yr-10yr">6 year - 10 years</option>
                                    <option value="10yr+">10+ years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <a class="btn submit button" data-loading-text="Submitting..." id="submit_application">submit</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@stop

@section('script')
    <script>
        $(function () {
            $('#submit_application').click(function () {
                var $btn = $(this).button('loading');
                var data = $('[name="applyform"]').serialize();
                $.ajax({
                    url: '/form'
                    , type: 'POST'
                    , dataType: 'JSON'
                    , data: data
                    , success: function (data) {
                        $btn.button('reset');
                        document.location = '/form?uuid=' + data.data.id + '&inception=' + data.data.inception + '&amount=' + data.data.amount + '&revenue=' + data.data.annualrevenue;
                    }
                });
            });
        });
    </script>
@stop