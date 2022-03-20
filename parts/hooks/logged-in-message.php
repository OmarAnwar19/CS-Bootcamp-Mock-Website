<?php if(is_user_logged_in(  )): ?>
    <?php if (is_admin(  )): ?>
        <div class="container-sm d-none d-md-block mt-3 alert alert-success alert-dismissible fade show" role="alert">
        <?php esc_html_e( "Welcome back " . wp_get_current_user()->display_name . "!", "text-domain" ) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <?php else: ?>
        <div class="container-sm d-none d-md-block mt-3 alert alert-success alert-dismissible fade show" role="alert">
        <?php esc_html_e( "Welcome back Master Bruce...", "text-domain" ) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <?php endif; ?>
</div>
<?php else: ?>
    <div class="container-sm d-none d-md-block mt-3 alert alert-warning alert-dismissible fade show" role="alert">
    <?php wp_loginout().esc_html_e(" to experience all features.", "textdomain"); ?> <?php ; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>