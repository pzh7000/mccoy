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
