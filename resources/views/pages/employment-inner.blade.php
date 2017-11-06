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

	@widget('MenuEmployment')

    @if(!empty($arResult))

   <section class="red">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    <h2><?= $arResult->content["en"]["name"] ?></h2>
                </div>
                <div class="col-xs-6"></div>
                <div class="col-xs-3 all-right">
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

	<!-- content -->
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                <h2><?= $arResult->content["en"]["article-title"] ?></h2>
                <p><?= $arResult->content["en"]["body"] ?></p>
            </div>
        </div>
    </section>
     @endif
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                <h3>Ближайшие события</h3>

                <div class="slidebar">
                   <div class="col-sm-6 col-md-4 margin-top-2">
                        <div class="item">
                            <div class="img">
                                <img src="img/news.png">
                                <div class="text-left">
                                    <div class="row">
                                        <div class="col-xs-12 color-white">
                                            <div class="date all-center">08.08.2017</div>
                                            <div class="big-date all-center"><b>20:00</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="title"><b><a class="#">Торжественное открытие поющих фонтанов Торжественное открытие поющих фонтанов</a></b></div>
                                            <div class="blackseparator-small"></div>
                                            <div class="description">Традиционное открытие фонтанов на центрально площади нижнего парка. И это нормально</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 margin-top-2">
                        <div class="item">
                            <div class="img">
                                <img src="img/news.png">
                                <div class="text-left">
                                    <div class="row">
                                        <div class="col-xs-12 color-white">
                                            <div class="date all-center">08.08.2017</div>
                                            <div class="big-date all-center"><b>20:00</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="title"><b><a class="#">Торжественное открытие поющих фонтанов Торжественное открытие поющих фонтанов</a></b></div>
                                            <div class="blackseparator-small"></div>
                                            <div class="description">Традиционное открытие фонтанов на центрально площади нижнего парка. И это нормально</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 margin-top-2">
                        <div class="item">
                            <div class="img">
                                <img src="img/news.png">
                                <div class="text-left">
                                    <div class="row">
                                        <div class="col-xs-12 color-white">
                                            <div class="date all-center">08.08.2017</div>
                                            <div class="big-date all-center"><b>20:00</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="title"><b><a class="#">Торжественное открытие поющих фонтанов Торжественное открытие поющих фонтанов</a></b></div>
                                            <div class="blackseparator-small"></div>
                                            <div class="description">Традиционное открытие фонтанов на центрально площади нижнего парка. И это нормально</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-sm hidden-xs clearfix"></div>
                    <div class="col-sm-6 col-md-4 margin-top-2">
                        <div class="item">
                            <div class="img">
                                <img src="img/news.png">
                                <div class="text-left">
                                    <div class="row">
                                        <div class="col-xs-12 color-white">
                                            <div class="date all-center">08.08.2017</div>
                                            <div class="big-date all-center"><b>20:00</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="title"><b><a class="#">Торжественное открытие поющих фонтанов Торжественное открытие поющих фонтанов</a></b></div>
                                            <div class="blackseparator-small"></div>
                                            <div class="description">Традиционное открытие фонтанов на центрально площади нижнего парка. И это нормально</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 margin-top-2">
                        <div class="item">
                            <div class="img">
                                <img src="img/news.png">
                                <div class="text-left">
                                    <div class="row">
                                        <div class="col-xs-12 color-white">
                                            <div class="date all-center">08.08.2017</div>
                                            <div class="big-date all-center"><b>20:00</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="title"><b><a class="#">Торжественное открытие поющих фонтанов Торжественное открытие поющих фонтанов</a></b></div>
                                            <div class="blackseparator-small"></div>
                                            <div class="description">Традиционное открытие фонтанов на центрально площади нижнего парка. И это нормально</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 margin-top-2">
                        <div class="item">
                            <div class="img">
                                <img src="img/news.png">
                                <div class="text-left">
                                    <div class="row">
                                        <div class="col-xs-12 color-white">
                                            <div class="date all-center">08.08.2017</div>
                                            <div class="big-date all-center"><b>20:00</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="title"><b><a class="#">Торжественное открытие поющих фонтанов Торжественное открытие поющих фонтанов</a></b></div>
                                            <div class="blackseparator-small"></div>
                                            <div class="description">Традиционное открытие фонтанов на центрально площади нижнего парка. И это нормально</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

<!-- end content -->

	@widget('Footer')
@endsection