<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row justify-content-center align-items-center">
        <div class="col-8 text-center">
            <h1 class="display text-center text-secondary"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()): ?>
                <p class="border border-2 border-primary pt-2 d-none d-md-block"><?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?></p>
            <?php endif; ?>

            <div class="lead my-4">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</article>