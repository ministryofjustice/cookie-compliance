<?php


function cookie_consent_scripts() {  
    wp_register_style('cookie-consent-styles', plugins_url('../dist/css/style.min.css', __FILE__));
    wp_enqueue_style("cookie-consent-styles");
}
add_action('wp_enqueue_scripts', 'cookie_consent_scripts');