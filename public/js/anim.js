var slidebar = document.querySelector('.slidebar');
   
    function onmouseOut(slidebar)
    {

        var img = slidebar.querySelectorAll('.item');
         
        for(i=0;i<img.length;i++)
        {

            var left = img[i].querySelector('.text-left');
            var right = img[i].querySelector('.text-right');
            left.classList.remove('active');
            right.classList.remove('active');
            left.style.top = 0;
            right.style.top = 0;
        }
    }

    function autoHeightOff(object)
    {
        var item = object.querySelectorAll('.item');
        if(item.length > 0)
        {
            for(i=0;i<item.length;i++)
            {
                var left = item[i].querySelector('.text-left');
                var right = item[i].querySelector('.text-right');
                var separator = item[i].querySelector('.blackseparator-small');
                var description = item[i].querySelector('.description');
                
                if(left && right)
                {
                    var leftRow = left.querySelector('.row');
                    var rightRow = right.querySelector('.row');
                    leftRow.style.position = 'relative';
                    rightRow.style.position = 'relative';
                    leftRow.style.top = 0;
                    rightRow.style.top = 0;
                    leftRow.style.marginTop = 20 + 'px';
                    rightRow.style.marginTop = 20 + 'px';
                    separator.style.display = 'none';
                    description.style.display = 'none';
                }
            }
            
        }
    }
    function autoHeightOn(object)
    {
        var left = object.querySelector('.text-left');
        var right = object.querySelector('.text-right');
        var separator = object.querySelector('.blackseparator-small');
        var description = object.querySelector('.description');
                
        if(left && right)
        {
            separator.style.display = 'block';
            description.style.display = 'block';
            var leftRow = left.querySelector('.row');
            var rightRow = right.querySelector('.row');
            leftRow.style.position = 'relative';
            rightRow.style.position = 'relative';
            leftRow.style.top = '50%';
            rightRow.style.top = '50%';
            leftRow.style.marginTop = - leftRow.clientHeight/2 + 'px';
            rightRow.style.marginTop = - rightRow.clientHeight/2 + 'px';
        }
    }

    if(slidebar)
    {
        slidebar.onmouseover = function(e) 
        {
            var event = e || window.event,
                target = event.CurrentTarget || event.srcElement;
            autoHeightOff(slidebar);
            onmouseOut(slidebar);
            if (target.className == 'link') {
                target = target.parentNode;
                autoHeightOn(target);
                var left = target.querySelector('.text-left');
                var right = target.querySelector('.text-right');
                left.classList.add('active');
                right.classList.add('active');
            }
        }
        slidebar.onmouseout = function()
        {
            autoHeightOff(slidebar);
            onmouseOut(slidebar);
        }

        





            
        
    }

    var slidebar2 = document.querySelector('.slidebar-2');
    if(slidebar2)
    {
        function sledeBar2No()
        {
            var img = slidebar2.querySelectorAll('.img');
            for(i=0;i<img.length;i++)
            {
                img[i].classList.remove('active');
            }
        }
        slidebar2.onmouseover = function(e) 
        {
            var event = e || window.event,
                target = event.CurrentTarget || event.srcElement;
                sledeBar2No();
            if (target.tagName == 'A') {
                var item = target.parentNode;
                if(item)
                {
                    img = item.querySelector('.img');
                    if(img)
                    {
                        img.classList.add('active');
                    }
                }
            }
            else
            {
                sledeBar2No();
            }

        }
        slidebar2.onmouseout = function()
        {
            sledeBar2No();
        }
    }