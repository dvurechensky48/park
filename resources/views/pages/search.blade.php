@extends('layouts.template')
@section('title')
	Поиск по сайту
@endsection
@section('content')
	@widget('TopMenu')
	@widget('BlueHeader') 

	
		<section class="white">
	        <div class="container-fluid">
	            <div class="row">
	            	@if(!empty($arResult))
	                	@foreach($arResult as $value)
	                	<div class="search-result margin-top-2">
	                		<h3><a class="img underline" href="<?= $value->type ?>/<?= $value->slug ?>"><?= $value->content['en']['name'] ?></a></h3>
	                		<p><?= $value->content['en']['body-small'] ?></p>
	                	</div>
	                	@endforeach
                	@elseif(count($arResult) < 1)
                	<h3>Ничего не найдено</h3>
                	@endif
	            </div>
	        </div>
	    </section>

	
	
	@widget('DevelopmentsFooter')
	@widget('Footer')
@endsection 
