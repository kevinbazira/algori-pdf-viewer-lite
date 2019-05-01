<?php
/**
 * Plugin Name: Algori PDF Viewer Lite
 * Plugin URI: https://github.com/kevinbazira/algori-pdf-viewer-lite/
 * Description: <strong>Algori PDF Viewer</strong> is a Gutenberg Block Plugin that enables you display PDF documents on your website. <strong>This will enable your visitors view and easily interact with your PDF files directly on your site</strong>.
 * Author: Kevin Bazira
 * Author URI: http://kevinbazira.com/
 * Version: 1.0.3
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Algori_PDF_Viewer
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
