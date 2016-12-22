
$( document ).ready(function() {
    $('#headeraff').affix({
  offset: {
    top: 0,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})
 $('#pagepiling').pagepiling({
     direction: 'horizontal',
     anchors: ['se_container-1','about','almacenamiento','posicionamientodigital'],
    menu: '.container-menu'
 });

 var items = document.querySelectorAll('.container-menu .icon_servi');

 

for(var i = 0, l = items.length; i < l; i++) {

  items[i].style.left = (40 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";

  items[i].style.top = (40 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";

}


    $(function() {

  // Init ScrollMagic Controller
  //var scrollMagicController = new ScrollMagic.Controller();

  // Animation will be ignored and replaced by scene value in this example
  //var tween = TweenMax.to('.animation_2', 1, {
  //  opacity:0.1,
  //  top:-300
  //});

  // Create the Scene and trigger when visible
  //var scene = new ScrollMagic.Scene({
  //  triggerElement: '.aa_container-2',
  //  duration: 200,
  //    offset: 50 /* How many pixels to scroll / animate */
  //})
  //.setTween(tween)
  //.addTo(scrollMagicController);

  // Add debug indicators fixed on right side
  // scene.addIndicators();

});
});
