<?php /* Template Name: front-page */ ?>
<?php get_header(); ?>

	<main class="main-page">	
		<?php if(have_posts()) : while(have_posts()) : the_post()?>	
			<?php the_title()?>
		<?php endwhile; endif;?>
	</main>

<?php get_footer(); ?>