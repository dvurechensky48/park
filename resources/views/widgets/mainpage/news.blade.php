<h2 class="all-center">Новости</h2>
<ul class="programm">
    @if(!empty($arResult))
		@foreach($arResult as $value)
			<? $date = explode(' ', $value->publish_at); ?>
			<li>
		        <div class="date"><?= $date[0] ?> | <?= $value->content['en']['name'] ?></div>
		        <p><a class="color-white underline" href="news/<?= $value->slug ?>"><?= $value->content['en']['body-small'] ?></a></p>
		    </li>
		@endforeach
	@endif
</ul>  
