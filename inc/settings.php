<?php

defined('ABSPATH') || exit;

/**
 * Enqueue styles and script
 */
function cookie_compliance_scripts() {
    wp_enqueue_style("cookie-compliance-tailwind", plugins_url('../dist/tailwind.css', __FILE__), [], COOKIE_COMPLIANCE_VERSION);

    wp_enqueue_style("cookie-compliance-styles", plugins_url('../dist/styles.css', __FILE__), [], COOKIE_COMPLIANCE_VERSION);

    wp_enqueue_script('cookie-consent-script', plugins_url('../dist/cookie-script.js', __FILE__), [], COOKIE_COMPLIANCE_VERSION);
}


/**
 * Make the plugin settings available to the enqueued script.
 *
 * This is similar to wp_localize_script, but uses the `type="application/json"` attribute.
 * Meaning arbitrary JS execution is not possible, and strict CSP policies are satisfied.
 */
function cookie_compliance_script_data()  {
    $options = get_option('cookie_compliance_settings');
    echo '<script type="application/json" id="cookie_consent_object">' . wp_json_encode( ['gtmcode' => esc_attr($options['gtm_code']), 'isSsl' => is_ssl()] ) . '</script>';
}


/**
 * Register query variable for user facing settings page
 */
function cookie_compliance_register_query_vars($vars) {
    $vars[] = 'cookie_settings_page';
    return $vars;
}

add_filter('query_vars', 'cookie_compliance_register_query_vars');


/**
 * Handle the custom endpoint for the user settings page
 */ 
function cookie_compliance_render_user_settings() {
    global $wp_query;

    if (isset($wp_query->query_vars['cookie_settings_page'])) {
        // Load specific template file
        include(plugin_dir_path(dirname(__FILE__)) . 'templates/cookie-settings-page.php');
        exit;
    }
}


/**
 * Render the cookie banner - called on wp_body_open
 */
function cookie_compliance_render_banner() {
    include(plugin_dir_path(dirname(__FILE__)) . 'templates/cookie-banner.php');
}


/**
 * Initialise the cookie compliance actions for the site frontend - only if gtm_code is set.
 */
function cookie_compliance_init() {
    $options = get_option('cookie_compliance_settings');
    if (!empty($options) && array_key_exists('gtm_code', $options) && !empty($options['gtm_code']) ) {
        // Add rewrite rule for endpoint
        add_rewrite_rule('^(?!.*-)\bcookies\b$', 'index.php?cookie_settings_page=true', 'top');
        // Render the user settings page
        add_action('template_redirect', 'cookie_compliance_render_user_settings');
        // Render the cookie banner
        add_action('wp_body_open', 'cookie_compliance_render_banner', 11);
        // Enqueue styles and script
        add_action('wp_enqueue_scripts', 'cookie_compliance_scripts');
        // Enqueue script data
        add_action('wp_print_scripts', 'cookie_compliance_script_data');
    }
}

add_action('init', 'cookie_compliance_init');
