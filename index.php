<?php get_header() ?>
<section class="hero-wrap hero-wrap-2"
         style="background-image: url('<?php echo esc_url( get_field( 'blog_page_breadcrumb_image', 'option' ) ) ?>');"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a
                                href="<?php echo esc_url( site_url() ) ?>"><?php echo esc_html__( 'Home', 'accounting' ) ?>  <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span><?php single_post_title() ?> <i
                                class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread"><?php single_post_title() ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

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
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>
