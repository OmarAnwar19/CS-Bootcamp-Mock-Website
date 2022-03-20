<?php get_header(); ?>

<div class="content-area">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    
    <h1 class="display text-center text-secondary my-3"><?php the_title(); ?></h1>

    <div class="container py-5">
        <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><?php the_title(); ?></button>
            <button class="nav-link" id="nav-misson-tab" data-bs-toggle="tab" data-bs-target="#nav-misson" type="button" role="tab" aria-controls="nav-misson" aria-selected="false"><?php esc_html_e("Misson", "textdomain"); ?></button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><?php the_author_meta("display_name"); ?></button>
        </div>
        </nav>
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <?php the_content(); ?>
            </div>
            <div class="tab-pane fade" id="nav-misson" role="tabpanel" aria-labelledby="nav-misson-tab">
                <?php bloginfo("description"); ?>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <?php the_author_meta("description"); ?>
            </div>
        </div>
    </div>

    <?php endwhile; endif; ?>

    <?php get_template_part("parts/content", "updates") ?>

</div>

<?php get_footer(); ?>