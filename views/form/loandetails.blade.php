@extends('layouts.master')

@section('title')
    Business Details | @parent
@stop

@section('content')
    <?php $active = 4;?>
    <hr>
    <div class="container">
        @include('partials.sidenav')
        <div class="col-md-9 form-right-pane">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="introduction">
                        Loan Details
                    </h2>
                </div>
            </div>
            <hr>
            <form class="signup-form" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="stage" value="4"/>
                        <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                        <div class="form-group">
                            <label>Amount: </label>
                            <input class="form-control" type="text" name="amount"/>
                        </div>
                        <div class="form-group">
                            <label>Use of Proceeds: </label>
                            <input class="form-control" type="text" name="useofproceed"/>
                        </div>
                        <div class="form-group">
                            <label>Current Credit Card Processor: </label>
                            <input class="form-control" type="text" name="currentcreditcardprocessor"/>
                        </div>
                        <div class="form-group">
                            <label>Gross Annual Sales (Previous year's tax Return): </label>
                            <input class="form-control" type="text" name="grossannualsales"/>
                        </div>
                        <div class="form-group">
                            <label>Average Monthly Credit Card Volume: </label>
                            <input class="form-control" type="text" name="averagemonthlycreditcardvolume"/>
                        </div>
                        <label>List the total VISA/MasterCard
                            processing volumes from
                            previous four months: </label>

                        <div class="form-group">
                            <label>Last Month Ticket #: </label>
                            <input class="form-control" type="text" name="visalastmonth"/>
                        </div>
                        <div class="form-group">
                            <label>Two Months Ago Ticket #: </label>
                            <input class="form-control" type="text" name="visalasttwomonths"/>
                        </div>
                        <div class="form-group">
                            <label>Three Months Ago Ticket #: </label>
                            <input class="form-control" type="text" name="visalastthreemonths"/>
                        </div>
                        <div class="form-group">
                            <label>Four Months Ago Ticket #: </label>
                            <input class="form-control" type="text" name="visalastfourmonths"/>
                        </div>

                        <div class="form-group">
                            <label>Landlord Name: </label>
                            <input class="form-control" type="text" name="landlordname"/>
                        </div>
                        <div class="form-group">
                            <label>Landlord Contact #: </label>
                            <input class="form-control" type="text" name="landlordcontactnumber"/>
                        </div>

                        <div class="form-group" style="margin-top: 30px">
                            <a class="btn btn-primary pull-right signup-btn"
                               type="button">Next</a>
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
                        document.location = '/form/business-owner';
                    }
                });
            });
        });
    </script>
@stop
