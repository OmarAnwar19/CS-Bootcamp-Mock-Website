<div class="col-md-6 bg-<?php $arr = Array("primary", "light"); echo $arr[array_rand($arr)]; ?> mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
        <h2 class="display-5"><?php the_title(); ?></h2>

        <?php if (has_post_thumbnail()): ?>
            <p class="pt-2 d-none d-md-block"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></p>
        <?php endif; ?>

        <p class="lead"><?php the_excerpt(); ?></p>
    </div>
</div>