@if(!empty($arResult))
	@foreach($arResult as $value)
		<?php 
		$date = explode(' ', $value->publish_at);
		$date =explode('-', $date[0])
		?>
		@if($url[2] != $value->slug)
			<div class="item">
	            <div class="img">
	                <img src="{{ asset('storage/app/public/') }}/<?= $value->image[0]->path ?><?= $value->image[0]->name ?>.<?= $value->image[0]->extension ?>"">
	                <div class="text-left">
	                    <div class="row">
	                        <div class="col-xs-12 color-white">
	                            <div class="date all-center"><?= $date[2] ?>.<?= $date[1] ?>.<?= $date[0] ?></div>
	                        </div>
	                    </div>
	                </div>
	                <div class="text-right">
	                    <div class="row">
	                        <div class="col-xs-12">
	                            <div class="title"><b><a class="#"><?= $value->content['en']['body-small'] ?></a></b></div>
	                            <div class="blackseparator-small"></div>
	                            <div class="description"><?= $value->content['en']['name'] ?></div>
	                        </div>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
	                <a class="link" href="/{{ $url[1] }}/{{ $value->slug }}"></a>
	            </div>
	        </div>

		@endif
	@endforeach
@endif