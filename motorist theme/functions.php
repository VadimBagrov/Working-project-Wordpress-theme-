<?php 

define( 'B__IMG', '/wp-content/themes/motorist%20theme' );

add_action( 'wp_enqueue_scripts',function() {
	wp_enqueue_style( 'mdvs', '/images/dist/MDVS.png' );
  wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css' );
  wp_enqueue_style( 'slick-theme', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js');

	wp_enqueue_script( 'jquery' );
  wp_enqueue_script('slick_js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), 'null', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js' , array('jquery'), 'null', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/secondary.js' , array('jquery'), 'null', true);
});
 
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// Загрузка свг
add_filter( 'upload_mimes', 'svg_upload_allow' );

// Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
?>