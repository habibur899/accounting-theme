<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex">
				<?php
				$about = get_field( 'about', 'option' );
				?>
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                     style="background-image:url(<?php echo esc_url( $about['about_image'] ) ?>);">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="heading-section pl-md-4 pt-md-5">
                    <span class="subheading"><?php echo esc_html( $about['about_sub_title'] ) ?></span>
                    <h2 class="mb-4"><?php echo esc_html( $about['about_title'] ) ?></h2>
                </div>
				<?php
				$about_features = $about['about_features'];
				if ( $about_features ) {
					foreach ( $about_features as $about_feature ) {

						?>
                        <div class="services-2 w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="<?php echo esc_attr( $about_feature['about_feature_icon'] ) ?>"></span>
                            </div>
                            <div class="text pl-4">
                                <h4><?php echo esc_html( $about_feature['about_feature_title'] ) ?></h4>
                                <p><?php echo esc_html( $about_feature['about_feature_description'] ) ?></p>
                            </div>
                        </div>
					<?php }
				} ?>

            </div>
        </div>
    </div>
</section>