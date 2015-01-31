<?php get_header(); ?>

<?php get_template_part('breadcrumb'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php get_template_part('featured'); ?>
		
		<?php query_posts("cat=-1"); ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content' ); ?>

			<?php endwhile; ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
