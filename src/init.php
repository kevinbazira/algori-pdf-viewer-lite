<?php
/**
 * Blocks Initializer
 *
 * Enqueue CSS/JS of all the blocks.
 *
 * @since   1.0.0
 * @package Algori_PDF_Viewer
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue Gutenberg block assets for both frontend + backend.
 *
 * `wp-blocks`: includes block type registration and related functions.
 *
 * @since 1.0.0
 */
function algori_pdf_viewer_cgb_block_assets() {
	
	// Styles.
	wp_enqueue_style(
		'algori_pdf_viewer-cgb-style-css', // Handle.
		plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ), // Block style CSS.
		array( 'wp-blocks' ) // Dependency to include the CSS after it.
		// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.style.build.css' ) // Version: filemtime — Gets file modification time.
	);
} // End function algori_pdf_viewer_cgb_block_assets().

// Hook: Frontend assets.
add_action( 'enqueue_block_assets', 'algori_pdf_viewer_cgb_block_assets' );

/**
 * Enqueue Gutenberg block assets for backend editor.
 *
 * `wp-blocks`: includes block type registration and related functions.
 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 1.0.0
 */
function algori_pdf_viewer_cgb_editor_assets() {
	
	// Localize path for Plugin Directory, so that I can acess it in JavaScript.
	// $algori_pdf_viewer_plugin_directory_path = plugins_url();
	// wp_localize_script( 'algori_pdf_viewer-cgb-block-path', 'algoriPDFViewerPluginDirectoryPath', $algori_pdf_viewer_plugin_directory_path );
	
	/*$js_src = plugins_url( 'src/block/display-php-value.js', dirname( __FILE__ ) ); // plugin_dir_url( __FILE__ ) . 'display-php-value.js';
	wp_enqueue_script( 'fe-display-php-value', $js_src, [], '0.1.0' );
	$my_php_value = 'Hello Everybody 2';
	wp_localize_script( 'fe-display-php-value', 'feWPLocalizeScriptDemo', array( 'phpValueToDisplay' => $my_php_value ) );*/
	
	// Scripts.
	wp_enqueue_script(
		'algori_pdf_viewer-cgb-block-js', // Handle.
		plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ), // Block.build.js: We register the block here. Built with Webpack.
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ), // Dependencies, defined above.
		// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.build.js' ), // Version: filemtime — Gets file modification time.
		true // Enqueue the script in the footer.
	);
	
	// Localize path for Plugin Directory, so that I can acess it in JavaScript attached to 'algori_pdf_viewer-cgb-block-js' above.
	$algori_pdf_viewer_plugin_directory_path = plugins_url();
	wp_localize_script( 'algori_pdf_viewer-cgb-block-js', 'algoriPDFViewerPluginDirectoryPath', $algori_pdf_viewer_plugin_directory_path );
	
	// Styles.
	wp_enqueue_style(
		'algori_pdf_viewer-cgb-block-editor-css', // Handle.
		plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ), // Block editor CSS.
		array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
		// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.editor.build.css' ) // Version: filemtime — Gets file modification time.
	);
	
} // End function algori_pdf_viewer_cgb_editor_assets().

// Hook: Editor assets.
add_action( 'enqueue_block_editor_assets', 'algori_pdf_viewer_cgb_editor_assets' );


