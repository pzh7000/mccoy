<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<!-- <footer id="colophon" class="site-footer" style="background: url(<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2019/10/Screen-Shot-2019-10-21-at-10.27.01-PM.png) no-repeat center; background-size:cover;"> -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<div class="footer-address">

				<h4>McCoy Sales Company</h4>
				<p>3130 Brinkerhoff Road<br>
					Kansas City, KS 66115</p>

				<p>Phone: 913-342-4904</p>
				<p>Fax: 913-321-5720</p>

			</div>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>



			<div class="aimr-logo">
				<p>Proud Member of:</p>
				<a href="https://www.aimr.net/" alt="The Association of Independent Manufacturers’/Representatives, Inc." title="The Association of Independent Manufacturers’/Representatives, Inc."><img src="http://mccoy.test/wp-content/uploads/2019/11/AIMR_logo_withText.jpg"></a>
			</div>

		</div><!-- .site-info -->



		<div class="copyright">© <?php echo date("Y"); ?> McCoy Sales Company</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
