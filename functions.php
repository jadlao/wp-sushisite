<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */

function mytheme_post_thumbnails() {
	add_theme_support('post-thumbnails');
	add_post_type_support( 'page', 'excerpt' );
}
add_action('after_setup_theme', 'mytheme_post_thumbnails');


function carousel_slider_load_scripts( $load_scripts ) {
    return true;
}
add_filter('carousel_slider_load_scripts', 'carousel_slider_load_scripts');

function calendar_widgets_init() {

	register_sidebar( array(
		'name'          => __('calendar', 'sushi-wp-theme'),
		'id'            => 'calendar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'calendar_widgets_init' );
?>