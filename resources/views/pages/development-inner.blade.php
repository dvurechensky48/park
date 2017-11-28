@extends('layouts.template')
@section('title')
	@if(!empty($SEO->content[$lang]["description"]))
	<?= $SEO->content[$lang]["title"] ?>
    @else
    Нижний парк
	@endif
@endsection

@section('description')
	@if(!empty($SEO->content[$lang]["description"]))
	<?= $SEO->content[$lang]["description"] ?>
    @else
    Нижний парк
	@endif
@endsection

@section('keywords')
	@if(!empty($SEO->content[$lang]["description"]))
	<?= $SEO->content[$lang]["keywords"] ?>
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
	@widget('BlueHeader') 

    
    
   

   <!-- content -->
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <div class="slidebar">
                        <!-- 
                         <div class="calendar">
                            <div class="row">
                                <div class="col-xs-1"></div>
                                <div class="col-xs-2 all-center"><a class="img color-ser black-hover" href="#"><</a></div>
                                <div class="col-xs-6 all-center">Сентябрь, 2017</div>
                                <div class="col-xs-2 all-center"><a class="img color-ser black-hover" href="#">></a></div>
                                <div class="col-xs-1"><img src="img/calendar.png"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        -->
                       

                        <h3>{{ trans('pages/development-inner.interesting') }}</h3>
                        
                        <div class="height-target">
                        @widget('DevelopmentsSlidebar')
                        <a href="/{{ $url[0] }}" class="item-after img">
                            {{ trans('pages/development-inner.more') }}
                        </a>
                        </div>
                        

                    </div>
                </div>


                <div class="col-md-8" id="height-object">
                    <div class="content">
                        
                        @if(!empty($arResult))
                            <h2><?= $arResult->content[$lang]['name'] ?></h2>
                            <div class="date"><?= $arResult->publish_at ?></div>
                            <div class="margin-top-2">
                                <p><?= $arResult->content[$lang]['body'] ?></p>
                                @if(count($arResult->image > 0))
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
                                @endif
                            </div>
                            @if(!empty($arResult->content[$lang]['phone_number']))
                                <h3 class="requer"><?= $arResult->content[$lang]['phone_number'] ?></h3>
                            @endif
                            
                        @endif
                    </div>
                    <div class="soc-seti margin-top-4">
                        <div>
                            <a class="img" href="https://www.facebook.com/pages/%D0%9B%D0%B8%D0%BF%D0%B5%D1%86%D0%BA-%D0%BD%D0%B8%D0%B6%D0%BD%D0%B8%D0%B9-%D0%BF%D0%B0%D1%80%D0%BA/192934257434069" target="_blank"><img class="white-hover" src="{{ asset('img/soc1.png') }}"></a>
                            <a class="img" href="https://www.instagram.com/48_parki_48/" target="_blank"><img class="white-hover" src="{{ asset('img/soc2.png') }}"></a>
                            <a class="img" href="https://ok.ru/parki48" target="_blank"><img class="white-hover" src="{{ asset('img/soc3.png') }}"></a>
                            <a class="img" href="https://vk.com/parki48" target="_blank"><img class="white-hover" src="{{ asset('img/soc4.png') }}"></a>
                            <!-- <a class="img" href="#"><img class="white-hover" src="{{ asset('img/soc5.png') }}"></a> -->
                        </div>
                        
                    </div>
                    
                    @widget('Comment')
                    
                </div>
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