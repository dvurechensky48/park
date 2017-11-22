@extends('layouts.template')
@section('title')
	@if(!empty($arResult))
	<?= $arResult->content["en"]["title"] ?>
	@endif
@endsection

@section('description')
	@if(!empty($arResult))
	<?= $arResult->content["en"]["description"] ?>
	@endif
@endsection

@section('keywords')
	@if(!empty($arResult))
	<?= $arResult->content["en"]["keywords"] ?>
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
                       

                        <h3>Может вам будет интересно</h3>
                        
                        <div class="height-target">
                        @widget('DevelopmentsSlidebar')
                        <a href="/{{ $url[0] }}" class="item-after img">
                            Вернуться к списку
                        </a>
                        </div>
                        

                    </div>
                </div>


                <div class="col-md-8" id="height-object">
                    <div class="content">
                        
                        @if(!empty($arResult))
                            <h2><?= $arResult->content['en']['name'] ?></h2>
                            <div class="date"><?= $arResult->publish_at ?></div>
                            <div class="margin-top-2">
                                <p><?= $arResult->content['en']['body'] ?></p>
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
                            @if(!empty($arResult->content['en']['phone_number']))
                                <h3 class="requer"><?= $arResult->content['en']['phone_number'] ?></h3>
                            @endif
                            
                        @endif
                    </div>
                    <div class="soc-seti margin-top-4">
                        <div>
                            <a class="img" href="#"><img class="white-hover" src="{{ asset('img/soc1.png') }}"></a>
                            <a class="img" href="#"><img class="white-hover" src="{{ asset('img/soc2.png') }}"></a>
                            <a class="img" href="#"><img class="white-hover" src="{{ asset('img/soc3.png') }}"></a>
                            <a class="img" href="#"><img class="white-hover" src="{{ asset('img/soc4.png') }}"></a>
                            <a class="img" href="#"><img class="white-hover" src="{{ asset('img/soc5.png') }}"></a>
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