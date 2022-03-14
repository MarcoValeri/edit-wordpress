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

    add_submenu_page(
        'the-cookie-handler-page',
        'Menu 1',
        'Feature 1',
        'manage_options',
        'the-cookie-handler-page-menu-1',
        'the_cookie_handler_page_markup'
    );

    add_submenu_page(
        'the-cookie-handler-page',
        'Menu 2',
        'Feature 2',
        'manage_options',
        'the-cookie-handler-page-menu-2',
        'the_cookie_handler_page_markup'
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

function the_cookie_handler_subpage_markup() {

    // Double checj user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e(get_admin_page_title()); ?></h1>
        <p><?php esc_html_e('Some content.', 'the-cookie-handler-page'); ?></p>
    </div>
    <?php
}

function the_cookie_handler_default_sub_pages() {
    // Can add page as a submenu using the following:
    // add_dashboard_page()
    // add_posts_page()
    // add_media_page()
    // add_pages_page()
    // add_comments_page()
    // add_theme_page()
    // add_plugins_page()
    // add_management_page()
    // add_options_page()

    add_theme_page(
        __('Cool Default Sub Page', 'the-cookie-handler'),
        __('Custom Sub Page', 'the-cookie-handler'),
        'manage_options',
        'the-cookie-handler-subpage',
        'the_cookie_handler_page_markup'
    );
}
add_action('admin_menu', 'the_cookie_handler_default_sub_pages');

?>