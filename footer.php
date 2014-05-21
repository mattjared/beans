<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package beans
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'beans' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'beans' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'beans' ), 'beans', '<a href="http://mattjared.co/showyourwork" rel="designer">Matt Jared</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
TEST IS NOT HERE!
<?php wp_footer(); ?>

</body>
</html>
