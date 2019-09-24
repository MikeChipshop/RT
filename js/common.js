if (navigator.serviceWorker.controller) {

} else {
    navigator.serviceWorker.register('service-worker.js', {
        scope: './'
    }).then(function(reg) {

    });
}



jQuery(document).ready(function($){
	$('#menu-icon').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('div.menu ul').slideToggle();

	});

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


