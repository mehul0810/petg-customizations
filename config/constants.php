<?php
// Bailout, if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

define('PETG_VERSION', '1.0.1');
define('PETG_PLUGIN_FILE', __FILE__);
define('PETG_PLUGIN_DIR', plugin_dir_path(PETG_PLUGIN_FILE));
define('PETG_PLUGIN_URL', plugin_dir_url(PETG_PLUGIN_FILE));
define('PETG_TEXT_DOMAIN', 'petg-customizations');

