<?php

/*
Plugin Name: Cookie Compliance
Plugin URI: https://github.com/ministryofjustice/cookie-compliance
Description: Cookie consent banner
Version: 1.0.2
Author: Ministry of Justice
Author URI: https://github.com/ministryofjustice
Text Domain: cookie-compliance
Domain Path: /languages
License: MIT

*/

include 'inc/settings.php';

include 'inc/admin-page.php';

register_activation_hook( __FILE__, 'cookie_compliance_flush_rewrite_rules' );

function cookie_compliance_flush_rewrite_rules() {
    cookie_compliance_rewrite_rule();
    flush_rewrite_rules();
}
