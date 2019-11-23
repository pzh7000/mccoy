<?php
add_action( 'wp_enqueue_scripts', 'mccoy_enqueue_styles' );
function mccoy_enqueue_styles() {
    wp_enqueue_style( 'mccoy-style', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'mccoy_add_jquery' );
function mccoy_add_jquery() {
    wp_enqueue_script( 'mccoy-jquery', get_stylesheet_directory_uri() . '/jquery.js' );
}

add_action( 'wp_enqueue_scripts', 'mccoy_add_scripts' );
function mccoy_add_scripts() {
    wp_enqueue_script( 'mccoy-script', get_stylesheet_directory_uri() . '/script.js' );
}

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

/**
 * Register the Manufacturers post type with a Dashicon.
 *
 * @see register_post_type()
 */
function mccoy_create_post_type() {
    register_post_type( 'manufacturer',
        array(
            'labels' => array(
                'name'          => __( 'Manufacturers', 'textdomain' ),
                'singular_name' => __( 'Manufacturer', 'textdomain' ),
                'add_new_item'  => __( 'Add New Manufacturer'),
                'all_items'     => __( 'All Manufacturers'),
                'edit_item'     => __( 'Edit Manufacturer')
            ),
            'supports' => array( 'title', 'editor' ),
            'public'      => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-hammer',
        )
    );
}
add_action( 'init', 'mccoy_create_post_type', 0 );


function mccoy_posted_by() {
  printf(
    /* translators: 1: SVG icon. 2: post author, only visible to screen readers. 3: author link. */
    '<p class="mccoy-author"><span class="screen-reader-text">%2$s</span>%4$s</p>',
    twentynineteen_get_icon_svg( 'person', 16 ),
    __( 'Posted by', 'twentynineteen' ),
    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
    esc_html( get_the_author() )
  );
}

function mccoy_posted_on() {
  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
  if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
  }

  $time_string = sprintf(
    $time_string,
    esc_attr( get_the_date( DATE_W3C ) ),
    esc_html( get_the_date() ),
    esc_attr( get_the_modified_date( DATE_W3C ) ),
    esc_html( get_the_modified_date() )
  );

  printf(
    '<span class="posted-on">%3$s</span>',
    twentynineteen_get_icon_svg( 'watch', 16 ),
    esc_url( get_permalink() ),
    $time_string
  );
}
