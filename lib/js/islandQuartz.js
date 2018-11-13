var $ = jQuery.noConflict();

	
    $('.dropdown-toggle').removeAttr('title');
    $('.nav-link').removeAttr('title');
    $('.single_add_to_cart_button').removeClass('single_add_to_cart_button button btn alt').addClass('btn btn-success btn-sm text-uppercase pr-4 pl-4');
    $('.product_meta').addClass('alert alert-dark');
    $('.add_to_cart_button').removeClass('button product_type_variable add_to_cart_button').addClass('btn btn-info');
    $('.checkout-button').removeClass('button alt wc-forward').addClass('btn btn-success text-uppercase');
    $('.wc-forward').removeClass('button').addClass('btn btn-primary float-right');
    $('.col-1').addClass('noClass').removeClass('col-1');
    $('.col-2').addClass('noClass').removeClass('col-2');
    $('#billing_first_name_field, #account_username_field, #createaccount, #shipping_postcode_field, #shipping_state_field, #shipping_city_field, #shipping_address_1_field, #shipping_address_2_field, #account_password_field, #shipping_country_field, #billing_last_name_field, #billing_company_field, #shipping_company_field, #billing_country_field, #billing_address_1_field, #billing_address_2_field, #billing_city_field, #billing_state_field, #billing_postcode_field, #billing_phone_field, #billing_email_field, #order_comments_field, #shipping_first_name_field, #shipping_last_name_field').addClass('form-group').removeClass('form-row form-row-first form-row-last');
    $('#billing_first_name, #billing_last_name, #shipping_city, #shipping_postcode, #shipping_state, #account_username, #shipping_address_1, #shipping_address_2, #account_password, #shipping_country, #billing_company, #billing_country, #shipping_company, #billing_address_1, #billing_address_2, #billing_city, #billing_state, #billing_postcode, #billing_phone, #billing_email, #order_comments, #shipping_first_name, #shipping_last_name').addClass('form-control');
    $('.required').addClass('text-danger');
    $('.edit').addClass('btn btn-success btn-sm');
    $('.woocommerce-shipping-fields').addClass('alert alert-dark');
    $('.woocommerce-account-fields').addClass('alert alert-primary');
    $('#ship-to-different-address-checkbox').addClass('mr-2');
    $('#leftFooter, #middleFooter').find('li').addClass('liq-footer-item');
    $('.order-total').addClass('table-success');
    $('.price').addClass('alert alert-success shadow');

    $(window).load(function() {
        $("#preloader").fadeOut("slow");
	});
  
var $window = $(window);

function checkWidth() {
    if ($window.width() < 768) {
        $('#about').removeClass('display-4').addClass('display-5');
    };
    if ($window.width() >= 768) {
        $('#about').removeClass('display-5').addClass('display-4');
    };
};
checkWidth();
$(window).resize(checkWidth);
