var $ = jQuery.noConflict();

	
    $('.dropdown-toggle').removeAttr('title');
    $('.nav-link').removeAttr('title');
    $('.single_add_to_cart_button').removeClass('single_add_to_cart_button button btn alt').addClass('btn btn-success btn-sm text-uppercase pr-4 pl-4');
    $('.woocommerce-Price-amount').addClass('alert alert-success shadow d-block h2');
    $('.product_meta').addClass('alert alert-dark');
    $('.add_to_cart_button').removeClass('button product_type_variable add_to_cart_button').addClass('btn btn-info');
    $('.product-price span').removeClass('alert-success shadow d-block h2');
    $('.product-subtotal span').removeClass('alert-success shadow d-block h2');
    $('.cart-subtotal span').removeClass('alert-success shadow d-block');
    $('.checkout-button').removeClass('button alt wc-forward').addClass('btn btn-success text-uppercase');
    $('.wc-forward').removeClass('button').addClass('btn btn-primary float-right');

var $window = $(window);

function checkWidth() {
    if ($window.width() < 768) {
        
    };
    if ($window.width() >= 768) {
        
    };
};
checkWidth();
$(window).resize(checkWidth);
