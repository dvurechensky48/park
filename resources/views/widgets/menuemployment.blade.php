@if(!empty($arResult))
<div class="menu-2 hidden-xs hidden-sm">
    <div class="container-fluid">
        <div class="row">
            <ul class="col-sm-12">
                @foreach($arResult as $value)
                @if($url == $value->slug)
                <li><a class="active" href="<?= $value->slug ?>"><?= $value->content['en']['name'] ?></a></li>
                @else
                <li><a href="<?= $value->slug ?>"><?= $value->content['en']['name'] ?></a></li>
                @endif
                @endforeach
                
                
            </ul>
        </div>
    </div>
</div>
@endif
 
