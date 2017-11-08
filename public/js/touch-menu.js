var body = document.body;
    var touch = -1000;
    var bg_container = document.getElementById('container-bg');
    var nav_btn = document.getElementById('nav-btn');

    body.addEventListener('touchstart', function(e){
        var x = e.changedTouches[0].pageX;
        touch = x;
    }, false)

    body.addEventListener('touchmove', function(e){
        var x = e.changedTouches[0].pageX; 
        var nav = document.getElementById('nav-toggle').checked;
        if(x < 150 && nav == false && touch+100 < x)
        {
           document.getElementById('nav-toggle').checked = true;
           bg_container.style.display = 'block';
        }
        else if(nav == true && x < screen.width - 150 && touch-100 > x)
        {
            document.getElementById('nav-toggle').checked = false;
           bg_container.style.display = 'none';
        }
        

    }, false)

    bg_container.addEventListener('click', function(){
        document.getElementById('nav-toggle').checked = false;
        bg_container.style.display = 'none';
    },false)

    nav_btn.addEventListener('click',function(){
        console.log(document.getElementById('nav-toggle').checked);

        if(document.getElementById('nav-toggle').checked == true)
        {
            document.getElementById('nav-toggle').checked = true;
            bg_container.style.display = 'none';
        }
        else if(document.getElementById('nav-toggle').checked == false)
        {
            document.getElementById('nav-toggle').checked = false;
            bg_container.style.display = 'block';
        }
        
    },false)