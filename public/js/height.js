function alignment(object,target,overflow)
{
	if(object && target.length > 0)
	{
		
		heightObject = object.clientHeight;
		for(i=0;i<target.length;i++)
		{
			target[i].style.height = heightObject + 'px';
			if(overflow == true)
			{
				target[i].style.overflow = 'auto';
				target[i].style.overflowX = 'hidden';
			}

		}
		return true;
	}
	else
	{

		return false;
	}
}

function alignment2(object,target,overflow)
{
	if(object.length > 0)
	{
		maxHeight = 0;
		objectMain = '';
		for(i=0;i<object.length;i++)
		{
			height = object[i].clientHeight;
			if(maxHeight < height)
			{
				objectMain = object[i];
				maxHeight = height;
			}
		}
		alignment(objectMain,target,overflow);
	}
	else
	{
		alignment(object,target,overflow);
	}
}

function autoMargin(object,position)
{
	if(object.length > 0)
	{
		for(i=0;i<object.length;i++)
		{
			height = object[i].clientHeight;
			if(position == 'relative')
			{
				object[i].style.position = 'relative';
			}
			else if(position == 'absolute')
			{
				object[i].style.position = 'absolute';
			}
			object[i].style.top = 50 + '%';
			object[i].style.marginTop = -height + 'px';
		}
	}
	else if(!object || object.length == 0)
	{
		return false;
	}
	else
	{
		height = object.clientHeight;
		if(position == 'relative')
		{
			object.style.position = 'relative';
		}
		else if(position == 'absolute')
		{
			object.style.position = 'absolute';
		}
		object.style.top = 50 + '%';
		object.style.marginTop = -height + 'px';
	}
}