<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
				<?php
				$price = get_field( 'price', 'option' );
				?>
                <span class="subheading"><?php echo esc_html( $price['price_subtitle'] ) ?></span>
                <h2><?php echo esc_html( $price['price_title'] ) ?></h2>
            </div>
        </div>
        <div class="row">
			<?php
			$prices = $price['price_pakeg'];
			if ( $prices ) {
				foreach ( $prices as $price ) {

					?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <span class="excerpt d-block"><?php echo esc_html( $price['price_heading'] ) ?></span>
                                <span class="price"><sup>$</sup> <span
                                            class="number"><?php echo esc_html( $price['price_amount'] ) ?></span> <sub><?php echo esc_html( $price['monthly_yearly'] ) ?></sub></span>
                                <ul class="pricing-text mb-5">
									<?php
									$features = $price['price_feature'];
									if ( $features ) {
										foreach ( $features as $feature ) {
											?>
                                            <li>
                                                <span class="<?php echo esc_attr( $feature['single_feature_icon'] ) ?> mr-2"></span><?php echo esc_html( $feature['single_feature'] ) ?>
                                            </li>
											<?php
										}
									}
									?>
                                </ul>
                                <a href="<?php echo esc_url( $price['button_link'] ) ?>"
                                   class="btn btn-primary d-block px-2 py-3"><?php echo esc_html( $price['button_label'] ) ?></a>
                            </div>
                        </div>
                    </div>
					<?php
				}
			}
			?>

        </div>
    </div>
</section>