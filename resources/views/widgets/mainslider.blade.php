 
@if(!empty($arResult))
<!-- slider -->
    <div class="container-fluid nopadding">
        <div class="row nopadding">
        	<div class="margin-top-4 hidden-md hidden-lg"></div>
            <div class="slider">
                <div id="owl-main" class="owl-main">
                     
                	@foreach($arResult as $value)
					 <div class="item active">
					    <div class="img" style="background:url('{{ asset('storage/app/public/') }}/<?= $value['image']['0']->path ?><?= $value['image']['0']->name ?>.<?= $value['image']['0']->extension ?>');height:600px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                        </div>
					    <div class="center padding-2" style="top:23%;">
					        <div class="desc"><?= $value->content[$lang]["small_text"] ?></div>
					        <div class="title"><?= $value->content[$lang]["big_text"] ?></div>
					        <div class="margin-top-4 all-center"><a class="btn img" href="<?= $value->content[$lang]["button_link"] ?>"><?= $value->content[$lang]["button_text"] ?></a></div>
					    </div>
					    <div class="top padding-2 hidden-sm hidden-xs">
					        <div><?= $value->content[$lang]["phone_number"] ?></div>
					        <div>
					        	<span class="svg-span"><object class="svg-slider" data="{{ asset('img/slider/slider1.svg') }}" type="image/svg+xml"></object></span>
					        	
					        	<span class="svg-span"><object class="svg-slider" style="cursor:pointer;" data="{{ asset('img/slider/slider3.svg') }}" type="image/svg+xml"></object></span>
					        	<div class="svg-after">
				        		<a href="/contacts" class="img slider-btn">Контакты</a>
					        	</div>
					        	<div class="svg-after">
                                    <a href="#myModal" class="img slider-btn" data-toggle="modal">Обратная связь</a>
					        	</div>
				        	</div>
				        	
					    </div>
					    
					 </div>
					@endforeach
                
                </div>
                <div class="left-block hidden-xs hidden-sm">
                    <div class="head">
                        {{ trans('widgets/allpark.head') }}
                    </div>
                    <ul class="body">
                        <li><a class="img active" href="http://parki48.ru">{{ trans('widgets/allpark.nizhniy') }}</a></li>
                        <li><a class="img" href="http://skazka.parki48.ru">{{ trans('widgets/allpark.skazka') }}</a></li>
                        <li><a class="img" href="http://nlmk.parki48.ru">{{ trans('widgets/allpark.nlmk') }}</a></li>
                </div>
            </div>
        </div>
    </div>
<!-- end slider -->
<script type="text/javascript">
	var svgHover = document.querySelector('.slider');
	var click = '';
if(svgHover)
{

    svgHover.onmouseover = function(e) {

        var event = e || window.event,
            target = event.CurrentTarget || event.srcElement;
        svgHoverOff();
        if (target.tagName == 'SPAN') {
        	svgHoverOn(target);
        }
    };
    svgHover.onclick = function(e) {

        var event = e || window.event,
            target = event.CurrentTarget || event.srcElement;
        
        if (target.tagName == 'SPAN') {

        	svgClickOn(target);
        }
    };
}



function svgHoverOn(elem){
    var svg = elem.querySelector('object').contentDocument.querySelectorAll('path');

    for (i=0;i<svg.length;i++)
    {
    	svg[i].style.fill = '#c36a6a';
    }
}
function svgClickOn(elem){
    var svg = elem.querySelector('object').contentDocument.querySelectorAll('path');
    var svgSpan = document.querySelectorAll('.svg-span');
    var num = '';

    for(l=0;l<svgSpan.length;l++)
    {
    	document.querySelectorAll('.svg-after')[l].style.display = 'none';
    }
    for(k=0;k<svgSpan.length;k++)
    {
    	if(svgSpan[k] == elem)
    	{	
    		document.querySelectorAll('.svg-after')[k].style.display = 'block';
    	}
    }
    console.log(num);
    //var svgAfter = elem.querySelector('.svg-after');
    for (i=0;i<svg.length;i++)
    {
    	click = svg[i];
    }
    svgHoverOff();
}
function svgHoverOff(){
    var svg = document.querySelectorAll('.svg-slider');
    for (i=0;i<svg.length;i++)
    {	

        path = svg[i].contentDocument.querySelectorAll('path');
        for(k=0;k<path.length;k++)
        {
        	if(path[k] != click )
        	{	
        		path[k].style.fill = '#fff';
        	}
        	
        }
    }
}

</script>
@endif