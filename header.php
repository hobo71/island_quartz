<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-md fixed-top">
<a class="navbar-brand text-white" href="<?php echo get_home_url(); ?>"><span class="navbar-brand mb-0 h1"><?php echo get_bloginfo('name'); ?></span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars fa-fw fa-2x text-white"></i></button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<?php wp_nav_menu( array(
'theme_location'    => 'top-navigation',
'depth'             => 2,
'container'         => '',
'container_class'   => '',
'container_id'      => '',
'menu_class'        => 'navbar-nav',
'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
'walker'            => new WP_Bootstrap_Navwalker(),
)); ?>
</div>
</nav>
<div class="clearfix"></div>
