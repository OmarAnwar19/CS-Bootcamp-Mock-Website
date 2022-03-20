<?php get_header() ?>

<div class="content-area">

    <main id="main" class="site-main" role="main">
        <section id="courses" class="bg-light py-5">
            <div class="container-lg">
                <div class="text-center text-secondary">
                    <h2><?php wp_title(""); ?></h2>
                </div>
                <div class="row my-3 align-items-center justify-content-center g-5">
                    <?php if (have_posts()): while (have_posts()): the_post();?>
                    <div class="col-12">
                        <?php get_template_part( "parts/content", "courses"); ?>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
        </section>

        <div class="container-fluid pb-2 bg-light">
                <?php understrap_pagination(); ?>
        </div>
    </main>

</div>

<?php get_footer() ?>