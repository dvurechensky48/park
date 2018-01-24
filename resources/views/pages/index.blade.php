@extends('layouts.template')

@section('title')
    @if(!empty($SEO))
    <?= $SEO->content[$lang]["title"] ?>
    @endif
@endsection

@section('description')
    @if(!empty($SEO))
    <?= $SEO->content[$lang]["description"] ?>
    @endif
@endsection

@section('keywords')
    @if(!empty($SEO))
    <?= $SEO->content[$lang]["keywords"] ?>
    @endif
@endsection

@section('content')



	@widget('MainSlider')
	
    @widget('TopMenu')
    
    <!-- content -->
    <div class="container-fluid nopadding">
            <div class="col-md-6 nopadding">
                <section class="padding-2 white">
                    @widget('Information')


                </section>
                <section id="tour" class="padding-2 blue">
                    <h2 class="all-center">{{ trans('pages/index.virtual_tour') }}</h2>
                    <div class="all-center">
                        <div class="margin-top-4 circle-main"> <a class="img" href="#"><img src="img/3d-tour.png"></a> </div>
                    </div>
                    <div class="margin-top-4 all-center">
                        <a class="color-white" href="/places">{{ trans('pages/index.places') }}</a> / <a class="color-white" href="">{{ trans('pages/index.3d') }}</a>
                    </div>
                    
                </section>
                <section class="padding-2 blue">
                    <div class="container-fluid">
                        <div class="row">
                            <h2 class="all-center">{{ trans('pages/index.news') }}</h2>
                        </div>
                    </div>
                </section>
                <section class="padding-2 white">
                    @widget('News')
                </section>
                <section class="padding-2 red">
                    <h2 class="all-center">{{ trans('pages/index.personal') }}</h2>
                    @widget('Personal')
                </section>
            </div>
            <div class="col-md-6 nopadding">
                <h2 class="all-center">{{ trans('pages/index.developments') }}</h2>
                <section class="padding-2 blue">
                    @widget('Developments')
                </section>
                <section id="zan" class="padding-2 white hidden-xs hidden-sm">
                    <h2 class="all-center">{{ trans('pages/index.employment') }}</h2>
                    <div class="zan-main">
                        @widget('Employment')
                    </div>
                </section>
                <section id="gal-main" class="padding-2 blue">
                    <h2 class="all-center">{{ trans('pages/index.galery') }}</h2>
                    <div class="all-center">
                        <div class="margin-top-4 circle-main"> <a class="img" href="/galery"><img src="img/gal-main.png"></a> </div>
                    </div>
                </section>
                <section class="padding-2 white">
                    <h2 class="all-center">{{ trans('pages/index.partner') }}</h2>
                    @widget('Partner')
                </section>
            </div>
            <div class="clearfix"></div>
    </div>

    @widget('Advertising')

    <!-- end content -->
     
                    
    @widget('Modal')
  
@endsection