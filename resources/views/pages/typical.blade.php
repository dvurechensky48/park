@extends('layouts.template')
@section('title')
	@if(!empty($arResult))
	<?= $arResult->content[$lang]["title"] ?>
	@endif
@endsection

@section('description')
	@if(!empty($arResult))
	<?= $arResult->content[$lang]["description"] ?>
	@endif
@endsection

@section('keywords')
	@if(!empty($arResult))
	<?= $arResult->content[$lang]["keywords"] ?>
	@endif
@endsection

@section('content')
	@widget('TopMenu')
	@widget('BlueHeader') 
	@if(!empty($arResult))
		<section class="white content">
	        <div class="container-fluid">
	            <div class="row">
	                <h2><?= $arResult->content[$lang]['name'] ?></h2>
	                <p><?= $arResult->content[$lang]['body'] ?></p>
	            </div>
	        </div>
	    </section>

	@endif
	
	
@endsection
