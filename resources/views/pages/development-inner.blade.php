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
                <div class="col-sm-4">
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

                        <h3>Бижайшие события</h3>
                        
                        @widget('DevelopmentsSlidebar')

                        <a href="#" class="item-after img">
                            Подгрузить еще новостей
                        </a>

                    </div>
                </div>


                <div class="col-sm-8">
                    <div class="content">
                        
                        @if(!empty($arResult))
                            <h2><?= $arResult->content['en']['name'] ?></h2>
                            <div class="date"><?= $arResult->publish_at ?></div>
                            <div class="margin-top-2">
                                <p><?= $arResult->content['en']['body'] ?></p>
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
                    <div class="comment margin-top-4">
                        <h3>Комментарии</h3>
                        
                        <div class="comment margin-top-4">
                            <div class="col-xs-6">Ф.Имя</div>
                            <div class="col-xs-6 all-right color-ser">Сегодня, 13:01</div>
                            <div class="clearfix"></div>
                            <div class="redseparator-small"></div>
                            <div>Здесь будет текст комментария</div>
                            <div class="margin-top-2"><a class="color-ser" href="#">Ответить</a></div>
                        </div>

                        <div class="comment margin-top-4">
                            <div class="col-xs-6">Ф.Имя</div>
                            <div class="col-xs-6 all-right color-ser">Сегодня, 13:01</div>
                            <div class="clearfix"></div>
                            <div class="redseparator-small"></div>
                            <div>Здесь будет текст комментария Здесь будет текст комментария Здесь будет текст комментария Здесь будет текст комментария Здесь будет текст комментария будет текст комментария </div>
                            <div class="margin-top-2"><a class="color-ser" href="#">Ответить</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->


	@widget('Footer')
@endsection