<?php 

function register_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
	register_nav_menu('sidebar-menu',__( 'Sidebar Menu' ));
	register_nav_menu('extra-menu',__( 'Extra Menu' ));
}
add_action( 'init', 'register_menu' );

function login_page() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/logo.svg");
			padding-bottom: 30px;
			background-size: 100%;
			width: 320px;
			height: 91px;
			background-position: 0;
		}
	</style>
<?php  }

add_action( 'login_enqueue_scripts', 'login_page' );


if (!isset($content_width)) {
	$content_width = 960;
}

if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}

add_theme_support('automatic-feed-links');