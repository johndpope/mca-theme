<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            {{ Setting::get('core::site-name') }}
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {!! Theme::style('css/bootstrap.min.css') !!}
    {!! Theme::style('css/bootstrap-theme.min.css') !!}
</head>
<body>

@yield('content')

{!! Theme::script("js/jquery-2.2.0.min.js") !!}
        <!-- Bootstrap JS -->
{!! Theme::script("js/bootstrap.min.js") !!}
@yield('script')
</body>
</html>
