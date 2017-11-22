@extends('layouts.template')

@section('title')
    @if(!empty($SEO))
    <?= $SEO->content["en"]["title"] ?>
    @endif
@endsection

@section('description')
    @if(!empty($SEO))
    <?= $SEO->content["en"]["description"] ?>
    @endif
@endsection

@section('keywords')
    @if(!empty($SEO))
    <?= $SEO->content["en"]["keywords"] ?>
    @endif
@endsection

@section('content')
	@widget('TopMenu')
	@widget('BlueHeader') 

	@widget('MenuEmployment')

    
    <!-- content -->
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                <div class="slidebar-2">
                @if(!empty($arResult))
                    <?php $item = 1; ?>
                    @foreach($arResult as $value)
                        @if($value->image)
                            <div class="col-md-4 col-sm-6 margin-top-2">
                                <div class="item">
                                   @if(!empty($value->image))
                                    <div class="img">
                                        <img src="{{ asset('storage/app/public/') }}/<?= $value['image'][0]->path ?><?= $value['image'][0]->name ?>.<?= $value->image[0]->extension ?>">
                                    </div>
                                    @else
                                    <div class="img">
                                         <img width="100%" src="http://www.iakr.ru/iTDGh/KorTaxcpwtdhmjO">
                                    </div>
                                   
                                    @endif
                                    <div class="title">
                                        <?= $value->content['en']['name'] ?>
                                    </div>
                                    <a href="<?= $_SERVER["REQUEST_URI"] ?>/<?= $value->slug ?>"></a>
                                </div>
                            </div>
                            @if($item % 3 == 0)
                            <div class="hidden-xs hidden-sm clearfix"></div>
                            @endif
                            @if($item % 2 == 0)
                            <div class="hidden-lg hidden-md clearfix"></div>
                            @endif
                        @endif
                        <?php $item = $item + 1; ?>
                    @endforeach
                @endif
                <!-- Не видно на мобильниках и планшетах <div class="hidden-xs hidden-sm clearfix"></div> -->
                <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->
    

<!-- end content -->

	@widget('Footer')
@endsection