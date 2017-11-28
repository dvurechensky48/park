

<ul class="programm">
    @if(!empty($arResult))
		@foreach($arResult as $value)
			<li>
		        <div class="date"><?= $value->publish_at ?></div>
		        <p><a class="color-white underline" href="developments/<?= $value->slug ?>"><?= $value->content[$lang]['body-small'] ?></a></p>
		    </li>
		    <div class="margin-top-4"></div>
		@endforeach
	@endif
</ul> 
