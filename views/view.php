<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Promo background image and other style.
 */
switch ( $atts['background_image_quality'] ) {
	case 'thumbnail':
		$promo_background_image = ( isset( $atts['promo_background_image'] ) && $atts['promo_background_image'] ) ?
								  $atts['promo_background_image']['sizes']['thumbnail']['url'] :
								  '';
		break;

	case 'medium':
		$promo_background_image = ( isset( $atts['promo_background_image'] ) && $atts['promo_background_image'] ) ?
								  $atts['promo_background_image']['sizes']['medium']['url'] :
								  '';
		break;

	case 'large':
		$promo_background_image = ( isset( $atts['promo_background_image'] ) && $atts['promo_background_image'] ) ?
								  $atts['promo_background_image']['sizes']['large']['url'] :
								  '';
		break;
	
	default:
		$promo_background_image = ( isset( $atts['promo_background_image'] ) && $atts['promo_background_image'] ) ?
								  $atts['promo_background_image']['sizes']['full']['url'] :
								  '';
		break;
}
// Background attachment.
$background_attachment = ( isset( $atts['is_background_image_fixed'] ) && $atts['is_background_image_fixed'] ) ? 'fixed' : 'scroll';

/**
 * Full-width section or container-size.
 */
switch ( $atts['promo_is_full_width'] ) {
	case true:
		$background_image_for_section = $promo_background_image;
		$background_image_for_block = '';

		$background_attachment_for_section = $background_attachment;
		$background_attachment_for_block = 'scroll';
		break;
	
	default:
		$background_image_for_section = '';
		$background_image_for_block = $promo_background_image;

		$background_attachment_for_section = 'scroll';
		$background_attachment_for_block = $background_attachment;
		break;
}

/**
 * If background image has overlay.
 */
switch ( $atts['is_overlay']['choice'] ) {
	case 'yes':
		$overlay_style = 'background-color: ' . ( ( isset( $atts['is_overlay']['yes']['overlay_color'] ) && $atts['is_overlay']['yes']['overlay_color'] ) ?
						 $atts['is_overlay']['yes']['overlay_color'] :
						 '#000' ) . ';';
		$overlay_style .= 'opacity: ' . ( ( isset( $atts['is_overlay']['yes']['overlay_opacity'] ) && $atts['is_overlay']['yes']['overlay_opacity'] ) ?
						   $atts['is_overlay']['yes']['overlay_opacity'] :
						   '1' ) . ';';
		break;
	
	default:
		$overlay_style = 'background-color: transparent; opacity: 1;';
		break;
}
// Promo background color.
$promo_background_color = ( isset( $atts['promo_background_color'] ) && $atts['promo_background_color'] ) ? $atts['promo_background_color'] : '#f9f9f9';
// Promo vertical and horizontal padding value.
$promo_padding_vertical = ( isset( $atts['promo_padding_vertical'] ) && $atts['promo_padding_vertical'] ) ? $atts['promo_padding_vertical'] . 'px' : '0';
$promo_padding_horizontal = ( isset( $atts['promo_padding_horizontal'] ) && $atts['promo_padding_horizontal'] ) ? $atts['promo_padding_horizontal'] . 'px' : '0';

/**
 * Promo title text and style.
 */
$promo_title = ( isset( $atts['promo_title'] ) && $atts['promo_title'] ) ? $atts['promo_title'] : '';
// Font size.
$promo_title_style = 'font-size: ' . ( ( isset( $atts['promo_title_size'] ) && $atts['promo_title_size'] ) ? $atts['promo_title_size'] . 'px;' : '50px;' );
// Margin bottom.
$promo_title_style .= 'margin-bottom: ' . ( ( isset( $atts['promo_title_margin'] ) && $atts['promo_title_margin'] ) ? $atts['promo_title_margin'] . 'px;' : '15px;' );
// Text color.
$promo_title_style .= 'color: ' . ( ( isset( $atts['promo_title_color'] ) && $atts['promo_title_color'] ) ? $atts['promo_title_color'] : '#323232' ) . ';';
// Position.
switch ( $atts['promo_title_position'] ) {
	case 'center':
		$promo_title_style .= 'text-align: center;';
		break;

	case 'right':
		$promo_title_style .= 'text-align: right;';
		break;

	default:
		$promo_title_style .= 'text-align: left;';
		break;
}

/**
 * Promo text and style.
 */
