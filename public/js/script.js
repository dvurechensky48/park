window.onload = function()
	{
		document.body.style.filter = 'none';
		alignment(document.getElementById('height-object'),document.querySelectorAll('.height-target'),true);
		if(document.querySelectorAll('.svg-red').length > 0)
		{
			var svgRed = document.querySelectorAll('.svg-red');
			for(i=0;i<svgRed.length;i++)
			{
				var path = svgRed[i].contentDocument.querySelectorAll('path');
				for(k=0;k<path.length;k++)
				{
					path[k].style.fill = '#b77379';
				}
			}
		}
	}