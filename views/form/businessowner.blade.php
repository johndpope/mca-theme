@extends('layouts.master')

@section('title')
    Business Details | @parent
@stop

@section('content')
    <?php $active = 5;?>
    <hr>
    <div class="container">
        @include('partials.sidenav')
        <div class="col-md-9 form-right-pane">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="introduction">
                        Business Owner / Officer
                    </h2>
                </div>
            </div>
            <hr>
            <form class="signup-form" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="stage" value="5"/>
                        <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                        <div class="form-group">
                            <h4><strong>Owner / Officer 1: </strong></h4>
                        </div>
                        <div class="form-group">
                            <label>Primary Contact: </label>
                            <input class="primary-contact" type="checkbox" name="owner1primarycontact"
                                   placeholder="Primary Contact" value="No"/>
                        </div>
                        <div class="form-group">
                            <label>Job Title: </label>
                            <input class="form-control" type="text" name="owner1jobtitle" placeholder="Job Title"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name: </label>
                                    <input class="form-control" type="text" name="owner1lastname"
                                           placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name: </label>
                                    <input class="form-control" type="text" name="owner1firstname"
                                           placeholder="First Name"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>% of ownership: </label>
                            <input class="form-control" type="text" name="ownership1percentage"
                                   placeholder="Percentage Of Ownership"/>
                        </div>
                        <div class="form-group">
                            <label>SS#: </label>
                            <input class="form-control" type="text" name="owner1ss" placeholder="SS Number"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth: </label>
                                    <input class="form-control" type="text" name="owner1birthdate"
                                           placeholder="MM-DD-YY"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Home Phone: </label>
                                    <input class="form-control" type="text" name="owner1homephone"
                                           placeholder="Home Phone"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Street Address: </label>
                            <input class="form-control" type="text" name="owner1streetaddress"
                                   placeholder="Street Address"/>
                        </div>
                        <div class="form-group">
                            <label>City: </label>
                            <input class="form-control" type="text" name="owner1city" placeholder="City"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State: </label>
                                    <input class="form-control" type="text" name="owner1state" placeholder="State"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip Code: </label>
                                    <input class="form-control" type="text" name="owner1zipcode"
                                           placeholder="Zip Code"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 owner2" style="display:none">
                        <br>

                        <div class="form-group">
                            <div class="form-group">
                                <h4><strong>Owner / Officer 2: </strong></h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Primary Contact: </label>
                            <input class="primary-contact" type="checkbox" name="owner2primarycontact"
                                   placeholder="Primary Contact" value="No"/>
                        </div>
                        <div class="form-group">
                            <label>Job Title: </label>
                            <input class="form-control" type="text" name="owner2jobtitle" placeholder="Job Title"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name: </label>
                                    <input class="form-control" type="text" name="owner2lastname"
                                           placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name: </label>
                                    <input class="form-control" type="text" name="owner2firstname"
                                           placeholder="First Name"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>% of ownership: </label>
                            <input class="form-control" type="text" name="ownership2percentage"
                                   placeholder="Percentage Of Ownership"/>
                        </div>
                        <div class="form-group">
                            <label>SS#: </label>
                            <input class="form-control" type="text" name="owner2ss" placeholder="SS Number"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth: </label>
                                    <input class="form-control" type="text" name="owner2birthdate"
                                           placeholder="MM-DD-YY"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Home Phone: </label>
                                    <input class="form-control" type="text" name="owner2homephone"
                                           placeholder="Home Phone"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Street Address: </label>
                            <input class="form-control" type="text" name="owner2streetaddress"
                                   placeholder="Street Address"/>
                        </div>
                        <div class="form-group">
                            <label>City: </label>
                            <input class="form-control" type="text" name="owner2city" placeholder="City"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State: </label>
                                    <input class="form-control" type="text" name="owner2state" placeholder="State"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip Code: </label>
                                    <input class="form-control" type="text" name="owner2zipcode"
                                           placeholder="Zip Code"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group pull-right" style="margin-top: 10px">
                            <button class="btn btn-default add-more-btn " type="button">Add More Owner/Officer</button>
                            <!--                    <button class="btn btn-primary signup-stage1-btn " type="button">Continue</button>-->
                            <a class="btn btn-primary signup-btn">Next</a>
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
                        document.location = '/form/authorization';
                    }
                });
            });

            $("body").on('click', ".add-more-btn", function () {
                $(this).hide();
                $('.owner2').fadeIn();
            }).on("change", ".primary-contact", function () {
                checked = $(this).is(":checked");
                if (checked) {
                    $(this).val("Yes");
                }
                else {
                    $(this).val("No");
                }
                $(".primary-contact").not(this).prop("checked", false);
            });
        });
    </script>
@stop
