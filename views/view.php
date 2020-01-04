<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Promo title text.
$promo_title = ( isset( $atts['promo_title'] ) && $atts['promo_title'] ) ? $atts['promo_title'] : '';
// Promo text.
$promo_text = ( isset( $atts['promo_text'] ) && $atts['promo_text'] ) ? $atts['promo_text'] : '';
// Promo background image.
$promo_background_image = ( isset( $atts['promo_background_image'] ) && $atts['promo_background_image'] ) ? $atts['promo_background_image']['url'] : '';
// Promo background color.
$promo_background_color = ( isset( $atts['promo_background_color'] ) && $atts['promo_background_color'] ) ? $atts['promo_background_color'] : '#f9f9f9';
// Promo button link.
$promo_button_link = ( isset( $atts['promo_button_link'] ) && $atts['promo_button_link'] ) ? $atts['promo_button_link'] : '#';
// Promo button text.
$promo_button_text = ( isset( $atts['promo_button_text'] ) && $atts['promo_button_text'] ) ? $atts['promo_button_text'] : esc_html__( 'Перейти', 'mebel-laim' );
// Open promo page in a new tab or not.
$open_in_a_new_tab = ( isset( $atts['open_in_a_new_tab'] ) && ( $atts['open_in_a_new_tab'] === 'yes' ) ) ? '_blank' : '';
?>

<section class = "fw-main-row section-cwp-promo-block"
		 style = "background-color: <?php echo esc_attr( $promo_background_color ) ?>">
	<div class = "fw-container">
		<div class = "fw-row">
			<div class = "fw-col-xs-12">
				<div class = "cwppb"
					 style = "background-image: url(<?php echo esc_attr( $promo_background_image ) ?>);
					 		  background-color: <?php echo esc_attr( $promo_background_color ) ?>">
					 	<h3 class = "cwppb__title">
					 		<?php echo esc_html( $promo_title ) ?>
					 	</h3>

					 	<p class = "cwppb__text">
					 		<?php echo esc_html( $promo_text ) ?>
					 	</p>

					 	<a href = "<?php echo esc_attr( $promo_button_link ) ?>" target = "<?php echo esc_attr( $open_in_a_new_tab ) ?>">
					 		<?php echo esc_html( $promo_button_text ) ?>
					 	</a>
					 </div>
			</div>
		</div>
	</div>
</section>