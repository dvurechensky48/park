<h2 class="all-center">Для Вас работают</h2>
<div class="for-you">
	<div class="row">
		@if(!empty($arResult))
			@foreach($arResult as $value)
				<div class="margin-top-4">
			        <div class="col-xs-4  all-right height-object">
			        	@if(!empty($value->image))
			        		<img src="{{ asset('storage/') }}/<?= $value->image[0]->path ?><?= $value->image[0]->name ?>.<?= $value->image[0]->extension ?>">
			        	@endif
			        </div>
			        <div class="col-xs-8 height-target">
			            
			            <div class="fio">
			                <div class="name">{{ $value->content['en']['name'] }}</div>
			                <div>{!! $value->content['en']['body'] !!}</div>
			            </div>
			            
			        </div>
			        <div class="clearfix"></div>
			    </div>
			@endforeach
		@endif

    </div>
</div>