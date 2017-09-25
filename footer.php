<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iem
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		<div class="site-info">
			<a href="<?php
				/* translators: %s: Github repo URL. */
				echo esc_url( __( 'https://github.com/Alecaddd/iem', 'iem' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'iem' ), 'iem' ); ?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: %1: Theme name. */

				/* translators: %2: Author name. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'iem' ), 'iem', '<a href="http://alecaddd.com/" rel="designer">Alecaddd</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
