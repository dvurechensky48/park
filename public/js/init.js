  $(document).ready(function() {
  $("#owl-main").owlCarousel(
  {
    items: 1,
    margin: 10,
    itemsMobile : [479,1],
    itemsTablet : [768,1],
    itemsDesktopSmall : [979,1],
    itemsDesktop :  [1199,1],
    navigation : true,
    navigationText : ["<",">"],
    dots: false,
 
  }
    );
});
  $(document).ready(function() {
  $("#owl-example").owlCarousel(
  {
    items: 1,
    margin: 10,
    itemsMobile : [479,1],
    itemsTablet : [768,1],
    itemsDesktopSmall : [979,1],
    itemsDesktop :  [1199,1],
    navigation : true,
    navigationText : ["<",">"],
    dots: false,
  }
    );
});


  alignment2(document.querySelectorAll('.height-object'),document.querySelectorAll('.height-target'));
  autoMargin(document.querySelectorAll('.fio'),'relative');