$promo_text = ( isset( $atts['promo_text'] ) && $atts['promo_text'] ) ? $atts['promo_text'] : '';
// Font size.
$promo_text_style = 'font-size: ' . ( ( isset( $atts['promo_text_size'] ) && $atts['promo_text_size'] ) ? $atts['promo_text_size'] . 'px;' : '18px;' );
// Promo text color.
$promo_text_style .= 'color: ' . ( ( isset( $atts['promo_text_color'] ) && $atts['promo_text_color'] ) ? $atts['promo_text_color'] : '#323232' ) . ';';
// Position.
switch ( $atts['promo_text_position'] ) {
	case 'center':
		$promo_text_style .= 'text-align: center;';
		break;

	case 'right':
		$promo_text_style .= 'text-align: right;';
		break;

	default:
		$promo_text_style .= 'text-align: left;';
		break;
}

/**
 * Promo button link, text and other.
 */
$promo_button_link = ( isset( $atts['promo_button_link'] ) && $atts['promo_button_link'] ) ? $atts['promo_button_link'] : '#';
// Promo button text.
$promo_button_text = ( isset( $atts['promo_button_text'] ) && $atts['promo_button_text'] ) ? $atts['promo_button_text'] : esc_html__( 'Перейти', 'mebel-laim' );
// Open promo page in a new tab or not.
$open_in_a_new_tab = ( isset( $atts['open_in_a_new_tab'] ) && ( $atts['open_in_a_new_tab'] === 'yes' ) ) ? '_blank' : '';
// Position.
switch ( $atts['promo_button_position'] ) {
	case 'center':
		$promo_button_wrapper_style = 'text-align: center;';
		break;

	case 'right':
		$promo_button_wrapper_style = 'text-align: right;';
		break;

	default:
		$promo_button_wrapper_style = 'text-align: left;';
		break;
}
// Margin top.
$promo_button_wrapper_style .= 'margin-top: ' . ( ( isset( $atts['promo_button_margin'] ) && $atts['promo_button_margin'] ) ? $atts['promo_button_margin'] . 'px;' : '0;' );

// ALL STYLES FOR SECTION.
$section_styles = 'background-image: url(' . $background_image_for_section . ');
				   background-color: ' . $promo_background_color . ';
				   background-attachment: ' . $background_attachment_for_section;
// ALL STYLES FOR BLOCK.
$block_styles = 'background-image: url(' . $background_image_for_block . ');
				 padding: ' . $promo_padding_vertical . ' ' . $promo_padding_horizontal . ';
				 background-attachment: ' . $background_attachment_for_block;
?>

<section class = "fw-main-row section-cwp-promo-block" style = "<?php echo esc_attr( $section_styles ) ?>">

	<?php
	/**
	 * If it's a full-width promo - place overlay in here.
	 */
	if ( isset( $atts['promo_is_full_width'] ) && $atts['promo_is_full_width'] ) {
		?>
		<div class = "cwppb-overlay" style = "<?php echo esc_attr( $overlay_style ) ?>"></div>
		<?php
	}
	?>

	<div class = "fw-container">
		<div class = "fw-row">
			<div class = "fw-col-xs-12">
				<div class = "cwppb" style = "<?php echo esc_attr( $block_styles ) ?>">

					<?php
					/**
					 * If it's NOT a full-width promo - place overlay in here.
					 */
					if ( isset( $atts['promo_is_full_width'] ) && !$atts['promo_is_full_width'] ) {
						?>
						<div class = "cwppb-overlay" style = "<?php echo esc_attr( $overlay_style ) ?>"></div>
						<?php
					}
					?>

				 	<h2 class = "cwppb__title" style = "<?php echo esc_attr( $promo_title_style ) ?>">
				 		<?php echo esc_html( $promo_title ) ?>
				 	</h2>

				 	<div class = "cwppb-text-wrapper" style = "<?php echo esc_attr( $promo_text_style ) ?>">
				 		<p class = "cwppb__text">
					 		<?php echo esc_html( $promo_text ) ?>
					 	</p>
				 	</div>

				 	<div class = "cwppb-button-wrapper" style = "<?php echo esc_attr( $promo_button_wrapper_style ) ?>">
				 		<a class = "button"
					 	   href = "<?php echo esc_attr( $promo_button_link ) ?>"
					 	   target = "<?php echo esc_attr( $open_in_a_new_tab ) ?>">
					 		<?php echo esc_html( $promo_button_text ) ?>
					 	</a>
				 	</div>
				</div><!-- .cwppb -->
			</div><!-- .fw-col-xs-12 -->
		</div><!-- .fw-row -->
	</div><!-- .fw-container -->
</section><!-- .fw-main-row.section-cwp-promo-block -->