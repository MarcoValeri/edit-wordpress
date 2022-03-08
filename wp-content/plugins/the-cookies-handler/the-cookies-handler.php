<?php
/**
 * Plugin Name:         The Cookie Handler
 * Description:         Handle the cookies of the website
 * Version:             1
 * Requires at least:   5.8
 * Requires PHP:        7.4
 * Author:              Marco Valeri
 * Author URI:          https://devmarco.com
 * License:             GPLv2 or later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:         the-cookie-handler
 * Domain Path:         /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Show the plugin menu in WordPress admin area
function the_cookie_handler_page() {
    add_menu_page (
        'The Cookie Handler',
        'Cookie Handelr Menu',
        'manage_options',
        'the-cookie-handler-page',
        'the_cookie_handler_page_markup',
        'deshicons-wordpress-alt',
        100
    );
}
add_action('admin_menu', 'the_cookie_handler_page');

function the_cookie_handler_page_markup() {
    // Double check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }

    ?>
    <div class="wrap"> <!-- wrap is a class that WordPress uses in admin area -->
        <h1><?php esc_html_e(get_admin_page_title()) ?></h1>
        <p><?php esc_html_e('Some content', 'the-cookie-handler-page'); ?></p>
    </div>
    <?php
}

?>