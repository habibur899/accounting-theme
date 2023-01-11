<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
				<?php
				$blog = get_field( 'blog', 'option' );
				?>
                <span class="subheading"><?php esc_html( $blog['blog_subtitle'] ) ?></span>
                <h2><?php esc_html( $blog['blog_title'] ) ?></h2>
            </div>
        </div>
        <div class="row d-flex">
			<?php
			$args  = array(
				'post_type'      => 'post',
				'posts_per_page' => 3,
				'post_status'    => 'publish'
			);
			$query = new WP_Query( $args );
			if ( have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();

					?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="<?php the_permalink(); ?>" class="block-20 rounded"
                               style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div><?php echo get_the_date( 'F j, Y' ) ?></div>
                                    <div><?php the_author_posts_link() ?></div>
                                    <div><a href="<?php the_permalink(); ?>" class="meta-chat"><span
                                                    class="fa fa-comment"></span> <?php echo get_comments_number(); ?>
                                        </a></div>
                                </div>
                                <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                            </div>
                        </div>
                    </div>
				<?php }
			} ?>

        </div>
    </div>
</section>