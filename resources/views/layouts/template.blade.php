 <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main-page.css') }}" rel="stylesheet">
    <!-- Основной файл стилей -->
    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.carousel.css') }}">
     
    <!-- Тема по умолчанию -->
    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.theme.css') }}">
     
    <!--  Библиотека jQuery 1.7+  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
     
    <!-- Сам плагин слайдера -->
    <script src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>
     
    

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
</head>
<body>
@yield('content')
<script src="{{ asset('js/anim.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/height.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/init.js') }}" type="text/javascript"></script>
</body>
</html>