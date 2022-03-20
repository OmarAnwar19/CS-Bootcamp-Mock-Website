<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card border-1 border-primary">
        <div class="card-body text-center py-4">
            <h4 class="card-title"><?php the_title(); ?></h4>
            <p class="card-text mx-5 text-muted d-none d-lg-block">
                <?php the_excerpt(); ?>
            </p>
        </div>
    </div>
</article>