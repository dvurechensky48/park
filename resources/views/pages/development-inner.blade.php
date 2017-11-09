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

@section('content')
	@widget('TopMenu')
	@widget('BlueHeader') 

    
    
   

   <!-- content -->
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <div class="slidebar">
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
                                    <div id="owl-example" class="owl-carousel">
                                    @foreach($arResult->image as $value)
                                        <div class="gallery">
                                            <img class="lazyload" src="#" data-src="{{ asset('storage/') }}/<?= $value->path ?><?= $value->name ?>.<?= $value->extension ?>">
                                            <div class="all-center loader">
                                                <img style="margin-top:5%;width:50px !important;min-width:auto;" src="{{ asset('img/load.gif') }}">
                                                <div>Загрузка...</div>
                                            </div>
                                        </div>
                                        
                                    @endforeach
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
    });

    </script>

	@widget('Footer')
@endsection