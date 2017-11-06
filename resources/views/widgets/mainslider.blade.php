 
@if(!empty($arResult))
<!-- slider -->
    <div class="container-fluid nopadding">
        <div class="row nopadding">
            <div class="slider">
                <div id="owl-example" class="owl-main">
                     
                	@foreach($arResult as $value)
					 <div class="item">
					    <div class="img">
					        <img src="{{ asset('storage/') }}/<?= $value['image']['0']->path ?><?= $value['image']['0']->name ?>.png">
					    </div>
					    <div class="center padding-2">
					        <div class="desc"><?= $value->content['en']["small_text"] ?></div>
					        <div class="title"><?= $value->content['en']["big_text"] ?></div>
					        <div class="margin-top-4 all-center"><a class="btn img" href="<?= $value->content['en']["button_link"] ?>"><?= $value->content['en']["button_text"] ?></a></div>
					    </div>
					    <div class="top padding-2">
					        <?= $value->content['en']["phone_number"] ?>
					        
					    </div>
					 </div>
					@endforeach
                
                </div>
            </div>
        </div>
    </div>
<!-- end slider -->
@endif