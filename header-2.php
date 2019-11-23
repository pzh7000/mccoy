<!-- wrapper -->
<div class="wrapper">

  <!-- header -->
  <header class="main-header">
    <div class="topnav" id="topNav">

      <div class="container">
        <nav class="desktopNav" role="navigation">
          <div class="logo-title">
            <a class="logo h1" href="<?php echo home_url(); ?>">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/square_one_logo_only.png" alt="Square One Career Coaching" class=""> -->
              The Melt
            </a>
          </div>

          <div class="menu">
            <?php html5blank_nav(); ?>
          </div>
        </nav>
        <div class="mobileNav" id="mobileNav">
          <div class="logo-title">
            <a class="logo h1" href="<?php echo home_url(); ?>">
              <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
              The Melt
            </a>
          </div>

          <div class="hamburger-menu" id="hamburgular" onclick="toggleNav(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        </div>
        <nav class="toggleNav" id="toggleNav">
          <?php html5blank_nav(); ?>
        </nav>
      </div>
    </div>


  </header>
  <!-- /header -->
