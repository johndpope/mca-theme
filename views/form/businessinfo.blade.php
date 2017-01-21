@extends('layouts.master')

@section('title')
    Business Details | @parent
@stop

@section('content')
    <?php $active = 2;?>
    <hr>
    <div class="container">
        @include('partials.sidenav')
        <div class="col-md-9 form-right-pane">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="introduction">
                        Business Information
                    </h2>
                </div>
            </div>
            <hr>
            <form class="signup-form" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="stage" value="2"/>
                        <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                        <div class="form-group">
                            <label>Business Legal Name: </label>
                            <input class="form-control" type="text" name="businesslegalname"/>
                        </div>
                        <div class="form-group">
                            <label>Business DBA Name: </label>
                            <input class="form-control" type="text" name="businessdbaname"/>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="businessoperation" value="New"/> New
                            <input type="radio" name="businessoperation" value="Renewal" style="margin-left: 60px;"/>
                            Renewal
                        </div>
                        <div class="form-group">
                            <label>Type of Business: </label>
                            <select class="form-control" name="businesstype">
                                <option value="">Please Choose</option>
                                <option value="Corporation">Corporation</option>
                                <option value="Limited Liability Company">Limited Liability Company</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Limited Partnership">Limited Partnership</option>
                                <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                <option value="Sole Proprietor">Sole Proprietor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Business Start Date: </label>
                            <input class="form-control" type="text" name="businessstartdate"/>
                        </div>
                        <div class="form-group">
                            <label>Does the Merchant have any other businesses with open contracts for working
                                capital?(Check one)</label>
                            <input type="radio" name="opencontracts" value="Yes"/> Yes
                            <input type="radio" name="opencontracts" value="No" style="margin-left: 60px;"/> No
                        </div>
                        <div class="form-group">
                            <label>State of Incorporation: </label>
                            <input class="form-control" type="text" name="stateofincorporation"/>
                        </div>
                        <div class="form-group">
                            <label>Industry SIC Code or Description </label>
                            <textarea class="form-control" rows="3" type="text" style="height: 100px;!important"
                                      name="industrytype"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="industrytypevalue" value="Rented"/> Rented
                            <input type="radio" name="industrytypevalue" value="Mortgaged" style="margin-left: 60px;"/>
                            Mortgaged
                        </div>

                        <div class="form-group">
                            <label>Business Federal Tax Id (EIN) # : </label>
                            <input class="form-control" type="text" name="businessfederaltaidxnumber"
                                   placeholder="Business Federal Tax Id Number"/>
                        </div>
                        <div class="form-group">
                            <label>Business Website Address: </label>
                            <input class="form-control" type="text" name="businesswebsiteaddress"
                                   placeholder="Business Website Address"/>
                        </div>
                        <div class="form-group">
                            <label>Any Judgments/Liens? </label>
                            <br/>
                            <input type="radio" name="judgementliens" value="Yes"/> Yes
                            <input type="radio" name="judgementliens" value="No" style="margin-left: 60px;"/> No
                        </div>

                        <div class="form-group">
                            <label>Merchant Cell Phone #: </label>
                            <input class="form-control" type="text" name="merchantcellphonenumber"
                                   placeholder="Merchant Cell Phone Number"/>
                        </div>
                        <div class="form-group">
                            <label>Merchant Fax #: </label>
                            <input class="form-control" type="text" name="merchantfaxnumber"
                                   placeholder="Merchant Fax Number"/>
                        </div>
                        <div class="form-group">
                            <label>Merchant Email Address #1: </label>
                            <input class="form-control" type="text" name="merchantemailaddress1"
                                   placeholder="Merchant Email Address #1"/>
                        </div>
                        <div class="form-group">
                            <label>Merchant Email Address #2: </label>
                            <input class="form-control" type="text" name="merchantemailaddress2"
                                   placeholder="Merchant Email Address #2"/>
                        </div>
                        <div class="form-group">
                            <label>Physical Street Address: </label>
                            <input class="form-control physical-street-address" type="text"
                                   name="physicalstreetaddress"/>
                        </div>
                        <div class="form-group">
                            <label>City: </label>
                            <input class="form-control physical-street-address-city" type="text"
                                   name="physicalstreetaddresscity"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State: </label>
                                    <input class="form-control physical-street-address-state" type="text"
                                           name="physicalstreetaddressstate"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip Code: </label>
                                    <input class="form-control physical-street-address-zipcode" type="text"
                                           name="physicalstreetaddresszipcode"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Billing Address (Same as Physical)</label>
                            <input class="same-as-physical" type="checkbox"/>
                        </div>
                        <div class="form-group billing-address">
                            <label>Billing Street Address: </label>
                            <input class="form-control billing-street-address" type="text" name="billingstreetaddress"/>
                        </div>
                        <div class="form-group billing-address">
                            <label>City: </label>
                            <input class="form-control billing-street-address-city" type="text"
                                   name="billingstreetaddresscity"/>
                        </div>
                        <div class="row billing-address">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State: </label>
                                    <input class="form-control billing-street-address-state" type="text"
                                           name="billingstreetaddressstate"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip Code: </label>
                                    <input class="form-control billing-street-address-zipcode" type="text"
                                           name="billingstreetaddresszipcode"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Physical Location Phone #: </label>
                            <input class="form-control" type="text" name="physicallocationphonenumber"/>
                        </div>
                        <div class="form-group">
                            <label>Billing Location Phone #: </label>
                            <input class="form-control" type="text" name="billinglocationphonenumber"/>
                        </div>
                        <div class="form-group">
                            <label>Preferred Contact Phone #: </label>
                            <input class="form-control" type="text" name="preferredcontactphonenumber"/>
                        </div>
                        {{ csrf_field() }}
                        <div class="form-group" style="margin-top: 30px">
                            <a class="btn btn-primary pull-right signup-btn"
                               type="button">Next</a>
                        </div>
                    </div>
                </div>
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
                        document.location = '/form/business-reference';
                    }
                });
            });

            $("body").on("change", ".same-as-physical", function () {
                checked = $(this).is(":checked");
                if (checked) {
                    physicalstreetaddress = $(".physical-street-address").val();
                    physicalstreetaddresscity = $(".physical-street-address-city").val();
                    physicalstreetaddressstate = $(".physical-street-address-state").val();
                    physicalstreetaddresszipcode = $(".physical-street-address-zipcode").val();
                    $(".billing-address").fadeOut();
                    $(".billing-address").find(".billing-street-address").val(physicalstreetaddress);
                    $(".billing-address").find(".billing-street-address-city").val(physicalstreetaddresscity);
                    $(".billing-address").find(".billing-street-address-state").val(physicalstreetaddressstate);
                    $(".billing-address").find(".billing-street-address-zipcode").val(physicalstreetaddresszipcode);
                }
                else {
                    $(".billing-address").find("input:text").val('');
                    $(".billing-address").fadeIn();
                }
            });
        });
    </script>
@stop
