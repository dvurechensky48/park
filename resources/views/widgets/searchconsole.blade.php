<section id="search-console-box" class="blue color-white">
	<div>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-sm-offset-2 col-sm-8">
	                <form action="/search">
	                    <div class="row">
	                    	<h2 class="redseparator all-center">Поиск по сайту</h2>
	                        <div class="margin-top-4">
		                        <div class="col-sm-10 nopadding"><input class="console" type="text" name="q" placeholder="Введите запрос"></div>
		                        <div class="col-sm-2 nopadding"><input class="btn" value="Найти" type="submit"></div>	
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div> 	
</section>

 <script type="text/javascript">
    //search console
    var search = document.getElementById('search-console');
    var searchBox = document.getElementById('search-console-box');
    if(search && searchBox)
    {
        search.onclick = function()
        {
        	$("#search-console-box").slideToggle("slow");
        	document.body.style.overflow = 'hidden';
        	document.documentElement.style.overflow = 'hidden';
        }
        searchBox.onclick = function(e)
        {
        	var event = e || window.event,
            target = event.CurrentTarget || event.srcElement;
            if(target.className == 'row')
            {
            	searchBox.style.display = 'none';
	        	document.body.style.overflow = 'auto';
	        	document.documentElement.style.overflow = 'auto';
	        	document.body.style.overflowX = 'hidden';
	        	document.documentElement.style.overflowX = 'hidden';
            }
        	
        }
    }
</script>