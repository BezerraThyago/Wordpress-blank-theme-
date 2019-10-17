<main class="archive-page">	
    <?php if(have_posts()) : while(have_posts()) : the_post()?>	
        <?php the_title()?>
    <?php endwhile; endif;?>
    <?php get_template_part( 'template-parts/form-cta' );?>
</main>