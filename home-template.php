<?php /* Template Name: Home Page Template */ get_header(); ?>
<!-- Homepage Template -->

	<main role="main">
		<!-- section -->
		<section>


				<section id="primary" class="content-area">
					<main id="main" class="site-main">

						<?php

						/* Start the Loop */
						while ( have_posts() ) : ?>

						<div class="hero" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center; background-size:cover;">
							<div class="hero-title">
								<h1><?php the_title(); ?></h1>
							</div>
						</div>


							<?php
							the_post();

							get_template_part( 'template-parts/content/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}

						endwhile; // End of the loop.
						?>

						<article>
							<h3 class="mc--h3">Our Manufacturers</h3>
							<div class="manu-logos">
							<?php
								$args = array( 'post_type' => 'manufacturer', 'posts_per_page' => 0, 'orderby'=> 'title', 'order' => 'ASC' );
								$the_query = new WP_Query( $args );

								if ( $the_query->have_posts() ) :
									while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

									<div class="manu-logo">
										<img src="<?php the_field('company_logo');?>" alt="<?php the_title(); ?>">
									</div>





									<?php wp_reset_postdata();
								endwhile;
								else:  ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
							</div>
						</article>


					</main><!-- #main -->
				</section><!-- #primary -->

<?php get_footer(); ?>
