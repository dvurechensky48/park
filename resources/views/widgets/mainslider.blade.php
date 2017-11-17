 
@if(!empty($arResult))
<!-- slider -->
    <div class="container-fluid nopadding">
        <div class="row nopadding">
        	<div class="margin-top-4 hidden-md hidden-lg"></div>
            <div class="slider">
                <div id="owl-main" class="owl-main">
                     
                	@foreach($arResult as $value)
					 <div class="item active">
					    <div class="img">
					        <img src="{{ asset('storage/') }}/<?= $value['image']['0']->path ?><?= $value['image']['0']->name ?>.<?= $value['image']['0']->extension ?>">
					    </div>
					    <div class="center padding-2">
					        <div class="desc"><?= $value->content['en']["small_text"] ?></div>
					        <div class="title"><?= $value->content['en']["big_text"] ?></div>
					        <div class="margin-top-4 all-center"><a class="btn img" href="<?= $value->content['en']["button_link"] ?>"><?= $value->content['en']["button_text"] ?></a></div>
					    </div>
					    <div class="top padding-2">
					        <div><?= $value->content['en']["phone_number"] ?></div>
					        <div>
					        	<span class="svg-span"><object class="svg-slider" data="{{ asset('img/slider/slider1.svg') }}" type="image/svg+xml"></object></span>
					        	<span class="svg-span"><object class="svg-slider" style="cursor:pointer;" data="{{ asset('img/slider/slider2.svg') }}" type="image/svg+xml"></object></span>
					        	<span class="svg-span"><object class="svg-slider" style="cursor:pointer;" data="{{ asset('img/slider/slider3.svg') }}" type="image/svg+xml"></object></span>
					        	<div class="svg-after">
				        		<a href="#footer" class="img slider-btn">Контакты</a>
					        	</div>
					        	<div class="svg-after">
					        		<a href="malta:zet48@mail.ru" class="img slider-btn">Написать e-mail</a>
					        	</div>
					        	<div class="svg-after">
					        		<a href="$" class="img slider-btn">Обратная связь</a>
					        	</div>
				        	</div>
				        	
					    </div>
					    
					 </div>
					@endforeach
                
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