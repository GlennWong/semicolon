<?php query_posts( "cat=1&showposts=2" ); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" class="post type-post status-publish format-standard has-post-thumbnail hentry category-second semicolon-featured semicolon-clear-left">
			<header class="entry-header">
				<a class="post-thumbnail" href="<?php the_permalink(); ?>"><span><?php the_post_thumbnail(); ?></span></a>

				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				<div class="entry-meta">
					<?php the_time('Y年m月d日'); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

		</article><!-- #post-## -->
		<?php endwhile;?>
	<?php endif;?>
<?php wp_reset_query(); ?>
