<section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
    <div class="container">
        <div class="row">

			<?php
			$counters = get_field( 'counters', 'option' );
			if ( $counters ) {
				foreach ( $counters as $counter ) {
					?>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number"
                                        data-number="<?php echo esc_html( $counter['counter_title'] ) ?>"><?php echo esc_html( $counter['counter_title'] ) ?></strong>
                            </div>
                            <div class="text">
                                <span><?php echo esc_html( $counter['counter_sub_title'] ) ?></span>
                            </div>
                        </div>
                    </div>
				<?php }
			} ?>
        </div>
    </div>
</section>