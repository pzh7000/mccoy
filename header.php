<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Rubik&display=swap" rel="stylesheet">
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
					<div class="eyebrow"><a href="tel:1-913-342-4904">913-342-4904</a></div>
					<div class="container">
						<nav class="desktopNav" role="navigation">
							<div class="logo-title site-branding">
                <a class="logo h1" href="<?php echo home_url(); ?>">
                  <img class="logo-img" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2019/10/Mccoy-logo.jpg" alt="McCoy Sales Kansas City" class="">
                </a>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                    <p class="site-description">
                      <?php echo $description; ?>
                    </p>
                <?php endif; ?>
              </div>


              <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
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
              <?php endif; ?>



						</nav>
						<div class="mobileNav" id="mobileNav">
							<div class="logo-title">
								<a class="logo" href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img class="logo-img" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2019/10/Mccoy-logo.jpg" alt="McCoy Sales Kansas City">
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
