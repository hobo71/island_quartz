<!doctype html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<nav class="navbar navbar-expand-md fixed-top menu-bg">
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
				<div class="ml-auto mr-2 text-white">
  						<ul class="navbar-nav">
  							<li class="nav-item dropdown">
  								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-cart mr-2"></i>Cart</a>
  								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          							<a class="dropdown-item" href="/long-island-quartz/cart/">My Cart</a>
          							<a class="dropdown-item" href="/long-island-quartz/checkout/">Checkout</a>
          							<a class="dropdown-item" href="/long-island-quartz/my-account/">My Account</a>
        						</div>
      						</li>
  						</ul>
				</div>
			</div>
		</nav>
