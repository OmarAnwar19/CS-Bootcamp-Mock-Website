<?php get_header(); ?>

<div class="content-area">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section id="main-section">
        <div class="container-lg my-4 border border-2 border-primary">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 text-center text-md-start bg-light">
                    <h1 class="display text-center text-secondary"><?php the_title(); ?></h1>
                    <div class="lead my-4">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-md-6 text-center d-none d-md-block">		
                    <iframe class="ratio ratio-1x1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d719079.1824071255!2d-76.36071913136338!3d45.249753086585535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05b25f5113af%3A0x8a6a51e131dd15ed!2sOttawa%2C%20ON!5e0!3m2!1sen!2sca!4v1647032230453!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>