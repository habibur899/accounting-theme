<section class="ftco-section bg-light ftco-no-pt">
    <div class="container">
        <div class="row">
			<?php
			$services = get_field( 'services', 'options' );
			if ( $services ) {
				foreach ( $services as $service ) {
					?>
                    <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                        <div class="d-block">
                            <div class="icon d-flex mr-2">
                                <span class="<?php echo esc_attr( $service['services_icon'] ) ?>"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading"><?php echo esc_html( $service['services_title'] ) ?></h3>
                                <p><?php echo esc_html( $service['services_description'] ) ?></p>
                            </div>
                        </div>
                    </div>
					<?php
				}
			} ?>
        </div>
    </div>
</section>