@extends('layouts.template')

@section('title')
    @if(!empty($SEO->content[$lang]["description"]))
    <?= $SEO->content[$lang]["title"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('description')
    @if(!empty($SEO->content[$lang]["description"]))
    <?= $SEO->content[$lang]["description"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('keywords')
    @if(!empty($SEO->content[$lang]["description"]))
    <?= $SEO->content[$lang]["keywords"] ?>
    @else
    Нижний парк
    @endif
@endsection

@section('assets')
 <script src="{{ asset('gal/unitegallery/js/jquery-11.0.min.js') }}"></script>
<script src="{{ asset('gal/unitegallery/js/unitegallery.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('gal/unitegallery/css/unite-gallery.css') }}">
<script src="{{ asset('gal/unitegallery/themes/default/ug-theme-default.js') }}"></script>
<link rel="stylesheet" href="{{ asset('gal/unitegallery/themes/default/ug-theme-default.css') }}"> 
@endsection



@section('content')
	@widget('TopMenu')
	@widget('RedHeader') 
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
                                <div class="item" style="height: 260px;overflow: hidden;">
                                    
                                        <?php if(!empty($value->image)) {?>
                                            <div class="img">
                                                <img src="{{ asset('storage/app/public/') }}/<?= $value['image'][0]->path ?><?= $value['image'][0]->name ?>_high.<?= $value->image[0]->extension ?>">
                                            </div>
                                        <?php } ?>
                                    <div class="title">
                                        <?= $value->content[$lang]['name'] ?>
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
    <section class="white">

        <div class="container-fluid">
            <div class="row">
             <?php echo $arResult->links(); ?>  
            </div>
        </div>
    </section>
    <!-- end content -->
    
@endsection 
