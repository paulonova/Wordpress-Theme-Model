<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyThemeModell
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'my_theme_modell' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'my_theme_modell' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'my_theme_modell' ), 'my_theme_modell', '<a href="http://underscores.me/">Paulo Vila Nova</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/assets/js/bootstrap.min.js"></script>
    
    <script src="<?php bloginfo('stylesheet_directory')?>/assets/js/main.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_footer(); ?>

</body>
</html>
