@if(!empty($arResult))
<div class="menu-2 hidden-xs hidden-sm">
    <div class="container-fluid">
        <div class="row">
            <ul class="col-sm-12">
                @foreach($arResult as $value)
                @if(count($url) > 2)
                <? $link = '/employment/'.$value->slug ?>
                @else
                <? $link =  $value->slug  ?>
                @endif

                @if($url[1] == $value->slug)
                <li><a class="active" href="<?= $link ?>"><?= $value->content['en']['name'] ?></a></li>
                @else
                <li><a href="<?= $link ?>"><?= $value->content['en']['name'] ?></a></li>
                @endif
                @endforeach
                
                
            </ul>
        </div>
    </div>
</div>
@endif
 
