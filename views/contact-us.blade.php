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
                    <h2>Contact us</h2>
                </div>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--    start contact area-->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-questions">
                        <h2>Questions about our products or tools?</h2>

                        <p>Our friendly help team can be reached Monday through Friday, from 7am to 5pm, EST. Just
                            click the button below to contact us.</p>

                        <div class="row m0 customer-support">
                            <div class="content">
                                <h2>Customer support</h2>

                                <p>we are here for you</p>
                                <a href="/form" class="btn button">Get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-forms">
                        <h2>Get touch With Us</h2>

                        <p>If you have any questions, please feel free to drop me a line. If you don't get an answer
                            immediately, I might just be travelling through the middle of nowhere. I'll get back to you
                            as
                            soon as I can. That's a promise!</p>

                        <form action="/form/contact-us" id="contactForm" class="row contact-form"
                              novalidate="novalidate">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input for="range" type="text" id="name" name="name" placeholder="Your Name"
                                           required=""
                                           class="form-control">
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" placeholder="Your Email" required=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" placeholder="Subject" required=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <div class="message">
                                <textarea name="message" id="message" class="form-control"
                                          placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="alert alert-success contact-sent" style="display: none">Message Successfully
                                    Sent
                                </div>
                                <div class="alert alert-danger contact-error" style="display: none">Error Submitting
                                </div>
                                <a type="submit" class="btn button contact-btn">Submit</a>
                            </div>
                        </form>
                        <div id="success">Your message succesfully sent!</div>
                        <div id="error">Opps! There is something wrong. Please try again</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-info">
                        <h2>we're here for you</h2>
                        <ul>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="pe-7s-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        23 Vreeland Rd.<br>
                                        Suite 103, Florham Park, NJ 07932
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="pe-7s-call" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        973-577-8950<br>
                                        info@avenewfunding.com
                                        <br>
                                        Fax: 973-577-8944
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="pe-7s-clock" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        09:00 &dash; 18:00<br> Monday to Friday
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End contact area-->

    <!--MapBox-->
    <section class="map">
        <div id="mapBox" class="row m0" data-lat="40.7863594" data-lon="-74.3712828" data-zoom="17"></div>
    </section>
@stop

@section('script')
    <script>
        $(function () {
            function isvalid($form) {
                var valid = true;
                $form.find('textarea,input').each(function () {
                    var val = $(this).val();
                    if (val == '') {
                        $('.contact-error:visible').hide();
                        $('.contact-error').text($(this).attr('placeholder') + ' is Required').fadeIn();
                        valid = false;
                        return false;

                    }

                });
                return valid;
            }

            $('.contact-btn').click(function () {
                var $form = $('#contactForm');
                if (isvalid($form)) {
                    var $btn = $(this).button('loading');
                    $.ajax({
                        url: '/form/contact-us'
                        , type: 'POST'
                        , data: $form.serialize()
                        , success: function () {
                            $btn.button('reset');
                            $('.contact-sent').fadeIn();
                        }
                    });
                }
                return false;
            });
        });
    </script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    {!! Theme::script("js/gmaps.min.js") !!}
@stop