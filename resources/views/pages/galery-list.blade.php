@extends('layouts.template')
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
			                 	<img src="{{ asset('storage/') }}/<?= $value->path ?><?= $value->name ?>.<?= $value->extension ?>">
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

	@widget('Footer')
@endsection 
