


<div class="partner-main margin-top-8">
    @if(!empty($arResult))
    	<? $item = 1; ?>
	    @foreach($arResult as $value)
	    	
	    	<div class="col-xs-3">
	            <a target="_blank" class="img" title="{{ $value->content[$lang]['name'] }}" href="{{ $value->content[$lang]['link'] }}"><img src="{{ asset('storage/app/public/') }}/<?= $value->image[0]->path ?><?= $value->image[0]->name ?>.<?= $value->image[0]->extension ?>"></a>
	        </div>

	    	<? $item = $item + 1; ?>
	    @endforeach
    @endif
    <div class="clearfix"></div>
</div>
</div>
    