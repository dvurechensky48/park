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
	
	@if(!empty($arResult))
		<section class="white">
	        <div class="container-fluid">
	            <div class="row">
	                <h2><?= $arResult->content['en']['name'] ?></h2>
	                <p><?= $arResult->content['en']['body'] ?></p>
	            </div>
	        </div>
	    </section>

	@endif
	
	@widget('Footer')
@endsection
