 $(document).ready(function () {
    function setVision(schema) {


        var elems = $('img,section,section,div,body,span:not(.s-c),p,a,ul,li,h1,h2,h3,h4,h5,input');
        var elems_bg = $('div:not(.invert-color),body,span:not(.s-c),p,ul,li,h1,h2,h3,h4,h5,input');
        var elems_invert = $('.popped a.active, .invert-color,input[type="submit"]');

        if (schema == 'blue') {
            var params = {'color': '#063462', 'background': 'none', 'text-shadow':'none','border-color':'#063462'};
            var params_bg = {'background-color': '#9DD1FF' };
            var params_invert = {'color': '#9DD1FF', 'background-color': '#063462','border-color': '#9DD1FF', 'outline-color':'#063462'};


        }
        if (schema == 'bw') {
            var params = {'color': 'black', 'background': 'none',  'text-shadow':'none','border-color':'black'};
            var params_bg = {'background-color': 'white' };
            var params_invert = {'color': 'white', 'background-color': 'black', 'border-color':'white', 'outline-color':'black'};

        }
        if (schema == 'wb') {
            var params = {'color': 'white', 'background': 'none', 'text-shadow':'none','border-color':'white'};
            var params_bg = {'background-color': 'black' };
            var params_invert = {'color': 'black', 'background-color': 'white', 'border-color':'black', 'outline-color':'white'};

        }
        if (schema == 'beige') {
            var params = {'color': '#4d4b43', 'background': 'none', 'text-shadow':'none','border-color':'#4d4b43'};
            var params_bg = {'background-color': '#f7f3d6' };
            var params_invert = {'color': '#f7f3d6', 'background-color': '#4d4b43',  'border-color':'#f7f3d6', 'outline-color':'#4d4b43'};

        }
        if (schema == 'brown') {
            var params = {'color': '#a9e44d', 'background': 'none',  'text-shadow':'none','border-color':'#a9e44d'};
            var params_bg = {'background-color': '#3b2716' };
            var params_invert = {'color': '#3b2716', 'background-color': '#a9e44d',  'border-color':'#3b2716', 'outline-color':'#a9e44d'};

        }
        /*РќР°СЃС‚СЂРѕР№РєРё РґР»СЏ РєРѕРЅРєСЂРµС‚РЅРѕРіРѕ СЃР°Р№С‚Р°*/
        $('#header, .top-menu-wrapper, .top-menu-wrapper ul, .top-menu-wrapper ul li, .info-block.share .headline').css({'height':'auto'});
        $('#header').css({'border-bottom': '3px solid', 'padding-bottom':'15px' });
        $('.top-menu-wrapper').css({'z-index': '999', 'position': 'relative','padding-bottom':'15px',  'margin-bottom':'15px','float':'none', 'border-bottom': '3px solid' });

        $('.top-menu-wrapper li').css({'border': 'none', 'margin-bottom': '5px'});
        $('.top-menu-wrapper>ul>li> a').css({'border': '1px solid', 'padding': '10px ','border-radius': '3px','margin-right': '5px'});
        $('.top-menu-wrapper').append('<div style="clear: both;"></div>');
        $('.logo-wrapper').css( {   'position': 'relative','top': '0', 'left': '0', 'width': '38%', 'display': 'inline-block', 'height': 'auto'});
        $('.contacts-wrapper').css( {   'position': 'relative','top': '0', 'left': '0', 'width': '58%', 'display': 'inline-block', 'float': 'right'});
        $('.name-wrapper').css( {   'position': 'relative','top': '0', 'left': '0', 'width': '58%', 'display': 'inline-block',  'float': 'right'});
        $('.name-wrapper').addClass('h2');
        $('#header').append('<div style="clear: both;"></div>');
        $('.top-menu-wrapper ul li ul').addClass('invert-color');
        $('.top-menu-wrapper ul li ul').css({'padding': '10px', 'width': '300px', 'top':'auto'});
        $('.top-menu-wrapper ul li ul li a').css({'padding': '5px 10px' });

        $('.headline, .headline a').addClass('invert-color');
        $('.central-infoblock .headline').css({'padding':'5px'});
        $('.central-infoblock .headline a').css({'padding-right':'5px'});
        $('.info-block .headline,  .left-info .headline').css({'text-align':'center','padding':'5px'});
        $('.left-menu li a').css({'border': '1px solid', 'padding': '10px ','border-radius': '3px', 'display': 'block'});
        $('.btn').css({'border': '3px solid','box-shadow':'none'});
        $('.page-text').css({'border-bottom': '3px solid'});
        $('.post-headline a').css({'text-decoration':'underline'});
        $('.page-text.post').css({'padding':'15px', 'border': '3px solid'});
        $('.counter-wrapper, .botmenu, .soc-block').css({'display':'none'});
        $('body').css({'word-wrap': 'break-word'});
        $('.blocklist, .staff-list').css({'width':'100%','padding':'12px', 'border':'3px solid','margin-bottom':'15px' });
        $('.blocklist .block-text').css({'float':'none','width':'auto', 'padding-left':'5px'});
        $('.left_col .news .image, .left_col .info-post-img').css({'float':'none'});
        $('.search-form-index input[type="submit"]').val('РќР°Р№С‚Рё');
        $('.search-form-index').css({'position':'relative','top':'0', 'width': '45%', 'float': 'right', 'display': 'inline-block', 'text-align':'right'});




        /*РќР°СЃС‚СЂРѕР№РєРё РґР»СЏ РєРѕРЅРєСЂРµС‚РЅРѕРіРѕ СЃР°Р№С‚Р°*/
        //console.log($('.headline').hasClass('invert-color'));
        //alert('ghghg');

        //console.log('ok2');
        $('.spec_vision_color a').each(function () {
            if($(this).attr('title')!= schema){
                $(this).removeClass('active');
            }else{
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
            }
        });
        $('.spec_vision_color_two a').each(function () {
            if($(this).attr('title')!= schema){
                $(this).removeClass('active-color');
            }else{
                if(!$(this).hasClass('active-color')){
                    $(this).addClass('active-color')
                }
            }
        });

        elems.css(params);
        elems_bg.css(params_bg);
        elems_invert.css(params_invert);







    }

    function setFontsize(size) {
        var elems = $('div:not(#panel_spec_vision):not(.s-c),body:not(.s-c),span:not(.s-c),p:not(s-c),a:not(.s-c),ul,li,input');
        elems.css('font-size', size + 'px');
        $('.spec_vision_size a').each(function () {
            if($(this).attr('title')!= size){
                $(this).removeClass('active');
            }else{
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
            }
        });

    }
    function setFontfamily(family) {
        var elems = $('div:not(#panel_spec_vision):not(.s-c),body:not(.s-c),span:not(.s-c),p:not(s-c),a:not(.s-c),ul,li, input');
        if(family == 'Arial'){
            elems.css('font-family', 'Arial, sans-serif');
        }else{
            elems.css('font-family', '"Times New roman", serif');
        }

        $('.spec_vision_font_family a').each(function () {
            if($(this).attr('title')!= family){
                $(this).removeClass('active');
            }else{
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
            }
        });
        var cook = $.cookie('theme');
        setVision(cook);

    }

    function setLetter_spacing(letter) {
        var elems = $('div:not(#panel_spec_vision):not(.s-c),body:not(.s-c),span:not(.s-c),p:not(s-c),a:not(.s-c),ul,li,input');
        elems.css('letter-spacing', letter + 'px');
        $('.spec_vision_letter_spacing a').each(function () {
            if($(this).attr('title')!= letter){
                $(this).removeClass('active');
            }else{
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
            }
        });
        var cook = $.cookie('theme');
        setVision(cook);

    }

    var panel =
        '<style>' +
        '*{line-height: normal !important}'+
        //'body{margin-top: 60px}'+
        'h1, .h1{font-size: 2em !important}'+
        'h2, .h2{font-size: 1.5em !important}'+
        'h3, .h3{font-size: 1.17em !important}'+
        '#panel_spec_vision{background-color: transparent;text-align:center;position: relative;z-index: 99999}'+
        '.gost{display: none;}'+
        '#dop_panel_spec_vision{height: 60px;font-size: 18px !important;position: fixed;top: 0;left: 0;width: 100%;z-index: 1000;margin: 0 auto;border-bottom: 5px solid #DCDCDC;}'+
        '#dop_panel_spec_vision>div a {cursor:pointer;}' +
        '#dop_panel_spec_vision {display:none;}' +
        '.spec_vision_color{padding-top: 13px; padding-left: 20px; padding-right: 20px;}'+
        '.spec_vision_color a{transition: all 0.3s; border-radius: 5px; display:inline-block;     text-decoration: none; padding-left: 12px; padding-right: 12px; padding-top: 4px; padding-bottom: 6px;  text-transform: uppercase;  margin-left: 5px; border: 1px solid;}'+
        '.spec_vision_bw, .sv_bw {color:black!important;background-color:white!important; border-bottom-color: black;}' +
        '.spec_vision_wb,.sv_wb {color:white!important;background-color:black!important; border-color: white;}' +
        '.spec_vision_blue, .sv_blue {color:#063462!important;background-color:#9DD1FF!important; border-color: #063462 !important;}' +
        '.spec_vision_beige, .sv_beige{    background-color: #f7f3d6 !important; color: #4d4b43 !important; border-color: #4d4b43 !important;}'+
        '.spec_vision_brown, .sv_brown{    background-color: #3b2716 !important; color: #a9e44d !important; border-color: #a9e44d !important;}'+
        '.spec_vision_color a.active{    transform: scale(1.2);}'+
        '#dop_panel_spec_vision, #dop_panel_spec_vision div {display:inline-block; margin-right:15px;}' +
        '.spec_vision_size{    padding-top: 5px; padding-left: 25px; padding-right: 25px;}'+
        '.spec_vision_size a{    text-decoration: none; padding-left: 10px; padding-right: 10px; display: inline; position: relative; text-transform: uppercase;}'+
        '.spec_vision_size a:nth-child(1){font-size:16px!important; font-size: 16px!important; padding: 10px 15px;}' +
        '.spec_vision_size a:nth-child(2){font-size:24px!important; padding: 6px 13px; position: relative; top: 2px;}' +
        '.spec_vision_size a:nth-child(3){font-size:35px!important; position: relative;top: 6px;}' +
        '.spec_vision_img{padding-top: 13px; padding-left: 20px; padding-right: 20px;}'+
        '.spec_vision_img a{text-decoration: none; padding: 6px 14px;  text-transform: uppercase; margin-left: 5px;}'+



        '#dop_panel_spec_vision a.active{border-radius: 5px; border: 1px solid #ccc;  -moz-transition: all 0.3s;  -webkit-transition: all 0.3s; transition: all 0.3s;font-size: 20px; font-weight: bold;position: relative; width: auto; height: 100%;  }'+
        '.popped{display: none; border: 2px solid; position: absolute; right: 0; top: 65px; width: 883px; z-index: 100; text-align: left;     padding: 13px 21px 23px 21px;     font-size: 20px; font-weight: bold;}'+
        '#dop_panel_spec_vision>div.popped{display: none}'+
        '.popped div{display: block!important;}'+
        '.sv-title{text-transform: uppercase; margin: 8px 0px 15px -10px; padding: 5px 5px 5px 8px;     font-size: 44px;}'+
        '.popped a{    padding: 2px 4px; border: 1px solid #063462;     border-radius: 3px; margin-left: 5px; margin-bottom: 5px;}'+
        '.popped a.active{background-color: #000;}'+
        '.spec_vision_font_family{margin-bottom: 15px;}'+
        '.spec_vision_color a{width:auto !important; height:auto !important;}'+
        '.spec_vision_color_two a{display: block; text-decoration: none; padding: 10px 22px;}'+
        '.spec_vision_color_two a span{display: none}'+
        '.spec_vision_color_two a.active-color span{ display: inline; margin-right: 5px;}'+
        '.spec_vision_buttons{    font-size: 22px; margin-top: 35px; padding: 5px 0; text-align: right;}'+
        '.spec_vision_buttons a{font-weight: normal; border: 4px solid #063462 ; text-decoration: none; color: #9dd1ff; background: #063462 ; margin-left: 28px; outline: solid 6px #063462; padding: 5px 10px;}'+
        '.gost{    padding: 10px; border: 1px solid #fff; margin-bottom: 10px; margin-top:20px; text-align: center;}'+
        '</style>';
    panel +=
        '<div   id="panel_spec_vision">' +
        '<div style="display: none" id="dop_panel_spec_vision" class="s-c">' +
        '<div class="spec_vision_size s-c">Размер шрифта'+
        ' <a class="s-c active" title="16">А</a>'+
        '<a class="s-c" title="24" >А</a>'+
        '<a class="s-c" title="35" >А</a>'+
        '</div>' +
        '<div class="spec_vision_color s-c">Цвет сайта'+
        '<a class="spec_vision_bw s-c s-c_c active" title="bw">Ц</a>'+
        '<a class="spec_vision_wb s-c s-c_c" title="wb">Ц</a>'+
        '<a class="spec_vision_blue s-c s-c_c" title="blue">Ц</a>'+
        '<a class="spec_vision_beige s-c s-c_c" title="beige">Ц</a>'+
        '<a class="spec_vision_brown s-c s-c_c" title="brown">Ц</a>'+
        '</div>' +
        '<div class="spec_vision_img s-c">Изображения'+
        // '<input type="checkbox" checked="checked">'+
        '<a class="s-c" title="show">Да</a>'+
        '<a class="s-c" title="hide">Нет</a>'+
        '</div>' +
        '<div class="spec_vision_param_btn s-c"><a class="s-c">Настройка</a></div>'+
        '<div class="popped s-c">'+
        '<div class="s-c sv-title">Параметры шрифта</div>'+
        '<div class="spec_vision_font_family s-c">'+
        'Выберите шрифт: '+
        '<a class="s-c spec_vision_sans-serif active" title="Arial">Arial</a>'+
        '<a class="s-c spec_vision_serif" title="Times New Roman">Times New Roman</a>'+
        '</div>'+
        '<div class="s-c spec_vision_letter_spacing">'+
        'Интервал между символами:'+
        '<a class="s-c active" title="0">Стандартный</a>'+
        '<a class="s-c" title="2">Средний</a>'+
        '<a class="s-c" title="5">Большой</a>'+
        '</div>' +
        '<div class="s-c sv-title">Выбор цветовой схемы:</div>'+
        '<div class="s-c spec_vision_color_two">'+
        '<a class="s-c sv_wb active-color" title="wb"><span class="s-c">-</span>Черным по белому</a>'+
        '<a class="s-c sv_bw s-c_c " title="bw"><span class="s-c">-</span>Белым по черному</a>'+
        '<a class="s-c sv_blue s-c_c" title="blue"><span class="s-c">-</span>Темно синим по голубому</a>'+
        '<a class="s-c sv_beige s-c_c" title="beige"><span class="s-c">-</span>Коричневым по белому</a>'+
        '<a class="s-c sv_brown s-c_c" title="brown"><span class="s-c">-</span>Зеленым по коричневому</a>'+
        '</div>'+
        '<div class="spec_vision_buttons s-c">'+
        '<a  id="spec_vision_standart" class="spec_vision_btn s-c invert-color">Вернуться к стандартным настройкам</a>'+
        '<a  id="spec_vision_close_panel" class="spec_vision_btn s-c invert-color">Закрыть панель</a>'+
        '</div>'+
        '</div>'+
        '</div>' +
        '<div class="gost s-c invert-color">Вы просматриваете сайт в версии для слабовидящих по ГОСТ Р 52872-2012. '+
        '<a id="button_no_vision" class="s-c invert-color " style="cursor:pointer;"> Вернуться к обычной версии </a>'+
        '</div>'+
        '</div>';
    $('body').prepend(panel);
    $('#button_spec_vision').bind('click', function () {
        var theme;
        if ($.cookie('theme') !== 'null') {
            theme = $.cookie('theme');
        } else {
            theme = 'bw';
        }

        if(document.querySelectorAll('#owl-main .item').length > 0)
        {
            for(k=0;k<document.querySelectorAll('#owl-main .item').length;k++)
            {
                document.querySelectorAll('#owl-main .item')[k].classList.remove('active');
                document.querySelectorAll('#owl-main .item .img img')[k].style.visibility = 'hidden';
                console.log(k);
            }        
        }


        

        setVision('bw');
        setVision('bw');//РќРµ СѓР±РёСЂР°С‚СЊ РІС‚РѕСЂРѕР№ РІС‹Р·РѕРІ С„СѓРЅРєС†РёРё
        setFontsize(16);
        $.cookie('theme', null, {path: '/'});
        $.cookie('theme', theme, {path: '/'});
        $(this).hide();
        showImg('show');
        $('body').css({'margin-top':'60px'});
        $('#button_no_vision').show();
        $('#dop_panel_spec_vision').show();
        $('.gost').slideDown("slow");
    });
    $('.spec_vision_color>a, .spec_vision_color_two>a').bind('click', function () {
        var theme = $(this).attr('title');
        setVision(theme);
        $.cookie('theme', null, {path: '/'});
        $.cookie('theme', theme, {path: '/'});
    });
    $('.spec_vision_size>a').bind('click', function () {
        var size = $(this).attr('title');
        setFontsize(size);
        $.cookie('size', null, {path: '/'});
        $.cookie('size', size, {path: '/'});
    });
    $('.spec_vision_letter_spacing>a').bind('click', function () {
        var letter = $(this).attr('title');
        setLetter_spacing(letter);
        $.cookie('letter', null, {path: '/'});
        $.cookie('letter', letter, {path: '/'});
    });
    $('.spec_vision_font_family a').bind('click', function () {
        var family = $(this).attr('title');
        setFontfamily(family);
        $.cookie('family', null, {path: '/'});
        $.cookie('family', family, {path: '/'});
    });
    function showImg(show) {
        if (show == 'hide') {
            $('img').hide();
            $('iframe').css('display', 'none');
        } else {
            $('img').show();
            $('iframe').css('display', 'block');
        }
        $('.spec_vision_img>a').each(function () {
            if($(this).attr('title')!= show){
                $(this).removeClass('active');
            }else{
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
            }
        });
    }



    $('.spec_vision_img>a').bind('click', function () {

        showImg($(this).attr('title'));
        $.cookie('img', null, {path: '/'});
        $.cookie('img', $(this).attr('title'), {path: '/'});

    });
    $('#button_no_vision').bind('click', function () {
        $('body').css({'margin-top':'60px'});
        
        $.cookie('theme', null, {path: '/'});
        document.location.href = location.href;
    });
    $('.spec_vision_param_btn a').bind('click',function () {
        if($('.popped').css('display') != 'none'){
            $('.popped').slideUp("slow");
        }else{
            $('.popped').slideDown("slow");

        }
    });
    $('#spec_vision_close_panel').bind('click',function () {
        $('.popped').slideUp("slow");
    });
    $('#spec_vision_standart').bind('click',function () {
        setVision('bw');
        $.cookie('theme', null, {path: '/'});
        $.cookie('theme', 'bw', {path: '/'});

        setFontsize('16');
        $.cookie('size', null, {path: '/'});
        $.cookie('size', '16', {path: '/'});

        setFontfamily('Arial');
        $.cookie('family', null, {path: '/'});
        $.cookie('family', 'Arial', {path: '/'});

        setLetter_spacing('0');
        $.cookie('letter', null, {path: '/'});
        $.cookie('letter', '0', {path: '/'});


        showImg('show');
        $.cookie('img', null, {path: '/'});
        $.cookie('img', 'show', {path: '/'});
    });
    function main() {
        if ($.cookie('theme')) {
            var cook = $.cookie('theme');
        } else {
            var cook = 'null';
        }
        var size = $.cookie('size');
        var img = $.cookie('img');
        var family = $.cookie('family');
        var letter = $.cookie('letter');
        if (cook !== 'null') {
            setVision(cook);
            setFontsize(size);
            setFontfamily(family);
            setLetter_spacing(letter);
            showImg(img);
            $('#button_spec_vision').hide();
            $('#dop_panel_spec_vision').show();
            $('.gost').slideDown("slow");
            $('#button_no_vision').show();
            $('body').css({'margin-top':'60px'});

        }
    }

    main();
}); 
