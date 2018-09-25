var $ = jQuery.noConflict();

	
    $('.dropdown-toggle').removeAttr('title');
    $('.nav-link').removeAttr('title');
    $('.dropdown').on('show.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });
    $('.dropdown').on('hide.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    //Inview 
    inView('#diamond')
    .on('enter', doSomething)
    .on('exit', el => {
        el.style.opacity = 0.5;
    });

var $window = $(window);

function checkWidth() {
    if ($window.width() < 768) {
        
    };
    if ($window.width() >= 768) {
        
    };
};
checkWidth();
$(window).resize(checkWidth);
