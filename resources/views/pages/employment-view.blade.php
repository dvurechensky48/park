@extends('layouts.template')

@section('title')
    @if(!empty($arResult->content[$lang]["description"]))
    <?= $arResult->content[$lang]["title"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('description')
    @if(!empty($arResult->content[$lang]["description"]))
    <?= $arResult->content[$lang]["description"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('keywords')
    @if(!empty($arResult->content[$lang]["description"]))
    <?= $arResult->content[$lang]["keywords"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('content')
	@widget('TopMenu')
	@widget('BlueHeader') 

	@widget('MenuEmployment')

    @if(!empty($arResult))

   <section class="red hidden-xs hidden-sm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    <h2><?= $arResult->content[$lang]["article-title"] ?></h2>
                </div>
                <div class="col-xs-6"></div>
                <div class="col-xs-3 all-right">
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

	<!-- content -->
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                <p><?= $arResult->content[$lang]["body"] ?></p>
                
                   
                @if(count($arResult->image) > 0)
                   
                    @for($i=0;$i < count($arResult->image);$i++)
                        <div class="img">
                            <img style="min-width: auto;" src="{{ asset('storage/app/public/') }}/<?= $arResult->image[$i]->path ?><?= $arResult->image[$i]->name ?>.<?= $arResult->image[$i]->extension ?>">
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </section>
     @endif
    
    @widget('DevelopmentsFooter')

<!-- end content -->

@endsection