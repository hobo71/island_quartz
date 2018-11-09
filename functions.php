<?php 

register_sidebar(array(
    'name' => __( 'Left Footer' , 'island_quartz' ),
    'id' => 'island_quartz_footer',
    'description' => __( 'Footer Left' , 'island_quartz' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h5 class="text-white mb-3"><u>',
    'after_title' => '</u></h5>'
));
register_sidebar(array(
    'name' => __( 'Right Footer' , 'island_quartz' ),
    'id' => 'island_quartz_footer_right',
    'description' => __( 'Footer Right' , 'island_quartz' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h5 class="text-white mb-3"><u>',
    'after_title' => '</u></h5>'
));
// WP Fun-Ctions
function enqueue_liq_scripts() {
	wp_enqueue_script( 'ajax-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'liq-js' , get_template_directory_uri() . '/lib/js/islandQuartz.js', array('jquery'), null, true);
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/js/all.js', false, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_liq_scripts');

function enqueue_liq_styles() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_liq_styles');

//Title tag support
add_theme_support( 'title-tag' );

//Remove attribute from javascript url's 
add_action('wp_loaded', 'prefix_output_buffer_start');
function prefix_output_buffer_start() { 
    ob_start("prefix_output_callback"); 
}
add_action('shutdown', 'prefix_output_buffer_end');
function prefix_output_buffer_end() { 
    ob_end_flush(); 
}
function prefix_output_callback($buffer) {
    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}

//Hide admin bar from front of site
show_admin_bar(false);

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

// add tag support to pages
function tags_support_all()
{
    register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query)
{
    if ($wp_query->get('tag'))
        $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

// Register Nav Menus
register_nav_menus(array(
    $location => $description
));

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'top-navigation' => __( 'Main Menu', 'island_quartz' ),
));


