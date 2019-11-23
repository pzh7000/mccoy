<?php /* Template Name: Manufacturers Page Template */ get_header(); ?>
<!-- Manufacturers Template -->


	<section id="primary" class="content-area">
		<main id="main" class="site-main" id="top">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( have_posts() ) : ?>

					<?php
					// Start the Loop.
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content/content', 'archive' );

						// End the loop.
					endwhile;

					// Previous/next page navigation.
					twentynineteen_the_posts_navigation();

					// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content/content', 'none' );

				endif;
				?>


				<div class="manufacturers">
			    <?php
			      $args = array( 'post_type' => 'manufacturer', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
			      $the_query = new WP_Query( $args );

			      if ( $the_query->have_posts() ) :
			        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			        <div class="single-manufacturer" id="<?php the_title(); ?>">
								<!-- <div class="up-arrow">
									<a href="#top">&and;<br>Top</a>
								</div> -->
								<a class="compay-link" href="<?php the_field('site_url'); ?>" title="<?php the_title(); ?> website">
									<div class="company-logo-container">
										<img class="company-logo" src="<?php the_field('company_logo');?>">
									</div>
								</a>
								<div class="manufacturer-content">
									<div class="company-title-container">
					          <!-- <h2 class="mc--company-title"><?php the_title(); ?></h2> -->
										<!-- <a class="compay-link" href="<?php the_field('site_url'); ?>"><?php the_field('site_url'); ?></a> -->
									</div>
				          <div class="archive-entry-content">
				            <?php the_content(); ?>
				          </div>
								</div>
			        </div>
			        <?php wp_reset_postdata();
			      endwhile;
			      else:  ?>
			      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			    <?php endif; ?>
				</div>
			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
