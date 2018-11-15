<?php get_header(); ?>
<div class="container interiorPages">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1 class="pt-3 display-4 pageHeading"><?php the_title(); ?></h1>

		<?php the_content(); ?>




	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
