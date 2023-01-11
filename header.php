<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-wrap">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <p class="mb-0 phone pl-md-2">
								<?php
								$phone = get_field( 'phone', 'option' );
								$email = get_field( 'email', 'option' );
								?>
                                <a href="tel:<?php if ( $phone ) {
									echo esc_html( $phone );
								} ?>" class="mr-2"><span class="fa fa-phone mr-1"></span><?php if ( $phone ) {
										echo esc_html( $phone );
									} ?></a>
                                <a href="mailto:<?php if ( $email ) {
									echo esc_html( $email );
								} ?>"><span class="fa fa-paper-plane mr-1"></span> <?php if ( $email ) {
										echo esc_html( $email );
									} ?></a>
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end">
                            <div class="social-media">
                                <p class="mb-0 d-flex">
									<?php
									$socials = get_field( 'header_social', 'option' );
									if ( $socials ) {
										foreach ( $socials as $social ) {
											?>
                                            <a href="<?php echo esc_url( $social['link'] ) ?>"
                                               class="d-flex align-items-center justify-content-center"><span
                                                        class="<?php echo esc_attr( $social['icon'] ) ?>"><i
                                                            class="sr-only"><?php echo esc_html( $social['icon_name'] ) ?></i></span></a>
											<?php
										}
									}
									?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

		<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
		if ( has_custom_logo() ) {
			echo '<a class="navbar-brand" href="' . esc_url( site_url() ) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
		} else {
			echo '<a class="navbar-brand" href="' . esc_url( site_url() ) . '">' . get_bloginfo( 'name' ) . '</a>';
		}
		?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> <?php echo esc_html__( 'Menu', 'accounting' ) ?>
        </button>
		<?php
		wp_nav_menu( array(
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'ftco-nav',
			'menu_class'      => 'menu navbar-nav ml-auto',
			'echo'            => true,
			'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			'walker'          => new WP_Bootstrap_Navwalker(),
			'theme_location'  => 'main-menu',
		) );
		?>
    </div>
</nav>
<!-- END nav -->