<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
				<?php
				$all_faq = get_field( 'faqs', 'option' );
				?>
                <div class="img-faqs w-100">
                    <div class="img mb-4 mb-sm-0"
                         style="background-image:url(<?php echo esc_url( $all_faq['faq_1st_image'] ) ?>);">
                    </div>
                    <div class="img img-2 mb-4 mb-sm-0"
                         style="background-image:url(<?php echo esc_url( $all_faq['faq_2nd_image'] ) ?>);">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="heading-section mb-5 mt-5 mt-lg-0">
                    <span class="subheading"><?php echo esc_html( $all_faq['faq_subtitle'] ) ?></span>
                    <h2 class="mb-3"><?php echo esc_html( $all_faq['faq_title'] ) ?></h2>
                    <p><?php echo esc_html( $all_faq['faq_description'] ) ?></p>
                </div>
                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
					<?php
					$faqs = $all_faq['all_faqs'];
					if ( $faqs ) {
						$i = 0;
						foreach ( $faqs as $faq ) {
							$i ++;
							?>

                            <div class="card">
                                <div class="card-header p-0" id="heading<?php echo esc_attr( $i ) ?>">
                                    <h2 class="mb-0">
                                        <button href="#collapse<?php echo esc_attr( $i ) ?>"
                                                class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                                data-parent="#accordion" data-toggle="collapse" aria-expanded="true"
                                                aria-controls="collapse<?php echo esc_attr( $i ) ?>">
                                            <p class="mb-0"><?php echo esc_html( $faq['faq_title'] ) ?></p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div class="collapse <?php
                                if($i==1){
                                    echo "show";
                                }
                                ?>" id="collapse<?php echo esc_attr( $i ) ?>" role="tabpanel"
                                     aria-labelledby="heading<?php echo esc_attr( $i ) ?>">
                                    <div class="card-body py-3 px-0">
										<?php echo $faq['faq_description'] ?>
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