<div class="hero-wrap">
	<div class="home-slider owl-carousel">
		<?php
		$sliders = get_field( 'slider', 'options' );
		if ( $sliders ) {
			foreach ( $sliders as $slider ) {
				?>
				<div class="slider-item"
				     style="background-image:url(<?php echo esc_url( $slider['slider_image'] ) ?>);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row no-gutters slider-text align-items-center justify-content-center">
							<div class="col-md-8 ftco-animate">
								<div class="text w-100 text-center">
									<h2><?php echo esc_html( $slider['slider_sub_title'] ) ?></h2>
									<h1 class="mb-4"><?php echo esc_html( $slider['slider_title'] ) ?></h1>
									<p><a href="<?php echo esc_url( $slider['slider_button_link'] ) ?>"
									      class="btn btn-white"><?php echo esc_html( $slider['slider_button_label'] ) ?></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }
		} ?>
	</div>
</div>