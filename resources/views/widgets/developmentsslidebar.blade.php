@if(!empty($arResult))
	@foreach($arResult as $value)
		<? 
		$date = explode(' ', $value->publish_at);
		?>
		@if($url[2] != $value->slug)
			<div class="item">
	            <div class="img">
	                <img src="{{ asset('storage/') }}/<?= $value->image[0]->path ?><?= $value->image[0]->name ?>.<?= $value->image[0]->extension ?>"">
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