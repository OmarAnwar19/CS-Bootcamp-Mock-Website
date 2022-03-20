<?php get_header(); ?>

<div class="content-area">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section id="fp-main-section" class="view">
        <div class="container-fluid my-4 py-4 justify-content-center align-items-center" style="height: 85vh;">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1 class="display text-center text-secondary"><?php the_title(); ?></h1>
                    <div class="lead my-4">
                        <?php the_content(); ?>
                    </div>
                    <div class="container text-center justify-content-around">
                        <a href="/courses" class="btn btn-primary text-white mx-3">Courses</a>
                        <a href="/locations" class="btn btn-primary text-white mx-3">Locations</a>
                        <a href="/about" class="btn btn-primary text-white mx-3">About Us</a>
                    </div>
                </div>
                <div class="col-md-4 text-center d-none d-md-block">
                    <img src="<?php echo (get_stylesheet_directory_uri().'/assets/img/aperature2.png'); ?>"
                        alt="<?php esc_html_e( "Apearature", "textdomain" ); ?>" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>

    <section id="highlights-section" class="bg-light">
        <div class="container-fluid">
            <div class="row">
                <?php 
                    $query = new WP_Query([
                    'category_name' => 'featured',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    ]);  
                ?>

                <div class="text-center text-secondary py-3">
                    <h2><?php esc_html_e( "Featured Courses", "textdomain" ); ?></h2>
                </div>
                <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
                    <?php get_template_part( "parts/content", "post-highlights"); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

    <section id="contact-section" class="bg">
        <?php get_template_part( "parts/content", "contact-form"); ?>
    </section>

</div>

<?php get_footer(); ?>