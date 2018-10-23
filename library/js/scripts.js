jQuery(document).ready(function($){

	/* prepend menu icon */
	$('div.menu').prepend('<div id="menu-icon">Menu</div>');

	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$("div.menu ul").slideToggle();
		$(this).toggleClass("active");
	});

	/* preloader */
	$('#load-cycle').hide();

	/* jquery cycle */
    //$('.cycle-slideshow').show();

    var gdprnotice = localStorage.getItem('gdprnotice');
    if (gdprnotice == null) {
        $('.rt_gdpr-bar').fadeIn("slow");
    }
    $('.rt_gdpr-bar button').on('click', function(e) {
        $('.rt_gdpr-bar').fadeOut("slow");
        localStorage.setItem('gdprnotice', 1);
        e.preventDefault();
    });

});
