<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Pontano+Sans|Sarala|Scada" rel="stylesheet"> -->

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="main-header">
				<div class="topnav" id="topNav">

					<div class="container">
						<nav class="desktopNav" role="navigation">
							<div class="logo-title">
                <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2019/10/Mccoy-logo.jpg" alt="McCoy Sales Kansas City" class="">

                	<?php
                	$description = get_bloginfo( 'description', 'display' );
                	if ( $description || is_customize_preview() ) :
                		?>
                			<p class="site-description">
                				<?php echo $description; ?>
                			</p>
                	<?php endif; ?>
                	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
                		<nav id="site-navigation" class="topnav" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
                			<?php
                			wp_nav_menu(
                				array(
                					'theme_location' => '',
                					'menu_class'     => 'desktopNav',
                					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                				)
                			);
                      // html5blank_nav();
                			?>
                		</nav><!-- #site-navigation -->
                	<?php endif; ?>
                	<?php if ( has_nav_menu( 'social' ) ) : ?>
                		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
                			<?php
                			wp_nav_menu(
                				array(
                					'theme_location' => 'social',
                					'menu_class'     => 'social-links-menu',
                					'link_before'    => '<span class="screen-reader-text">',
                					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
                					'depth'          => 1,
                				)
                			);
                			?>
                		</nav><!-- .social-navigation -->
                	<?php endif; ?>
                </div><!-- .site-branding -->
							</div>
						</nav>
						<div class="mobileNav" id="mobileNav">
							<div class="logo-title">
								<a class="logo" href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2019/10/Mccoy-logo.jpg" alt="McCoy Sales Kansas City" class="">
								</a>
							</div>

							<div class="hamburger-menu" id="hamburgular" onclick="toggleNav(this)">
								<div class="bar1"></div>
								<div class="bar2"></div>
								<div class="bar3"></div>
							</div>
						</div>
            <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
						<nav class="toggleNav" id="toggleNav">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => '',
                  'menu_class'     => '',
                  'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
              );
              ?>
						</nav>
            <?php endif; ?>
					</div>
				</div>


			</header>
			<!-- /header -->
