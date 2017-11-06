<? $item = 1; ?>
@extends('layouts.template')
@section('title')

@section('content')
	@widget('TopMenu')
	@widget('BlueHeader')

	
<!-- content -->
    <section class="white">
        <div class="container-fluid">
            <div class="row">
                <div class="slidebar-2">
				@if(!empty($arResult))
					@foreach($arResult as $value)
						@if($value->image)
							<div class="col-md-4 col-sm-6 margin-top-2">
			                    <div class="item">
									<? for($i=0;$i<count($value->image);$i++) { ?>
										<? if($value->image[$i]->extension == 'png') {?>
											<div class="img">
					                            <img src="{{ asset('storage/') }}/<?= $value['image'][$i]->path ?><?= $value['image'][$i]->name ?>.<?= $value->image[$i]->extension ?>">
					                        </div>
										<? } ?>
										<? if($value->image[$i]->extension == 'svg') {?>
											<div class="icon">
					                            <img src="{{ asset('storage/') }}/<?= $value['image'][$i]->path ?><?= $value['image'][$i]->name ?>.<?= $value->image[$i]->extension ?>">
					                        </div>
										<? } ?>
									<? } ?>
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
						<? $item = $item + 1; ?>
					@endforeach
				@endif
				<!-- Не видно на мобильниках и планшетах <div class="hidden-xs hidden-sm clearfix"></div> -->
				<div class="clearfix"></div>
				</div>
            </div>
        </div>
    </section>
    <!-- end content -->

	@widget('Footer')
@endsection