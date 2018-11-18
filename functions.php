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

//Change WP Emails and email address away from "WordPress" as sender
function islandQuartz_mail_name( $email ){
  return 'Long Island Quartz'; // new email name from sender.
}
add_filter( 'wp_mail_from_name', 'islandQuartz_mail_name' );
function islandQuartz_mail_from ($email ){
  return 'websales@islandquartz.com'; // new email address from sender.
}
add_filter( 'wp_mail_from', 'islandQuartz_mail_from' );

/**
 * Disable the emoji's
 */
function disable_emojis() {
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }
return $urls;
}
