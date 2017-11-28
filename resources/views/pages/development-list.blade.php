@extends('layouts.template')


@section('title')
    @if(!empty($SEO->content[$lang]["title"]))
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
    @if(!empty($SEO->content[$lang]["keywords"]))
    <?= $SEO->content[$lang]["keywords"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('content')
	@widget('TopMenu')
	@widget('BlueHeader')


	 <!-- content -->
	 
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                <div class="slidebar">
                   @if(!empty($arResult))
                   	@foreach($arResult as $value)
                   		<?php 
                   			$date = explode(' ', $value['publish_at']) ;
                   			
                   		 ?>
	                   	<div class="col-sm-4 margin-top-2">
	                        <div class="item">
	                            <div class="img">
									@if(!empty($value->image))
	                            	<img src="{{ asset('storage/app/public/') }}/<?= $value->image[0]->path ?><?= $value->image[0]->name ?>_high.<?= $value->image[0]->extension ?>">
	                            	@else
	                            	<img width="100%" src="http://www.iakr.ru/iTDGh/KorTaxcpwtdhmjO">
	                            	@endif
	                            	<div class="text-left">
	                                    <div class="row">
	                                        <div class="col-xs-12 color-white">
	                                            <div class="date all-center"><?= $date[0] ?></div>
	                                            <div class="big-date all-center"><b><?= $date[1] ?></b></div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="text-right">
	                                    <div class="row">
	                                        <div class="col-xs-12">
	                                            <div class="title"><b><a class="#"><?= $value->content[$lang]["name"] ?></a></b></div>
	                                            <div class="blackseparator-small"></div>
	                                            <div class="description"><?= $value->content[$lang]["body-small"] ?></div>
	                                        </div>
	                                        <div class="clearfix"></div>
	                                    </div>
	                                </div>
	                                <a class="link" href="/{{ $url[0] }}/{{ $value->slug }}"></a>
	                            </div>
	                        </div>
	                    </div>
                   	@endforeach
                   @endif
                </div>
			</div>
        </div>
    </section>

    <section class="white">

    	<div class="container-fluid">
            <div class="row">
             <?php echo $arResult->links(); ?>	
            </div>
        </div>
    </section>

    <!-- end content -->

	@widget('Footer')
@endsection