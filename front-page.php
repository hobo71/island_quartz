<?php get_header(); ?>
	<header class="liq-header">
		<div class="container-fluid">
			<div class="container">
				<div class="row pt-5">
					<div class="col-md-5 pt-5">
						<img id="diamond" src="<?php echo get_template_directory_uri(); ?>/lib/img/island-quartz-diamond-logo.png" class="island-diamond img-fluid" alt="Long Island Quartz" />
					</div>
					<div class="col-md-7">
						<h1 class="text-white display-1 title-text">Long Island<br />Quartz</h1>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="col featured">
		<div class="container pt-4 pb-4">
			<h2 class="text-center display-4 mb-4">Featured Products:</h2>
			<div>
				<?php echo do_shortcode('[products limit="4" orderby="rand" category="quartz-bangers"]'); ?>
				<hr />
				<a class="mx-auto d-block btn btn-secondary btn-lg text-uppercase" href="shop/">Shop Now</a>
			</div>
		</div>
	</div>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h2 class="text-center display-4 mb-4">About Us:</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/long-island-quartz-island-logo" alt="Long Island Quartz - LIQ" class="img-fluid mx-auto d-block mb-3" />
			<h3 id="about" class="text-center display-4">Providing excellence and elegance with highly detailed &dash; American made &dash; hand crafted quartz.</h3>
	  	</div>
	</div>
	<div class="col instagram">
		
	</div>
<?php get_footer(); ?>
