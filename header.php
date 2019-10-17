<!doctype html>
<!-- Projeto desenvolvido por Black Magenta - blackmagenta.com.br -->

<html class="no-js" lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<link rel="alternate" href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="<?php echo get_locale(); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<title><?php wp_title(); ?></title>

	<meta property="og:locate" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php wp_title('-', 'right', true); bloginfo('name'); ?>" />
    <meta property="og:site_name" content="<?php wp_title('-', 'right', true); bloginfo('name'); ?>" />   
    <meta property="og:url" content="<?php bloginfo('url');?>" />
    <meta property="og:image" content="<?php bloginfo('template_url');?>/assets/img/ogimg.png" />
    <meta property="og:description" content="<?php bloginfo('description');?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="google-site-verification" content="JRN_WV73DPiwntKcheEe_gJ2GohH842iQEjpqmaHv0w" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php bloginfo('template_url');?>/assets/img/favicon.jpg">
	<meta name="description" content="<?php bloginfo('description');?>">
	<link rel="alternate" href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="<?php echo get_locale(); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

	<header class="header-page">
	</header>





