@extends('layouts.template')

@section('title')
    @if(!empty($arResult->content[$lang]["description"]))
    <?= $arResult->content[$lang]["title"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('description')
    @if(!empty($arResult->content[$lang]["description"]))
    <?= $arResult->content[$lang]["description"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('keywords')
    @if(!empty($arResult->content[$lang]["description"]))
    <?= $arResult->content[$lang]["keywords"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('assets')
<script src="{{ asset('gal/unitegallery/js/jquery-11.0.min.js') }}"></script>
<script src="{{ asset('gal/unitegallery/js/unitegallery.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('gal/unitegallery/css/unite-gallery.css') }}">
<script src="{{ asset('gal/unitegallery/themes/default/ug-theme-default.js') }}"></script>
<link rel="stylesheet" href="{{ asset('gal/unitegallery/themes/default/ug-theme-default.css') }}"> 
@endsection
@section('content')



	@widget('TopMenu')
	@widget('RedHeader') 
    <!-- content -->
    
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                 <div class="col-sm-4 hidden-xs hidden-sm">
                     <div class="slidebar-2 height-target">
                         @widget('GalerySlidebarInner') 
                     </div>
                 </div>


                 <div class="col-sm-8" id="height-object">
                    <div id="gallery" style="display:none;">
                         @if(!empty($arResult))
                            @foreach($arResult->image as $value)
                               <img class="lazyload"  alt="Preview Image 1"
                                 src="{{ asset('img/1.png') }}"
                                 data-src="{{ asset('storage/app/public/') }}/<?= $value->path ?><?= $value->name ?>.<?= $value->extension ?>"
                                 data-image="{{ asset('storage/app/public/') }}/<?= $value->path ?><?= $value->name ?>.<?= $value->extension ?>""
                                 data-description="Нижний парк">
                                 
                            @endforeach
                         @endif
                     </div>
                 </div>
                 <div class="clearfix"></div>
            </div>
        </div>
        
    </section>
    <!-- end content -->
    <script type="text/javascript">
        window.addEventListener("load", function(event) {
        lazyload();
        jQuery("#gallery").unitegallery({
                theme_enable_text_panel: false,
            });
        $(".lazyload").each(function(event) { 
            $(".lazyload")[event].attr("data-image", $(".lazyload").attr("src")[event]);
        });

         });

       
    </script>
    @widget('Footer')
@endsection 