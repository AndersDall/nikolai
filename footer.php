<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nikolai
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('images') ) : 
 
                endif; ?>
                
		<div class="site-info">
                    <!--
                    <div class="infoFooter">
                        <p>Nicolai for Børn - Skolegade 2C - 6000 Kolding - T: 79797575 - nfb@kolding.dk</p>
                    </div> -->
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nikolai' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'nikolai' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'nikolai' ), 'nikolai', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>  -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
