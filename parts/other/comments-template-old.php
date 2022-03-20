<div class="col-8 col-lg-4">
    <div class="card mb-3 border-2 border-primary text-center text-md-start" style="max-width: 24rem;">
        <img 
            src="<?php echo get_avatar_url(get_comment_author_email()); ?>" 
            class="card-img-top"
            alt="<?php esc_html_e( "Comment Author Avatar", "textdomain" ); ?>"
        >

        <div class="card-body">
            <h5 class="card-title"><?php comment_author(); ?></h5>
            <p class="card-text"><?php comment_text(); ?></p>
            <p class="card-text"><small class="text-muted"><?php comment_date(); ?> at <?php  comment_time( "g:i a"); ?></small></p>
        </div>
    </div>
</div>
