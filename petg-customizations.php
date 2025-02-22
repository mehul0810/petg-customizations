<?php
/**
 * Plugin Name: PetGratitude Customizations
 * Description: Customizations for the PetGratitude website.
 * Version: 1.0.1
 * Author: Mehul Gohil
 * Author URI: https://mehulgohil.com
 */

namespace MG\PetG;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants.
require_once __DIR__ . '/config/constants.php';

// Ensure Composer autoloader is loaded.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
} else {
    // Optionally display an admin notice if autoloader is missing.
    add_action( 'admin_notices', function() {
        echo '<div class="error"><p>Composer autoloader not found. Please run <code>composer install</code> in the plugin directory.</p></div>';
    } );
    return;
}

// Initialize the plugin.
$plugin = new Plugin();
$plugin->register();