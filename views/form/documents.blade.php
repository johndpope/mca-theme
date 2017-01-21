@extends('layouts.master')

@section('title')
    Business Details | @parent
@stop

@section('content')
    <hr> <?php $active = 7;?>
    <div class="container">
        @include('partials.sidenav')
        <div class="col-md-9 form-right-pane">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="introduction">
                        Documents
                    </h2>
                </div>
            </div>
            <hr>
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group document-form" style="display: none">
                        <input type="hidden" name="stage" value="7"/>
                        <input type="hidden" name="signup" value="1"/>
                        <input type="hidden" name="finish" value="1"/>
                    </div>
                    <div class="form-group">
                        <label>Bank statement 1: </label>

                        <form class="signup-form dropzone" id="bankStatement1" action="/form"
                              enctype="multipart/form-data">
                            <input type="hidden" name="stage" value="7"/>
                            <input type="hidden" name="signup" value="1"/>
                            {{ csrf_field() }}
                            <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                            <input type="hidden" name="bankstatement" value="bankstatement1"/>
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Bank statement 2: </label>

                        <form class="signup-form dropzone" id="bankStatement2" action="/form"
                              enctype="multipart/form-data">
                            <input type="hidden" name="stage" value="7"/>
                            <input type="hidden" name="signup" value="1"/>
                            {{ csrf_field() }}
                            <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                            <input type="hidden" name="bankstatement" value="bankstatement2"/>
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Bank statement 3: </label>

                        <form class="signup-form dropzone" id="bankStatement3" action="/form"
                              enctype="multipart/form-data">
                            <input type="hidden" name="stage" value="7"/>
                            <input type="hidden" name="signup" value="1"/>
                            {{ csrf_field() }}
                            <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                            <input type="hidden" name="bankstatement" value="bankstatement3"/>
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Bank statement 4: </label>

                        <form class="signup-form dropzone" id="bankStatement4" action="/form"
                              enctype="multipart/form-data">
                            <input type="hidden" name="stage" value="7"/>
                            <input type="hidden" name="signup" value="1"/>
                            {{ csrf_field() }}
                            <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                            <input type="hidden" name="bankstatement" value="bankstatement4"/>
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Bank statement 5: </label>

                        <form class="signup-form dropzone" id="bankStatement5" action="/form"
                              enctype="multipart/form-data">
                            <input type="hidden" name="stage" value="7"/>
                            <input type="hidden" name="signup" value="1"/>
                            <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                            {{ csrf_field() }}
                            <input type="hidden" name="bankstatement" value="bankstatement5"/>
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Bank statement 6: </label>

                        <form class="signup-form dropzone" id="bankStatement6" action="/form"
                              enctype="multipart/form-data">
                            <input type="hidden" name="stage" value="7"/>
                            <input type="hidden" name="signup" value="1"/>
                            <input type="hidden" name="uuid" value="{{$session['userid']}}"/>
                            {{ csrf_field() }}
                            <input type="hidden" name="bankstatement" value="bankstatement6"/>
                        </form>
                    </div>

                    <div class="form-group">
                        <!--                    <a href="thankyou" class="btn btn-default pull-left btn-warning savefill-btn" type="button">Save and Fill out Later</a>-->
                        <a class="btn btn-primary pull-right finish-btn" type="button">Finish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@stop

