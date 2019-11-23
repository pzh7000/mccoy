<?php
/**
 * Template part for displaying posts on McCoy Sales
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage mccoy
 * @since 1.0.0
 */

?>

	<!-- McCoy Sales Posts page -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
		}
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			// the_title( sprintf( '<h2 class="news-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			the_title( sprintf( '<h2 class="news-post-title">', esc_url( get_permalink() ) ), '</h2>' );
		endif;
		// Posted by
		mccoy_posted_by();
		// Posted on
	  mccoy_posted_on();
		?>
	</header><!-- .entry-header -->

	<!-- <?php twentynineteen_post_thumbnail(); ?> -->

	<?php the_post_thumbnail( 'medium' ); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);


		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->
