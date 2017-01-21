@extends('layouts.master')

@section('title')
    Business Details | @parent
@stop

@section('content')
    <hr>
    <?php $active = 6;?>
    <div class="container">
        @include('partials.sidenav')
        <div class="col-md-9 form-right-pane">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="introduction">
                        Authorization
                    </h2>
                </div>
            </div>
            <hr>
            <form class="signup-form" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="stage" value="6"/>
                        <input type="hidden" name="uuid" value="{{$session['userid']}}"/>

                        <h3>Service Authorization</h3>

                        <div class="col-md-6 no-padding">
                            I represent that the person typing his or her name into the signature field below is
                            authorized
                            to sign this service authorization, both on his/her own behalf
                            <!-- and on behalf of <span></span> -->, and
                            enter into financial arrangements on behalf of the person and/or business whose name(s) I
                            have
                            provided in my application.
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-info">
                                <p>
                                    <span class="text-info glyphicon glyphicon-info-sign"></span> By signing your name,
                                    you're giving us permission to share your information with the
                                    lenders
                                    you've chosen to work with--saving you time and energy, and letting those lenders
                                    get
                                    started on processing your application.
                                </p>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 no-padding" style="margin-top: 10px;">
                        <h4 style="margin-bottom:10px">Today's Date: <?php echo date("F j, Y") ?></h4>

                        <div class="form-group">
                            <label>Type Your Full Name: </label>
                            <input class="form-control" type="text" name="authorizationname"/>
                        </div>
                        <div class="form-group">
                            <label>Your Title: </label>
                            <input class="form-control" type="text" name="authorizationtitle"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 no-padding">
                        <h3>Credit Authorization</h3>

                        <p>
                            You understand that by checking the box labeled "I AGREE" following this notice you are
                            providing 'written instructions' to AveFunding under the Fair Credit Reporting Act
                            authorizing
                            AveFunding to obtain information from your personal credit profile or other information
                            from
                            Experian. You authorize AveFunding to obtain such information solely to conduct a
                            pre-qualification for credit, and you acknowledge that you're a personally liable owner
                            of
                            the business seeking credit. This is a "soft inquiry" and does not affect your credit in
                            any
                            way.
                        </p>
                        <input type="checkbox" name="agreement">&nbsp;I agree
                    </div>
                    <div class="col-md-6">
                        <h3>&nbsp;</h3>

                        <div class="alert alert-info">
                            <p>
                                <span class="text-info glyphicon glyphicon-info-sign"></span> By selecting "I
                                Agree," you're allowing us to make a "soft" credit inquiry that
                                won't
                                impact
                                your credit score at all. We do this to prescreen your application and protect you
                                against
                                unnecessary hard credit pulls later on.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{--<div class="form-group pull-left" style="margin-top: 10px">--}}
                            {{--<a href="thankyou" class="btn btn-warning savefill-btn" type="button">--}}
                                {{--Save and Fill out Later--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        <div class="form-group pull-right" style="margin-top: 10px">
                             <a class="btn btn-primary signup-btn">Next</a>
                        </div>
                        {{ csrf_field() }}
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('script')
    <script>
        $(function () {
            var data = $.parseJSON('{!! json_encode($session) !!}');
            $("body").find(".signup-form :input").deserialize(data);
            stageCompleteChecker(data);
            $('.signup-btn').click(function () {
                var $btn = $(this).button('loading');
                var data = $('.signup-form').serialize();
                $.ajax({
                    url: '/form'
                    , type: 'POST'
                    , dataType: 'JSON'
                    , data: data
                    , success: function (data) {
                        $btn.button('reset');
                        document.location = '/form/documents';
                    }
                });
            });
        });
    </script>
@stop
