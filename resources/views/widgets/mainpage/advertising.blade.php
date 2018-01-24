@if(empty(!$arResult))
	<section id="parters" class="">
	    <div class="container-fluid">
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<div class="row">
	    				<?php $sum = 1; ?>
		                @foreach($arResult as $value)
							@if(!empty($value->image))
								<div class="col-md-2">
				                    <a href="<?= $value->content[$lang]['link'] ?>"  target="_blank" class="img opacity">
				                        <abbr data-tooltip="<?= $value->content[$lang]['body'] ?>">
				                        	<img width="100%" src="{{ asset('storage/app/public/') }}/<?= $value->image[0]->path ?><?= $value->image[0]->name ?>.<?= $value->image[0]->extension ?>" class="img-responsive img-thumbnail">
				                        </abbr>
									</a>
				                </div>
							@endif
							
			                @if($sum%6 == 0)
			                	<div class="clearfix"></div>
			                	<div class="margin-top-3"></div>
			                @endif
			                <?php $sum = $sum + 1; ?>
		                @endforeach
					</div>
	    		</div>
	    	</div>
	    </div>
	</section> 
@endif

