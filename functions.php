<?php
/**
 * Twenty Twenty Child functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Child
 * @since Twenty Twenty Child 1.0
 */

/**
 * Enqueue styles and scripts.
 *
 * @author Greg Rickaby <greg@webdevstudios.com>
 * @since 1.0.0
 */
function twentytwentychild_enqueue() {
	// Enqueue parent theme style.
	wp_enqueue_style( 'twentytwenty', get_template_directory_uri() . '/style.css', null, wp_get_theme()->parent()->get( 'Version' ) );

	// Enqueue child theme style.
	wp_enqueue_style( 'twentytwenty-child-style', get_stylesheet_directory_uri() . '/build/index.css', [ 'twentytwenty' ], wp_get_theme()->get( 'Version' ) );

	// Enqueue child theme script.
	wp_enqueue_script( 'twentytwenty-child-script', get_stylesheet_directory_uri() . '/build/index.js', [ 'twentytwenty-js' ], wp_get_theme()->get( 'Version' ), true );
	wp_script_add_data( 'twentytwenty-child-script', 'async', true );
}
add_action( 'wp_enqueue_scripts', 'twentytwentychild_enqueue' );

/**
 * Dequeue styles and scripts.
 *
 * @author Greg Rickaby <greg@webdevstudios.com>
 * @since 1.0.0
 */
function twentytwentychild_dequeue() {
	// Don't enqueue child theme style.css. Child theme uses a custom stylesheet.
	wp_dequeue_style( 'twentytwenty-style' );
}
add_action( 'wp_enqueue_scripts', 'twentytwentychild_dequeue', 11 );

/**
 * Display Exif data. [exif id="" lens="" location=""]
 *
 * @author Greg Rickaby <greg@webdevstudios.com>
 * @since 1.0.0
 * @param array $atts Possible arguments, filename is required, lens and location are optional.
 * @return string
 */
function twentytwentychild_show_exif( $atts ) {

	// Set defaults.
	$atts = shortcode_atts(
		array(
			'id'       => '',
			'lens'     => '',
			'location' => '',
		),
		$atts
	);

	// No ID? Bail...
	if ( empty( $atts['id'] ) ) {
		return false;
	}

	// Get attachment meta for image ID.
	$data = get_post_meta( $atts['id'], '_wp_attachment_metadata' );

	// No data? Bail...
	if ( empty( $data ) ) {
		return;
	}

	// Destructure image meta array and set variables.
	[
		'aperture'          => $aperture,
		'camera'            => $camera,
		'created_timestamp' => $timestamp,
		'focal_length'      => $focal_length,
		'iso'               => $iso,
		'shutter_speed'     => $shutter_speed,
	] = $data[0]['image_meta'];

	ob_start();
	?>

	<p class="exif-title"><?php esc_html_e( 'Exif Data:', 'twentytwenty' ); ?></p>
	<ul class="exif-list">
		<?php echo ( $timestamp ) ? '<li class="exif-item"><strong>' . esc_html__( 'Date Taken', 'twentytwenty' ) . '</strong>: ' . esc_html( date( 'F d, Y', $timestamp ) ) . '</li>' : ''; ?>
		<?php echo ( $camera ) ? '<li class="exif-item"><strong>' . esc_html__( 'Location', 'twentytwenty' ) . '</strong>: ' . wp_kses_post( $atts['location'] ) . '</li>' : ''; ?>
		<?php echo ( $camera ) ? '<li class="exif-item"><strong>' . esc_html__( 'Camera', 'twentytwenty' ) . '</strong>: ' . esc_html( $camera ) . '</li>' : ''; ?>
		<?php echo ( $atts['lens'] ) ? '<li class="exif-item"><strong>' . esc_html__( 'Lens', 'twentytwenty' ) . '</strong>: ' . wp_kses_post( $atts['lens'] ) . '</li>' : ''; ?>
		<?php echo ( $aperture ) ? '<li class="exif-item"><strong>' . esc_html__( 'Aperture', 'twentytwenty' ) . '</strong>: ƒ/' . esc_html( $aperture ) . '</li>' : ''; ?>
		<?php echo ( $iso ) ? '<li class="exif-item"><strong>' . esc_html__( 'ISO', 'twentytwenty' ) . '</strong>: ' . esc_html( $iso ) . '</li>' : ''; ?>
		<?php echo ( $shutter_speed ) ? '<li class="exif-item"><strong>' . esc_html__( 'Shutter Speed', 'twentytwenty' ) . '</strong>: 1/' . esc_html( round( 1 / $shutter_speed ) ) . '</li>' : ''; ?>
		<?php echo ( $focal_length ) ? '<li class="exif-item"><strong>' . esc_html__( 'Focal Length', 'twentytwenty' ) . '</strong>: ' . esc_html( $focal_length ) . 'mm</li>' : ''; ?>
	</ul>

	<?php
	return ob_get_clean();
}
add_shortcode( 'exif', 'twentytwentychild_show_exif' );

/**
 * Force WP Rocket to respect WP_CACHE constant.
 */
add_filter( 'rocket_set_wp_cache_constant', '__return_false' );
