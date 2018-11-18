<footer class="liq-footer">
	<div class="container">
		<div class="row pt-4 pb-2">
			<div id="leftFooter" class="col-md-3">
				<?php dynamic_sidebar( 'island_quartz_footer' ); ?>
			</div>
			<div id="middleFooter" class="col-md-3">
				<?php dynamic_sidebar( 'island_quartz_footer_right' ); ?>
			</div>
			<div class="col-md-6">
			</div>
      </div>
	</div>
	<div class="col pt-3 pb-2" style="background: #666;">
		<p id="copyright" class="text-white pt-3"><small>Copyright &copy; <?php echo the_date('Y'); ?> Long Island Quartz</small> <a target="_blank" href="https://benkaminski.com"><div class="fadehover text-right"><img src="<?php echo get_template_directory_uri(); ?>/lib/img/kaminski-consulting-dark.png" class="img-fluid a" alt="Website Design by Benjamin Kaminski Consulting" /><img src="<?php echo get_template_directory_uri(); ?>/lib/img/kaminski-consulting.png" class="img-fluid b" alt="Website Design by Benjamin Kaminski Consulting" /></div></a></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
<!-- Custom WordPress theme designed by Ben Kaminski (https://benkaminski.com) exclusively for Long Island Quartz. Custom scripts to edit WooCommerce WordPress Plugin to client spec. Get your own custom WordPress theme at https://benkaminski.com   -->
</html>
