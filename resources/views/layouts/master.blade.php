<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
{{--    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}
    <link href="//db.onlinewebfonts.com/c/2622744283657bd23026cb39789aeff4?family=Hazard!" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/bootstrap.min.css')}}">
    @yield('style')
</head>
<body>
@yield('content')

<script src="{{asset('lib/bootstrap/jquery.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/bootstrap.min.js')}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>--}}
<script src="{{asset('lib/jquery-validation/jquery-validation.js')}}"></script>
@yield('script')
</body>
</html>
