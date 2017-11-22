<ul class="programm">
    @if(!empty($arResult))
		@foreach($arResult as $value)
			<?php $date = explode(' ', $value->publish_at); ?>
			<li>
		        <div class="date" style="color:#000 !important;"><?= $date[0] ?> | <?= $value->content['en']['name'] ?></div>
		        <p><a class="underline" href="news/<?= $value->slug ?>"><?= $value->content['en']['body-small'] ?></a></p>
		    </li>
		    <div class="margin-top-4"></div>
		@endforeach
	@endif
</ul>  
