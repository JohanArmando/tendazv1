$( document ).ready(function() {

    $('.content').fadeOut();
    $('.container_loader').fadeIn();
    
});

$( window ).load(function() {
	
	function showAll() {
		   $('.content').fadeIn('slow');
    $('.container_loader').fadeOut('slow');
	}
 
    setTimeout(showAll, 1000);
});


