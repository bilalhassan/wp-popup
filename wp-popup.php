<?php
/*
  Plugin Name: WP Popup
  Plugin URI: http://smartcatdesign.net/wp-popup
  Description: 
  Version: 1.0
  Author: SmartCat
  Author URI: http://smartcatdesign.net
  License: GPL v2
 */
?>

<?php 


register_activation_hook(__FILE__, 'my_plugin_activate');
add_action('admin_init', 'sc_popup_activation_redirect');



add_action('admin_init', 'sc_load_options_framework');
function sc_load_options_framework(){
    define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
        
}


function my_plugin_activate() {
    add_option('sc_popup_activation_redirect', true);
}

function sc_popup_activation_redirect() {
    if (get_option('sc_popup_activation_redirect', false)) {
        delete_option('sc_popup_activation_redirect');
        wp_redirect(admin_url() . 'admin.php?page=under-construction.php');
    }
}

// add new dashboard widgets
function wptutsplus_add_dashboard_widgets() {
    wp_add_dashboard_widget( 'wptutsplus_dashboard_links', 'Smartcat Plugins', 'wptutsplus_add_links_widget' );
}

function wptutsplus_add_links_widget() { ?>
    Thank you for downloading our WP Popup plugin. We have other plugins that you might enjoy.
    Click to download them for free!
    <ul>
        <li><a href="http://wordpress.org">The WordPress Codex</a></li>
        <li><a href="http://easywpguide.com">Easy WP Guide</a></li>
        <li><a href="http://www.wpbeginner.com">WP Beginner</a></li>
    </ul>
<?php }
add_action( 'wp_dashboard_setup', 'wptutsplus_add_dashboard_widgets' );