<?php 

function styles() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

		// remove script nativo, deixa o WP mais rápido
		wp_deregister_script( 'l10n' );

		// Remove jQuery do WP
		wp_deregister_script('jquery');

		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1');
		wp_enqueue_script('jquery');

		wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
		wp_enqueue_style('bootstrap');

		// wp_register_style('owlCarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4', 'all');
		// wp_enqueue_style('owlCarousel');

		// wp_register_style('fancyBox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css', array(), '3.5.7', 'all');
		// wp_enqueue_style('fancyBox');

		wp_register_style('style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
		wp_enqueue_style('style');
		
	}
}
add_action('wp_enqueue_scripts', 'styles');


function scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		
		wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7');
		wp_enqueue_script('popper');

		wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1');
		wp_enqueue_script('bootstrap');		

		// wp_register_script('mask', '//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js', array(), '1.14.13');
		// wp_enqueue_script('mask');

		// wp_register_script('owlCarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4');
		// wp_enqueue_script('owlCarousel');

		// wp_register_script('fancyBox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js', array(), '3.5.1');
		// wp_enqueue_script('fancyBox');
		
		wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0');
		wp_enqueue_script('main');
	}
}
add_action('wp_footer', 'scripts');