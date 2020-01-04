<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Promo title text.
$promo_title = ( isset( $atts['promo_title'] ) && $atts['promo_title'] ) ? $atts['promo_title'] : '';
// Promo title color.
$promo_title_color = ( isset( $atts['promo_title_color'] ) && $atts['promo_title_color'] ) ? $atts['promo_title_color'] : '#323232';
// Promo text.
$promo_text = ( isset( $atts['promo_text'] ) && $atts['promo_text'] ) ? $atts['promo_text'] : '';
// Promo text color.
$promo_text_color = ( isset( $atts['promo_text_color'] ) && $atts['promo_text_color'] ) ? $atts['promo_text_color'] : '#323232';
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
// Promo block height.
$promo_height = ( isset( $atts['promo_height'] ) && $atts['promo_height'] ) ? $atts['promo_height'] . 'px' : 'auto';
?>

<section class = "fw-main-row section-cwp-promo-block"
		 style = "background-image: url(<?php echo esc_attr( $promo_background_image ) ?>);
		 		  background-color: <?php echo esc_attr( $promo_background_color ) ?>;
		 		  height: <?php echo esc_attr( $promo_height ) ?>">
	<div class = "fw-container">
		<div class = "fw-row">
			<div class = "fw-col-xs-12">
				<div class = "cwppb"
					 style = "background-color: <?php echo esc_attr( $promo_background_color ) ?>">
					 	<h2 class = "cwppb__title"
					 		style = "color: <?php echo esc_attr( $promo_title_color ) ?>">
					 		<?php echo esc_html( $promo_title ) ?>
					 	</h2>

					 	<p class = "cwppb__text"
					 	   style = "color: <?php echo esc_attr( $promo_text_color ) ?>">
					 		<?php echo esc_html( $promo_text ) ?>
					 	</p>

					 	<a class = "button"
					 	   href = "<?php echo esc_attr( $promo_button_link ) ?>"
					 	   target = "<?php echo esc_attr( $open_in_a_new_tab ) ?>">
					 		<?php echo esc_html( $promo_button_text ) ?>
					 	</a>
				</div><!-- .cwppb -->
			</div><!-- .fw-col-xs-12 -->
		</div><!-- .fw-row -->
	</div><!-- .fw-container -->
</section><!-- .fw-main-row.section-cwp-promo-block -->