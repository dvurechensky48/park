@extends('layouts.template')

@section('title')
    @if(!empty($SEO))
    <?= $SEO->content["en"]["title"] ?>
    @endif
@endsection

@section('description')
    @if(!empty($SEO))
    <?= $SEO->content["en"]["description"] ?>
    @endif
@endsection

@section('keywords')
    @if(!empty($SEO))
    <?= $SEO->content["en"]["keywords"] ?>
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
                   		<? 
                   			$date = explode(' ', $value['publish_at']) ;
                   			
                   		 ?>
	                   	<div class="col-sm-4 margin-top-2">
	                        <div class="item">
	                            <div class="img">
									@if(!empty($value->image))
	                            	<img src="{{ asset('storage/') }}/<?= $value->image[0]->path ?><?= $value->image[0]->name ?>.<?= $value->image[0]->extension ?>">
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
	                                            <div class="title"><b><a class="#"><?= $value->content['en']["name"] ?></a></b></div>
	                                            <div class="blackseparator-small"></div>
	                                            <div class="description"><?= $value->content['en']["body-small"] ?></div>
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