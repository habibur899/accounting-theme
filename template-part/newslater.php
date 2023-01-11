<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
				<?php
				$cta = get_field( 'cta', 'option' );
				?>
                <h2 class="mb-3 mb-sm-0"
                    style="color:black; font-size: 22px;"><?php echo esc_html( $cta['cta_heading'] ) ?></h2>
            </div>
            <div class="col-md-5 d-flex align-items-center subscribe-form">
				<?php echo do_shortcode( $cta['cta_form'] ) ?>
            </div>
        </div>
    </div>
</section>