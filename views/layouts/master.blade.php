<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}"/>
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('image/favicon.png') }}">
    <!--   fonts-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,700italic,600italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,700,500,600,100,300,800' rel='stylesheet'
          type='text/css'>

    <!--Bootstrap css -->
    {!! Theme::style('css/bootstrap.min.css') !!}
    {!! Theme::style('css/bootstrap-theme.min.css') !!}
    {!! Theme::style('css/bootstrap-select.min.css') !!}
    {!! Theme::style('css/font-awesome.min.css') !!}
    {!! Theme::style('css/pe-icon-7-stroke.min.css') !!}
    {!! Theme::style('vendors/elegant-icon/style.css') !!}
    {!! Theme::style('vendors/owl-carousel/owl.carousel.css') !!}
    {!! Theme::style('vendors/wow.js/animate.css') !!}
            <!--custom css-->
    {!! Theme::style('css/style.css') !!}

            <!--responsive css-->
    {!! Theme::style('css/responsive.css') !!}
</head>
<body>

<!-- Preloader -->
<div class="sampleContainer">
    <div class="loader">
        <span class="dot dot_1"></span>
        <span class="dot dot_2"></span>
        <span class="dot dot_3"></span>
        <span class="dot dot_4"></span>
    </div>
</div>

<header>
    <div class="header-top">
        <div class="container">
            <ul class="nav top-nav">
                <li><a href="#"><i class="pe-7s-mail" aria-hidden="true"></i> info@avenewfunding.com</a></li>
                <li><a href="#"><i class="pe-7s-call"></i>973-577-8950</a></li>
                <li><a href="#"><i class="pe-7s-clock"></i>09:00 &dash; 18:00 Monday to Friday</a></li>
            </ul>
            {{--<a class="search" href="#"><i class="pe-7s-search"></i></a>--}}
        </div>
    </div>
    <div class="header-bottom navbar-static-top" id="main_navbar">
        @include('partials.navigation')
    </div>
</header>
@yield('content')

@include('partials.footer')
        <!-- jQuery Latest version -->
{!! Theme::script("js/jquery-2.2.0.min.js") !!}
        <!-- Bootstrap JS -->
{!! Theme::script("js/bootstrap.min.js") !!}
{!! Theme::script("js/bootstrap-select.js") !!}
        <!--wow JS-->
{!! Theme::script("vendors/wow.js/wow.min.js") !!}
        <!--owl carousel js-->
{!! Theme::script("vendors/owl-carousel/owl.carousel.min.js") !!}
{!! Theme::script("js/Chart.bundle.min.js") !!}
{!! Theme::script("js/jquery.deserialize.js") !!}
<script>
    function stageCompleteChecker(data) {
        var fields = [
            {
                fields: ["name", "companyname", "phonenumber", "email", "_token", "userid", "applydate", "stage", "uuid", "password", "loginname", "link"]
                , except: ["_token", "userid", "applydate", "stage", "uuid", "password", "loginname", "link"]
            }
            , {
                fields: ["businesslegalname", "businessdbaname", "businessoperation", "businessstartdate", "opencontracts", "opencontracts", "stateofincorporation", "industrytype", "industrytypevalue", "businessfederaltaidxnumber", "businesswebsiteaddress", "judgementliens", "merchantcellphonenumber", "merchantfaxnumber", "merchantemailaddress1", "merchantemailaddress2", "physicalstreetaddress", "physicalstreetaddresscity", "physicalstreetaddressstate", "physicalstreetaddresszipcode", "billingstreetaddress", "billingstreetaddresscity", "billingstreetaddressstate", "billingstreetaddresszipcode", "physicallocationphonenumber", "billinglocationphonenumber", "preferredcontactphonenumber"]
                , except: []
            }
            , {
                fields: ["businesstradereference1", "businesstradereference1phonenumber", "businesstradereference2", "businesstradereference2phonenumber", "businesstradereference3", "businesstradereference3phonenumber"],
                except: ['businesstradereference1','businesstradereference1phonenumber','businesstradereference2','businesstradereference2phonenumber','businesstradereference3','businesstradereference3phonenumber']
            }
                , {
                fields:  ["amount", "useofproceed", "currentcreditcardprocessor", "grossannualsales", "averagemonthlycreditcardvolume", "visalastmonth", "visalasttwomonths", "visalastthreemonths", "visalastfourmonths", "landlordname", "landlordcontactnumber"],
                except: []
            }
            , {
                fields: ["owner1jobtitle", "owner1lastname", "owner1firstname", "ownership1percentage", "owner1ss", "owner1birthdate", "owner1homephone", "owner1streetaddress", "owner1city", "owner1state", "owner1zipcode", "owner1primarycontact", "owner2primarycontact", "owner2jobtitle", "owner2lastname", "owner2firstname", "ownership2percentage", "owner2ss", "owner2birthdate", "owner2homephone", "owner2streetaddress", "owner2city", "owner2state", "owner2zipcode"]
                ,
                except: ['owner1primarycontact', 'owner2primarycontact', 'owner2jobtitle', 'owner2lastname', 'owner2firstname', 'ownership2percentage', 'owner2ss', 'owner2birthdate', 'owner2homephone', 'owner2streetaddress', 'owner2city', 'owner2state', 'owner2zipcode']
            }
            , {
                fields: ["authorizationname", "authorizationtitle", "agreement"],
                except: []
            }
            , {
                fields: ["bankstatement1", "bankstatement2", "bankstatement3", "bankstatement4", "bankstatement5", "bankstatement5"]
                , except: []
            }
        ];

        var complete = 0;


        $.each(fields, function (index, val) {
            var fillcount = 0;
            var expectedcount = val.fields.length - val.except.length;

            $.each(val.fields, function (i, field) {

                if (typeof data[field] != 'undefined' && data[field] != '' && $.inArray(field, val.except) == -1) {
                    if (index == 6 && data[field] !== '') {
                        console.log(data[field],field);
                        $($('.dropzone')[i]).append("<div class='document'><span class='glyphicon glyphicon-file'></span>" + data[field] + "</div>");
                    }
                    fillcount += 1;
                }



            });
            if (fillcount == expectedcount) {
                $($('.category')[index]).addClass('done');
                complete+=1;
            }

        });

        var percentage = (complete/7)*100;
        var roundedProgress = Math.round(percentage);
        $('.progress-bar').css('width', roundedProgress + '%');
        $('.progress-word').text(roundedProgress + '%').attr('style', 'color: #3FBCEF; font-size: 14px!important;');
    }


</script>
@yield('script')
{{--@yield('scripts')--}}
{!! Theme::script("js/custom.js") !!}

</body>
</html>
