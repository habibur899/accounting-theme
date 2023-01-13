<?php
get_header();
get_template_part( '/template-part/breadcrumb' )
?>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">

            <div class="<?php if ( is_active_sidebar( 'sidebar' ) ) {
	            echo "col-lg-8";
            } else {
	            echo "col-lg-12";
            } ?> ftco-animate">
                <p>
					<?php
					the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) );
					?>
                </p>
                <h2 class="mb-3"><?php the_title() ?></h2>
				<?php the_content(); ?>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
						<?php the_tags( ' ', ' ', ' ' ); ?>

                    </div>
                </div>
                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
						<?php
						global $post;
						$author_id = $post->post_author;
						$user      = wp_get_current_user();
						if ( $user ) :
							?>
                            <img class="mb-4" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>"/>
						<?php endif; ?>
                    </div>
                    <div class="desc">
						<?php
						$user_name = get_the_author_meta( 'display_name', $author_id );
						$user_desc = get_the_author_meta( 'description', $author_id )
						?>
                        <h3><?php echo esc_html( $user_name ) ?></h3>
                        <p><?php echo esc_html( $user_desc ) ?></p>
                    </div>
                </div>
	            <?php if ( comments_open() || get_comments_number() ) {
		            comments_template();
	            };
	            ?>

            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
				<?php if ( is_active_sidebar( 'sidebar' ) ) {
					dynamic_sidebar( 'sidebar' );
				} ?>
            </div>
        </div>
    </div>
</section>
<!-- .section -->
<?php get_template_part( '/template-part/newslater' ) ?>
<?php get_footer() ?>

