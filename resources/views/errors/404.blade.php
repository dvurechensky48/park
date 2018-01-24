@extends('layouts.template')
@section('title')
	Ошибка 404
@endsection

@section('description')
	@if(!empty($arResult))
	Ошибка 404
	@endif
@endsection

@section('keywords')
	@if(!empty($arResult))
	Ошибка 404
	@endif
@endsection

@section('content')
	@widget('TopMenu')
		<section class="blue">
	        <div class="container-fluido">
	            <div class="row">
	                <div class="col-md-9 hidden-sm hidden-xs">
	                    <h1 class="all-left">
	                       <span class="redseparator"> 
	                            Ошибка
	                        </span>
	                    </h1>
	                </div>
	                <div class="col-xs-12 hidden-lg hidden-md">
	                    <h2 class="all-center">
	                      	ОШИБКА
	                    </h2>
	                </div>
	                <div class="col-md-3 hidden-xs hidden-sm all-right">
	                    <div class="logo-circle all-center"><img src="{{ asset('img/logo.png') }}"></div>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	        </div>
	    </section>
	
		<section class="white content">
	        <div class="container-fluid">
	            <div class="row">
	                <h1>Запрашиваемая страница не существует</h1>
	                <div class="margin-top-4"></div>
	                <p class="all-center"><img src="https://siteblogger.ru/wp-content/uploads/2017/01/error-404.jpg"></p>
	            </div>
	        </div>
	    </section>

	


@endsection