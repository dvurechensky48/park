@extends('layouts.template')
@section('title')

@section('content')



	@widget('MainSlider')
	
    @widget('TopMenu')
    
    <!-- content -->
    <div class="container-fluid nopadding">
            <div class="col-md-6 nopadding">
                <section class="padding-2 white">
                    @widget('Information')
                </section>
                <section id="tour" class="padding-2 blue">
                    <h2 class="all-center">Виртуальный тур по парку</h2>
                    <div class="all-center">
                        <div class="margin-top-4 circle-main"> <a class="img" href="#"><img src="img/3d-tour.png"></a> </div>
                    </div>
                    
                </section>
                <section class="padding-2 blue">
                    @widget('News')
                </section>
                <section class="padding-2 red">
                    <h2 class="all-center">Для Вас работают</h2>
                    <div class="for-you">
                        <div class="row">
                            <div class="margin-top-4">
                                <div class="col-xs-4  all-right height-object"><img src="img/for.png"></div>
                                <div class="col-xs-8 height-target">
                                    <div class="fio">
                                        <div class="name">Иванов Иван Иванович</div>
                                        <div>Директор, идейный вдохновитель</div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="margin-top-4">
                                <div class="col-xs-4  all-right height-object"><img src="img/for.png"></div>
                                <div class="col-xs-8 height-target">
                                    <div class="fio">
                                        <div class="name">Иванов Иван Иванович</div>
                                        <div>Директор, идейный вдохновитель</div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="margin-top-4">
                                <div class="col-xs-4  all-right height-object"><img src="img/for.png"></div>
                                <div class="col-xs-8 height-target">
                                    <div class="fio">
                                        <div class="name">Иванов Иван Иванович</div>
                                        <div>Директор, идейный вдохновитель</div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6 nopadding">
                <section class="padding-2 blue">
                    @widget('Developments')
                </section>
                <section id="zan" class="padding-2 white">
                    <h2 class="all-center">Чем заняться?</h2>
                    <div class="zan-main">
                        @widget('Employment')
                    </div>
                </section>
                <section id="gal-main" class="padding-2 blue">
                    <h2 class="all-center">Галлерея событий</h2>
                    <div class="all-center">
                        <div class="margin-top-4 circle-main"> <a class="img" href="#"><img src="img/gal-main.png"></a> </div>
                    </div>
                </section>
                <section class="padding-2 white">
                    <h2 class="all-center">Наши партнеры</h2>
                    <div class="partner-main margin-top-8">
                        <div class="row">
                            <div class="col-xs-3">
                                <a class="img" href="#"><img src="img/part1.png"></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="img" href="#"><img src="img/part2.png"></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="img" href="#"><img src="img/part3.png"></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="img" href="#"><img src="img/part1.png"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <a class="img" href="#"><img src="img/part2.png"></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="img" href="#"><img src="img/part3.png"></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="img" href="#"><img src="img/part1.png"></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="img" href="#"><img src="img/part2.png"></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="clearfix"></div>
    </div>
    <!-- end content -->

    @widget('Footer')	

@endsection