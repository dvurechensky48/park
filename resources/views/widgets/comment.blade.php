<div class="comments margin-top-4">
   <div class="comment_title"><h3><span><a class="color-ser active">{{ trans('widgets/comment.all') }}</a></span> &nbsp;<span><a class="color-ser">{{ trans('widgets/comment.write') }}</a></span></h3></div>
    
    <div class="comment_go active">
    	@if(!empty($arResult) and count($arResult) > 0)
			@foreach($arResult as $value)
			<div class="comment">
		        <div class="col-xs-6"><span class="glyphicon glyphicon-user
	"></span> <span class="name"><?= $value->name ?></span></div>
		        <div class="col-xs-6 all-right color-ser"><?= $value->day ?> <?= $value->time ?></div>
		        <div class="clearfix"></div>
		        <div class="redseparator-small"></div>
		        <div><?= $value->content ?></div>
		        <div class="margin-top-2"><a class="color-ser" >{{ trans('widgets/comment.otv') }}</a></div>
		    </div>
			@endforeach
		@else
		<div class="margin-top-4">{{ trans('widgets/comment.comment_no') }}</div>
		@endif
    </div>
     <div class="comment_go margin-top-4">
    	<form method="get">
    		<div class="margin-top-2"><input class="form" type="text" name="name" placeholder="{{ trans('widgets/comment.name') }}"></div>
    		<div class="margin-top-4"><textarea class="form name_form" type="text" name="content" placeholder="{{ trans('widgets/comment.comment') }}"></textarea></div>
    		<div class="all-right"><input type="submit" class="btn" name="subm" value="{{ trans('widgets/comment.send') }}"></div>
    	</form>
    </div>

    
</div>
<script type="text/javascript">
	var comment_title = document.querySelector('.comment_title');
	var comment_go = document.querySelectorAll('.comment_go');
	if(comment_title && comment_go.length > 0)
	{
		function commentNoActive()
		{
			for(i=0;i<comment_go.length;i++)
			{
				comment_go[i].classList.remove('active');
				comment_title.querySelectorAll('a')[i].classList.remove('active');
				
			}

		}
		comment_title.onclick = function(e) 
        {
        	var event = e || window.event,
                target = event.CurrentTarget || event.srcElement;
            if (target.tagName == 'A') {
               for(k=0;k<comment_title.querySelectorAll('a').length;k++)
               {

               		if(target == comment_title.querySelectorAll('a')[k])
               		{
               			commentNoActive();
               			comment_go[k].classList.add('active');
               			target.classList.add('active');
               		}
               		
               }
            }
        }
	}
	var comments = document.querySelector('.comments');
	if(comments)
	{
		comments.onclick = function(e)
		{
			var event = e || window.event,
                target = event.CurrentTarget || event.srcElement;
            if (target.tagName == 'A')
            {
            	var item = (target.parentNode).parentNode;
            	if(item.className == 'comment')
            	{
            		var name = item.querySelector('.name').innerHTML;
            		document.querySelector('.name_form').value += name + ', ';
            		commentNoActive();
            		document.querySelectorAll('.comment_go')[1].classList.add('active');
            		document.querySelectorAll('.comment_title a')[1].classList.add('active');
            	}
            	
            } 
		}	
	}
</script>