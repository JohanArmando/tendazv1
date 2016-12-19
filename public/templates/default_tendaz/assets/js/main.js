$( document ).ready(function() {
  console.log('prueba');
    $('.default-navbar_tendaz').affix({
  offset: {
    top: 100,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})
});