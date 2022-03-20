<?php if ( post_password_required() ) return; ?>

<?php if ( have_comments() ) : ?>
	<h3 class="comments-title text-center lead-5 pt-4">
		<?php
			printf(
				/* translators: 1: title. */
				esc_html__( 'Reviews on %1$s:', 'textdomain' ),
				'<span>' . wp_kses_post( get_the_title() ) . '</span>'
			);
		?>
	</h3><!-- .comments-title -->

	<div class="row justify-content-center my-5">
        <div class="col-lg-12 col-m-8">
            <div class="list-group">
                <?php the_comments_navigation(); ?>

                <?php
                    wp_list_comments([
                            "style" => "div",
                            "short-ping" => true,
                            "depth" => 1,
                            "max-depth" => 3,
                            "callback" => "custom_comments"
                    ]);
                ?>

                <?php the_comments_navigation(); ?>
		    </div>
        </div>
	</div>

	<!-- If comments are closed and there are comments, let's leave a little note, shall we? -->
	<? if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ttags' ); ?></p>
	<?php endif; ?>

<?php endif; // Check for have_comments(). ?>

<section class="reply bg-white py-4">
	<div class="container-lg justify-content-center align-items-center text-center col-8">
		<?php 
		comment_form([
			"title_reply" => "Leave a Review",
			"class_container" => "",
			"label_submit" => "Submit",
			"comment_field" => '<div class="form-floating mb-4"><textarea maxlength="445" name="body" id="body" class="form-control" style="resize: none; height: 180px;"></textarea><label for="body" class="form-label">Comment</label></div>',
		]); 
		?>
	</div>
</section>
	