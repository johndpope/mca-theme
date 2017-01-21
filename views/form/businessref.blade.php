@extends('layouts.master')

@section('title')
    Business Details | @parent
@stop

@section('content')
    <?php $active = 3;?>
    <hr>
    <div class="container">
        @include('partials.sidenav')
        <div class="col-md-9 form-right-pane">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="introduction">
                        Business References <i style="font-size: 16px!important;position: relative; bottom: 5px;">(Optional)</i> <a href="/form/loan-details" class="btn btn-warning pull-right">Skip</a>
                    </h2>

                </div>
            </div>
            <hr>
            <form class="signup-form" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="stage" value="3"/>
                        <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                        <div class="form-group">
                            <label>Business Trade Reference #1: </label>
                            <input class="form-control" type="text" name="businesstradereference1"
                                   placeholder="Business Trade Reference #1"/>
                        </div>
                        <div class="form-group">
                            <label>Phone #: </label>
                            <input class="form-control" type="text" name="businesstradereference1phonenumber"
                                   placeholder="Phone Number"/>
                        </div>
                        <div class="form-group">
                            <label>Business Trade Reference #2: </label>
                            <input class="form-control" type="text" name="businesstradereference2"
                                   placeholder="Business Trade Reference #2"/>
                        </div>
                        <div class="form-group">
                            <label>Phone #: </label>
                            <input class="form-control" type="text" name="businesstradereference2phonenumber"
                                   placeholder="Phone Number"/>
                        </div>
                        <div class="form-group">
                            <label>Business Trade Reference #3: </label>
                            <input class="form-control" type="text" name="businesstradereference3"
                                   placeholder="Business Trade Reference #3"/>
                        </div>
                        <div class="form-group">
                            <label>Phone #: </label>
                            <input class="form-control" type="text" name="businesstradereference3phonenumber"
                                   placeholder="Phone Number"/>
                        </div>
                        <div class="form-group" style="margin-top: 30px">
                            <!--                    <a href="thankyou" class="btn btn-warning pull-left savefill-btn" type="button">Save and Fill out Later</a>-->
                            <!--                    <button class="btn btn-primary signup-stage1-btn pull-right" type="button">Continue</button>-->
                            <a class="btn btn-primary pull-right signup-btn">Next</a>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>
            <br>
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
                        document.location = '/form/loan-details';
                    }
                });
            });
        });
    </script>
@stop
