<?php
/**
 * @package beans
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<h5><time datetime="<?php echo the_time('Y-m-j'); ?>"><?php echo the_time(get_option('date_format')); ?></time> by <?php the_author_posts_link(); ?></h5>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
