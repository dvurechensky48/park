 <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
     <!--  Библиотека jQuery 1.7+  -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet">
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main-page.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <!-- Основной файл стилей -->
    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.carousel.css') }}">
    <!-- Тема по умолчанию -->
    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.theme.css') }}">
   
    <!-- Сам плагин слайдера -->
    <script src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>
    
    @yield('assets')


    <!-- Ленивая загрузка изображений -->
    <script src="{{ asset('js/lazy-load.js') }}" type="text/javascript"></script> 
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
</head>
<body>

<div style="min-height: 77.5vh;position: relative;">
    @yield('content')
</div>
<div style="position: relative;bottom: 0;">
    @widget('Footer')
</div>
    
<script type="text/javascript">
    
 function preloader(immune, background, color) { 
     $('body').prepend('<div class="preloader hidden-xs hidden-sm"><span class="loading-bar"></span><i class="radial-loader"></i></div>'); 
     if (immune == true) { 
     $('body > div.preloader').addClass('immune'); 
     } 
     
     if (color == 'red') { 
     $('body > div.preloader span.loading-bar').addClass('red-colored'); 
     $('body > div.preloader i.radial-loader').addClass('red-colored'); 
     } else if (color == 'blue') { 
     $('body > div.preloader span.loading-bar').addClass('blue-colored'); 
     $('body > div.preloader i.radial-loader').addClass('blue-colored'); 
     } else if (color == 'green') { 
     $('body > div.preloader span.loading-bar').addClass('green-colored'); 
     $('body > div.preloader i.radial-loader').addClass('green-colored'); 
     } else if (color == 'yellow') { 
     $('body > div.preloader span.loading-bar').addClass('yellow-colored'); 
     $('body > div.preloader i.radial-loader').addClass('yellow-colored'); 
     } 
     
     setTimeout(function () { 
     $('.preloader').fadeOut(1000); 
     }, 1000); 
     setTimeout(function () { 
     $('.preloader').remove(); 
     }, 5000); 
     
     
 } 
 var all_menu = document.querySelectorAll('a');
    for(i=0;i<all_menu.length;i++)
    {
        all_menu[i].onclick = function(){ preloader(true, 'black', 'red'); }
    }



</script>




<script src="{{ asset('js/anim.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/height.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/init.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/touch-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cookie.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/spec_version.js') }}"></script>
    
</body>
</html>