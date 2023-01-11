<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-9 py-5">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
						<?php
						$footer_about = get_field( 'footer_about', 'option' );
						?>
                        <h2 class="footer-heading"><?php echo esc_html( $footer_about['footer_about_title'] ) ?></h2>
                        <p><?php echo esc_html( $footer_about['footer_about_description'] ) ?></p>
                        <ul class="ftco-footer-social p-0">
							<?php
							$footer_socials = $footer_about['footer_about_social'];
							if ( $footer_socials ) {
								foreach ( $footer_socials as $footer_social ) {

									?>
                                    <li class="ftco-animate"><a
                                                href="<?php echo esc_url( $footer_social['footer_social_link'] ) ?>"
                                                data-toggle="tooltip" data-placement="top"><span
                                                    class="<?php echo esc_attr( $footer_social['footer_social_icon'] ) ?>"></span></a>
                                    </li>

								<?php }
							} ?>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-4 mb-md-0 mb-4">
										<?php if ( is_active_sidebar( 'footer-1' ) ) {
											dynamic_sidebar( 'footer-1' );
										} ?>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
										<?php if ( is_active_sidebar( 'footer-2' ) ) {
											dynamic_sidebar( 'footer-2' );
										} ?>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
										<?php if ( is_active_sidebar( 'footer-3' ) ) {
											dynamic_sidebar( 'footer-3' );
										} ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-md-5">
                    <div class="col-md-12">
                        <p class="copyright">
							<?php echo wp_kses_post( get_field( 'copyright', 'option' ) ) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                <h2 class="footer-heading"><?php echo esc_html( $footer_about['footer_form_heading'] ) ?></h2>
                <div class="form-consultation">
					<?php echo do_shortcode( $footer_about['footer_contact_form'] ) ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- loader -->

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<?php wp_footer(); ?>
</body>
</html>

