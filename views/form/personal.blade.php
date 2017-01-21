@extends('layouts.master')

@section('title')
    Business Details | @parent
@stop

@section('content')
    <hr>
    <div class="container">
        @include('partials.sidenav')
        <div class="col-md-9 form-right-pane">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="introduction">
                        Personal Information
                    </h2>
                </div>
            </div>
            <hr>
            <form class="signup-form" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <input class="stage" type="hidden" name="stage" value="1"/>
                        <input type="hidden" name="uuid" value="{{$session['userid']}}"/>

                        <div class="form-group">
                            <label>Name: </label>
                            <input class="form-control" type="text" name="name" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <label>Company Name: </label>
                            <input class="form-control" type="text" name="companyname" placeholder="Company Name"/>
                        </div>
                        <div class="form-group">
                            <label>Phone Number: </label>
                            <input class="form-control" type="text" name="phonenumber" placeholder="Phone Number"/>
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <input class="form-control" type="text" name="email" placeholder="Email"/>
                        </div>
                        <div class="form-group" style="margin-top: 30px">
                            <a class="pull-right btn btn-primary signup-btn"
                               data-loading-text="Loading..." autocomplete="off">Next</a>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </div>
                <br>
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
                        document.location = '/form/business-information';
                    }
                });
            });
        });
    </script>
@stop
