@extends('layouts.template')
@section('title')

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
	                                <img src="img/news.png">
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
	                            </div>
	                        </div>
	                    </div>
                   	@endforeach
                   @endif
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->

	@widget('Footer')
@endsection