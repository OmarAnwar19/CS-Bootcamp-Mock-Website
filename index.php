<?php get_header(); ?>

<div class="content-area">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <?php get_template_part( "parts/content", ); ?>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>