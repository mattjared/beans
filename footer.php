<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package beans
 */
?>
	</div>
	<footer>
		<?php get_sidebar( 'content' ); ?>
		<div class="full copyright">
			<div class="container">
				<h2><?php bloginfo('name')?> &copy; <?php echo date('Y'); ?></h2>
			</div>
		</div>
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>
