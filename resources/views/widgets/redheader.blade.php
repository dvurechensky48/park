<!-- h1 -->
    <section class="red">
        <div class="container-fluido">
            <div class="row">
                <div class="col-md-9 hidden-sm hidden-xs">
                    <h1 class="all-left">
                       
                       <span class="rozseparator"> 
                            @if(!empty($arResult))
                                <?=$arResult->content['en']['name'] ?>
                            @elseif(!empty($arResult1) and empty($arResult))
                                <?=$arResult1->label ?>
                            @endif
                        </span>
                    </h1>
                </div>
                <div class="col-xs-12 hidden-lg hidden-md">
                    <h1 class="all-center">
                       <span> 
                            @if(!empty($arResult))
                                <?=$arResult->content['en']['name'] ?>
                            @elseif(!empty($arResult1) and empty($arResult))
                                <?=$arResult1->label ?>
                            @endif
                        </span>
                    </h1>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm all-right">
                    <div class="logo-circle all-center"><img src="{{ asset('img/logo.png') }}"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
<!-- end h1 -->