@section('script')
    {!! Theme::script("js/dropzone.js") !!}
    <script>
        $(function () {
            var bs = {
                bankstatement1: '',
                bankstatement2: '',
                bankstatement3: '',
                bankstatement4: '',
                bankstatement5: '',
                bankstatement6: '',
                uuid: '{!! $session['userid'] !!}',
                _token: '{!! csrf_token() !!}'
            };
            $('.finish-btn').click(function () {
                var $btn = $(this).button('loading');
                $.ajax({
                    url: '/form'
                    , type: 'POST'
                    , data: bs
                    , success: function () {
                        $btn.button('reset');
                        document.location = '/form/finish';
                    }
                });
            });

            var data = $.parseJSON('{!! json_encode($session) !!}');
            $("body").find(".signup-form :input").deserialize(data);
            stageCompleteChecker(data);


            Dropzone.options.bankStatement1 = {
                maxFiles: 1,
                dictDefaultMessage: 'Drop file or click to upload.',
                init: function () {
                    this.on('addedfile', function () {
                        $('#bankStatement1').find('.dz-message').text('Uploading...');
                    })
                },
                success: function (file, response) {
                    var res = JSON.parse(response);
                    if ($('#bankStatement1 .document').length) {
                        $('#bankStatement1 .document').remove();
                    }
                    bs.bankstatement1 = res.file;
                    $("<div class='document'><span class='glyphicon glyphicon-file'></span>" + res.file + "</div>").insertBefore($('#bankStatement1 .dz-message'));
                    $('#bankStatement1').find('.dz-message').text('Drop file or click to upload.');
                }
            };
            Dropzone.options.bankStatement2 = {
                maxFiles: 1,
                dictDefaultMessage: 'Drop file or click to upload.',
                init: function () {
                    this.on('addedfile', function () {
                        $('#bankStatement2').find('.dz-message').text('Uploading...');
                    })
                },
                success: function (file, response) {
                    var res = JSON.parse(response);
                    if ($('#bankStatement2 .document').length) {
                        $('#bankStatement2 .document').remove();
                    }
                    bs.bankstatement2 = res.file;
                    $("<div class='document'><span class='glyphicon glyphicon-file'></span>" + res.file + "</div>").insertBefore($('#bankStatement2 .dz-message'));
                    $('#bankStatement2').find('.dz-message').text('Drop file or click to upload.');
                }
            };
            Dropzone.options.bankStatement3 = {
                maxFiles: 1,
                dictDefaultMessage: 'Drop file or click to upload.',
                init: function () {
                    this.on('addedfile', function () {
                        $('#bankStatement3').find('.dz-message').text('Uploading...');
                    })
                },
                success: function (file, response) {
                    var res = JSON.parse(response);
                    if ($('#bankStatement3 .document').length) {
                        $('#bankStatement3 .document').remove();
                    }
                    bs.bankstatement3 = res.file;
                    $("<div class='document'><span class='glyphicon glyphicon-file'></span>" + res.file + "</div>").insertBefore($('#bankStatement3 .dz-message'));
                    $('#bankStatement3').find('.dz-message').text('Drop file or click to upload.');
                }
            };
            Dropzone.options.bankStatement4 = {
                maxFiles: 1,
                dictDefaultMessage: 'Drop file or click to upload.',
                init: function () {
                    this.on('addedfile', function () {
                        $('#bankStatement4').find('.dz-message').text('Uploading...');
                    })
                },
                success: function (file, response) {
                    var res = JSON.parse(response);
                    if ($('#bankStatement4 .document').length) {
                        $('#bankStatement4 .document').remove();
                    }
                    bs.bankstatement4 = res.file;
                    $("<div class='document'><span class='glyphicon glyphicon-file'></span>" + res.file + "</div>").insertBefore($('#bankStatement4 .dz-message'));
                    $('#bankStatement4').find('.dz-message').text('Drop file or click to upload.');
                }
            };
            Dropzone.options.bankStatement5 = {
                maxFiles: 1,
                dictDefaultMessage: 'Drop file or click to upload.',
                init: function () {
                    this.on('addedfile', function () {
                        $('#bankStatement5').find('.dz-message').text('Uploading...');
                    })
                },
                success: function (file, response) {
                    var res = JSON.parse(response);
                    if ($('#bankStatement5 .document').length) {
                        $('#bankStatement5 .document').remove();
                    }
                    bs.bankstatement5 = res.file;
                    $("<div class='document'><span class='glyphicon glyphicon-file'></span>" + res.file + "</div>").insertBefore($('#bankStatement5 .dz-message'));
                    $('#bankStatement5').find('.dz-message').text('Drop file or click to upload.');
                }
            };
            Dropzone.options.bankStatement6 = {
                maxFiles: 1,
                dictDefaultMessage: 'Drop file or click to upload.',
                init: function () {
                    this.on('addedfile', function () {
                        $('#bankStatement6').find('.dz-message').text('Uploading...');
                    })
                },
                success: function (file, response) {
                    var res = JSON.parse(response);
                    if ($('#bankStatement6 .document').length) {
                        $('#bankStatement6 .document').remove();
                    }
                    bs.bankstatement16 = res.file;
                    $("<div class='document'><span class='glyphicon glyphicon-file'></span>" + res.file + "</div>").insertBefore($('#bankStatement6 .dz-message'));
                    $('#bankStatement6').find('.dz-message').text('Drop file or click to upload.');
                }
            };
        });
    </script>
@stop
