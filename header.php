<!doctype html>
	<html <?php language_attributes(); ?>>
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129142934-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-129142934-1');
		</script>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="yandex-verification" content="be0c3b0e4b9c3838" />
		<meta name="msvalidate.01" content="E4F5FA02C51943257359F1B364428943" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/lib/img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/lib/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/lib/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/lib/img/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/lib/img/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/lib/img/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="preloader"></div>
		<nav class="navbar navbar-expand-md fixed-top menu-bg">
			<a class="navbar-brand text-white" href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-60x60.png" height="30" width="30" class="d-inline-block align-top mr-2" alt="Long Island Quartz Icon" />
				<span class="mr-4">Long Island Quartz</span>
			</a>
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
  							<li class="instagram">
  								<a target="_blank" href="https://www.instagram.com/longislandquartz/"><i class="fab fa-instagram text-white fa-lg mr-4"></i></a>
  							</li>
  							<li class="nav-item dropdown">
  								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-pill badge-success quantityCart">
  									<?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>Cart</a>
  								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          							<a class="dropdown-item" href="cart/"><i class="fas fa-shopping-cart mr-2"></i>My Cart (<?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>)</a>
          							<a class="dropdown-item" href="my-account/"><i class="fas fa-user-circle mr-2"></i>My Account</a>
          							<a class="dropdown-item" href="checkout/"><i class="far fa-credit-card mr-2"></i>Checkout</a>
        						</div>
      						</li>
  						</ul>
				</div>
			</div>
		</nav>
