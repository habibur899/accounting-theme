<?php
/*
 * Template Name: Contact
 * */
get_header() ?>
<?php
get_template_part( '/template-part/breadcrumb' ); ?>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4"><?php echo esc_html( get_field( 'contact_form_title', 'option' ) ) ?></h3>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">

										<?php echo do_shortcode( wp_kses_post( get_field( 'contact_form_shortcode', 'option' ) ) ) ?>

                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                <h3><?php echo esc_html( get_field( 'contact_address_title', 'option' ) ) ?></h3>
                                <p class="mb-4"><?php echo esc_html( get_field( 'contact_address_subtitle', 'option' ) ) ?></p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="<?php echo esc_attr( get_field( 'contact_address_icon', 'option' ) ) ?>"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><?php echo wp_kses_post( get_field( 'contact_address_text', 'option' ) ) ?></p>
                                    </div>
                                </div>
								<?php
								$all_contacts = get_field( 'all_contacts', 'option' );
								if ( $all_contacts ) {
									foreach ( $all_contacts as $all_contact ) {

										?>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="<?php echo esc_attr( $all_contact['icon'] ) ?>"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p>
                                                    <span><?php echo wp_kses_post( $all_contact['contacts_label'] ) ?></span>
                                                </p>
                                            </div>
                                        </div>
									<?php }
								} ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="map" class="map">
	<?php echo get_field( 'map', 'option' ) ?>
</div>
<?php get_template_part( '/template-part/newslater' ) ?>
<?php
get_footer() ?>
