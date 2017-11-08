@if(!empty($arResult))
	@foreach($arResult as $value)
		<div class="item-small">
		    <div class="img">
		        <img src="{{ asset('storage/') }}/<?= $value->image[0]->path ?><?= $value->image[0]->name ?>.<?= $value->image[0]->extension ?>">
		    </div>
		    <div class="icon">
		        <?= $value->content['en']['name'] ?>
		    </div>
		    <div class="title">
		        <?= explode(' ', $value->publish_at)[0] ?>
		    </div>
		    <a href="<?= $value->slug ?>"></a>
		</div> 
	@endforeach
@endif 
