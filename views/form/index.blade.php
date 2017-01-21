@extends('layouts.form')

@section('title')
    Register | @parent
@stop

@section('content')
    <div class="register container" style="padding-top: 20px;">
        <div class="row">
            <div class="row text-center">
                <a href="/">
                    <img src="{{ Theme::url('image/logo.png') }}" alt="">
                </a>
            </div>
            <div class="row text-center">
                <h3 class="introduction">
                    CHECK YOUR LOAN OPTIONS IN SECONDS
                </h3>

            </div>

            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <hr/>
                    <form class="signup-form" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="stage" value="0"/>

                                <div class="col-md-6">
                                    <label class="text-left" style="display: block;">Desired LoanAmount</label>
                                    <input type="hidden" name="uuid" value="{{isset($_GET['uuid'])?$_GET['uuid']:''}}"/>

                                    <div class="input-group">
                                        <?php
                                        $amounts = [
                                                "Under 10K"
                                            , "$10,000 - $20,000"
                                            , "$20,000 - $30,000"
                                            , "$30,000 - $40,000"
                                            , "$40,000 - $50,000"
                                            , "$50,000 - $60,000"
                                            , "$60,000 - $70,000"
                                            , "$70,000 - $80,000"
                                            , "$80,000 - $90,000"
                                            , "$90,000 - $100,000"
                                            , "$100K +"
                                            , "Start-Up Business, No Revenue Yet"
                                        ];
                                        $samount = isset($_GET['amount']) ? $_GET['amount'] : '';
                                        ?>
                                        <select name="loanamount" class="form-control">
                                            <option></option>
                                            @foreach($amounts as $amount)
                                                <option {{$samount==$amount?'SELECTED':''}}>{{$amount}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="text-left" style="display: block;">Loan Purpose</label>
                                    <input type="text" name="loanpurpose" id="" class="form-control">
                                </div>
                                {{ csrf_field() }}
                                <div class="clr"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="textinput" class="text-left" style="display: block;">Business
                                            Inception</label>
                                        <?php
                                        $inceptions = [
                                                "-6months" => "Under 6 months",
                                                "6mon-1yr" => "6 months - 1 year",
                                                "1yr-2yr" => "1 year - 2 years",
                                                "2yr-4yr" => "2 year - 4 years",
                                                "4yr-6yr" => "4 year - 6 years",
                                                "6yr-10yr" => "6 year - 10 years",
                                                "10yr+" => "10+ years"
                                        ];
                                        $sinception = isset($_GET['inception']) ? $_GET['inception'] : '';
                                        ?>
                                        <select name="businessinceptionmonth" class="form-control">
                                            <option></option>
                                            @foreach($inceptions as $key=>$inception)
                                                <option value="{{$key}}" {{$key == $sinception?'SELECTED':''}}>{{$inception}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="text-left" style="display: block;">Average Monthly Revenue</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">$</div>
                                        <input type="text" value="{{isset($_GET['revenue'])?$_GET['revenue']:''}}"
                                               name="annualrevenue" class="form-control">
                                    </div>
                                </div>
                                <div class="clr"></div>
                                <div class="col-md-6">
                                    <label class="text-left" style="display: block;">Industry Category</label>

                                    <input type="text" name="industrycategory" id="" class="form-control">
                                </div>
                                <div class="clr"></div>
                                <br/>

                                <div class="col-md-12 form-group">
                                    <label>Industry SIC Code or Description </label>
                            <textarea class="form-control" rows="3" type="text" style="height: 100px;!important"
                                      name="industrytype"></textarea>
                                </div>
                                <div class="clr"></div>
                                <br/>

                                <div class="col-md-12">
                                    <label class="text-left" style="display: block;">Do you invoice your business
                                        customers?</label>

                                    <input type="radio" value="yes" name="invoicecustomer"> Yes &nbsp;
                                    <input type="radio" value="no" name="invoicecustomer"> No
                                </div>
                            </div>

                            <div class="col-md-12">

                                <hr style="margin-top: 40px"/>

                                <div class="col-md-12" style="font-size: 1.25em;">
                                    <span class="glyphicon glyphicon-lock"
                                          style="color: #3FBCEF; margin-top: 2px;"></span>Create
                                    an account to see
                                    your matches
                                </div>
                                <div class="clr"></div>
                                <br/>

                                <div class="form-group col-md-6">
                                    <label>Name: </label>
                                    <input class="form-control" type="text" name="name" placeholder="Name"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Name: </label>
                                    <input class="form-control" type="text" name="companyname"
                                           placeholder="Company Name"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone Number: </label>
                                    <input class="form-control" type="text" name="phonenumber"
                                           placeholder="Phone Number"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email: </label>
                                    <input class="form-control" type="text" name="email" placeholder="Email"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password: </label>
                                    <input class="form-control" type="password" name="password" placeholder="Password"/>
                                </div>

                                <div class="form-group col-md-12" style="margin-top: 30px">
                                    <a class="btn btn-primary pull-right signup-btn" type="button">Next</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $(function () {
            $('.signup-btn').click(function () {
                var $btn = $(this).button('loading');
                $.ajax({
                    url: '/form'
                    , type: 'POST'
                    , data: $('.signup-form').serialize()
                    , success: function () {
                        $btn.button('reset');
                        document.location = '/form/personal';
                    }
                });
            });
        });
    </script>
@stop
