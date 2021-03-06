
@if(!empty($arResult))
	@foreach($arResult as $value)
	<div class="margin-top-4">
	    <div class="row">
	        <div class="col-xs-offset-2 col-xs-1">
	        	<object class="svg-red" data="{{ asset('storage/app/public/') }}/<?= $value->image->path ?><?= $value->image->name ?>.<?= $value->image->extension ?>" type="image/svg+xml"></object>
	        </div>
	        <div class="col-xs-offset-1 col-xs-8">
	            <div class="name"><a class="img underline" href="employment/<?= $value->slug ?>"><?= $value->content[$lang]['name'] ?></a></div>
	            @if(isset($value->content[$lang]['article-main']))
	            <div>{{ $value->content[$lang]['article-main'] }}</div>
	            @endif
	            
	        </div>
	    </div>
	     
	</div>
	@endforeach
@endif

