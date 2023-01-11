<section class="ftco-section testimony-section bg-light">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
			<?php
			$testimonials = get_field( 'testimonials', 'option' );
			?>
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading"><?php echo esc_html( $testimonials['testimonials_section_subtitle'] ) ?></span>
                <h2><?php echo esc_html( $testimonials['testimonials_section_title'] ) ?></h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
					<?php
					$all_testimonials = $testimonials['single_testimonials'];
					if ( $all_testimonials ) {
						foreach ( $all_testimonials as $single_testimonial ) {

							?>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4"><?php echo esc_html( $single_testimonial['testimonial_content'] ) ?></p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                 style="background-image: url(<?php echo esc_url( $single_testimonial['testimonial_image'] ) ?>)"></div>
                                            <div class="pl-3">
                                                <p class="name"><?php echo esc_html( $single_testimonial['testimonial_name'] ) ?></p>
                                                <span class="position"><?php echo esc_html( $single_testimonial['testimonial_designation'] ) ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php }
					} ?>

                </div>
            </div>
        </div>
    </div>
</section>