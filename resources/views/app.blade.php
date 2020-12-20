<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
      
        <link rel="stylesheet" href="{{asset('css/inherit/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/slicknav.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/progressbar_barfiller.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/gijgo.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/animated-headline.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('css/inherit/style.css')}}">

    </head>
    <body>
        
        @include('sections.header')

        @yield('content')
        
        @include('sections.footer')
      
    <script src="{{asset('js/apps.js')}}"></script>
    </body>
</html>
