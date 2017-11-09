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
	@widget('RedHeader') 
   <!-- content -->
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                 <div class="col-sm-4">
                     <div class="slidebar-2 height-target">
                         @widget('GalerySlidebar') 
                     </div>
                 </div>


                 <div class="col-sm-8" id="height-object">
                     

                     <div id="owl-example" class="owl-carousel">
                         @if(!empty($arResult))
                            @foreach($arResult->image as $value)
                            <div class="gallery">
                                <img class="lazyload" src="#" data-src="{{ asset('storage/') }}/<?= $value->path ?><?= $value->name ?>.<?= $value->extension ?>">
                                <div class="all-center loader">
                                    <img style="margin-top:5%;width:50px;min-width:auto;" src="{{ asset('img/load.gif') }}">
                                    <div>Загрузка...</div>
                                </div>
                            </div>
                            
                            @endforeach
                         @endif
                     </div>
                 </div>
                 <div class="clearfix"></div>
            </div>
        </div>
        
    </section>
    <!-- end content -->
    <script type="text/javascript">
        window.addEventListener("load", function(event) {
        lazyload();
    });

    </script>
    @widget('Footer')
@endsection 
