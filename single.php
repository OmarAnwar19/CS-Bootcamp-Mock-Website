<?php get_header(); ?>

<div class="content-area">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <section id="course-section">
        <div class="container-lg my-4 pt-3 pb-5">
            <?php get_template_part( "parts/content", "single"); ?>
        </div>
    </section>

    <section id="comments-section" class="bg-light pb-3">
        <?php comments_template(); ?>
    </section>

    <?php endwhile; else: ?>

        <?php get_template_part( "parts/content", ""); ?>

    <?php endif; ?>

</div>

<?php get_footer(); ?>