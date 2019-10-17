<?php /* Template Name: category */ ?>
<?php get_header(); ?>

	<main class="category-page">	
		<?php if(have_posts()) : while(have_posts()) : the_post()?>	
			<?php the_title()?>
		<?php endwhile; endif;?>
		<?php get_template_part( 'template-parts/form-cta' );?>
	</main>

<?php get_footer(); ?>