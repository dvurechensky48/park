
<!-- menu -->
    <div class="menu hidden-sm hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <ul class="col-lg-9">
                	@foreach($arResult as $value)
                		@if($value->slug == "/".$url[0])
                		<li><a class="active {{ $value->style }}" href="{{$value->slug}}" title="{{$value->title}}">{{ $value->label }}</a></li>
                		@else
                		<li><a class="{{ $value->style }}" href="{{$value->slug}}" title="{{$value->title}}">{{ $value->label }}</a></li>
                		@endif
					@endforeach
                </ul>
                <ul class="col-lg-3 all-right">
                    <li><a class="img" href="#"><img src="{{ asset('img/icon-head1.png') }}"></a></li>
                    <li id="search-console"><a class="img" href="#"><img src="{{ asset('img/icon-head2.png') }}"></a></li>
                    <li><a class="active" href="#">RU</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    
<!-- end menu -->

<!-- mobile menu -->
    <div class="top-abs hidden-lg hidden-md"></div>
    <div class="container hidden-lg hidden-md">
        <div class="row">
            <input type="checkbox" id="nav-toggle" hidden>
            <!-- 
            Выдвижную панель размещаете ниже
            флажка (checkbox), но не обязательно 
            непосредственно после него, например
            можно и в конце страницы
            -->
            <nav class="nav over-hidden">
                <div class="row">
                    <div class="col-xs-8">
                       
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- 
            Метка с именем `id` чекбокса в `for` атрибуте
            Символ Unicode 'TRIGRAM FOR HEAVEN' (U+2630)
            Пустой атрибут `onclick` используем для исправления бага в iOS < 6.0
            См: http://timpietrusky.com/advanced-checkbox-hack 
            -->
                <label for="nav-toggle" id="nav-btn" class="nav-toggle"></label>    
                

                <!-- 
            Здесь размещаете любую разметку,
            если это меню, то скорее всего неупорядоченный список <ul>
            -->
                
                <ul style="margin:0;"> 
                   @foreach($arResult as $value)
                        @if($value->slug == "/".$url[0])
                        <li><a class="active {{ $value->style }}" href="{{$value->slug}}" title="{{$value->title}}">{{ $value->label }}</a></li>
                        @else
                        <li><a class="{{ $value->style }}" href="{{$value->slug}}" title="{{$value->title}}">{{ $value->label }}</a></li>
                        @endif
                    @endforeach
                </ul> 

                <section>
                    <h3><span class="color-red">8 800</span> 700 55 33</h3>
                    <p class="color-black">МАУК "Нижний парк" г.Липецк, Петровский проезд, 2</p>
                </section>
            </nav>
        </div>
    </div>
    <div id="container-bg"></div>
    <!-- end mobile enu -->
