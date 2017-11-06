<!-- menu -->
    <div class="menu">
        <div class="container-fluid">
            <div class="row">
                <ul class="col-lg-9">
                	@foreach($arResult as $value)
                		@if($value->slug == $url)
                		<li><a class="active" href="{{$value->slug}}" title="{{$value->title}}">{{ $value->label }}</a></li>
                		@else
                		<li><a href="{{$value->slug}}" title="{{$value->title}}">{{ $value->label }}</a></li>
                		@endif
					@endforeach
                </ul>
                <ul class="col-lg-3 all-right">
                    <li><a class="img" href="#"><img src="img/icon-head1.png"></a></li>
                    <li><a class="img" href="#"><img src="img/icon-head2.png"></a></li>
                    <li><a class="active" href="#">RU</a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- end menu -->
