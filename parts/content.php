<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="article-header">

        <?php the_title("<h1>", "</h1>"); ?>

        <div class="byline"><?php esc_html_e("Author: "); the_author();?></div>
        <div class="byline"><?php esc_html_e("Date: "); the_date("Y-m-d");?></div>

    </header>

    <div class="article-content">

        <?php the_excerpt() ?>

    </div>
    <?php paginate_links() ?>

    <?/* if (comments_open()): ?>
    <?php comments_template(); ?>
    <?php endif;  */?>

</article>