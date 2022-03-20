<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <div id="page">

        <header class="site-header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a href="<?php echo esc_url(home_url("/"));?>" rel="home" class="navbar-brand">
                        <span class="fw-bold"><?php bloginfo("name") ?></span>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end align-center" id="navbarNavDropdown">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                                'depth' => 8,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                    </div>
                </div>
            </nav>
        </header>

        <?php do_action( "after_header" ); ?>

        <div class="site-content">