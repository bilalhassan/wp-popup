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
function my_plugin_activate() {
    add_option('sc_popup_activation_redirect', true);
    sc_popup_register_options();
}

function sc_popup_register_options(){
    // declare options array
    $sc_popup_options = array(
        'sc_popup_title' => 'Popup Title',
        'sc_popup_subtitle' => 'Popup subtitle',
        'sc_popup_cta_text' => 'Click Here',
        'sc_popup_cta_url' => 'http://smartcatdesign.net',
        'sc_popup_media_type' => '',
        'sc_popup_media_link' => '',
        'sc_popup_mode' => 'test',
        'sc_popup_page' => 'all',
        'sc_popup_days' => '7',
        'sc_popup_color' => '#005580',
        'sc_popup_facebook' => 'http://smartcatdesign.net',
        'sc_popup_twitter' => 'http://smartcatdesign.net',
        'sc_popup_gplus' => 'http://smartcatdesign.net',
        'sc_popup_linkedin' => 'http://smartcatdesign.net',
        'sc_popup_shortcode' => null
    );
    // check if option is set, if not, add it
    foreach($sc_popup_options as $option_name => $option_value){
        if(get_option($option_name) === false){
            add_option($option_name,$option_value);
        }
    }
}

add_action('admin_init', 'sc_popup_activation_redirect');
function sc_popup_activation_redirect() {
    if (get_option('sc_popup_activation_redirect', false)) {
        delete_option('sc_popup_activation_redirect');
        wp_redirect(admin_url() . 'options-general.php?page=wp-popup.php');
    }
}

// add new dashboard widgets
add_action('wp_dashboard_setup', 'wptutsplus_add_dashboard_widgets');
function wptutsplus_add_dashboard_widgets() {
    wp_add_dashboard_widget('wptutsplus_dashboard_links', 'Smartcat Plugins', 'wptutsplus_add_links_widget');
}
function wptutsplus_add_links_widget() { ?>
    Thank you for downloading our WP Popup plugin. We have other plugins that you might enjoy.
    Click to download them for free!
    <ul>
        <li><a href="http://wordpress.org">The WordPress Codex</a></li>
        <li><a href="http://easywpguide.com">Easy WP Guide</a></li>
        <li><a href="http://www.wpbeginner.com">WP Beginner</a></li>
    </ul>
<?php
}

add_action('admin_menu','sc_popup_menu');
function sc_popup_menu(){
    add_options_page('WP Popup', 'WP Popup Settings', 'administrator', 'wp-popup.php', 'sc_popup_options');
}
function sc_popup_options(){
    include_once 'inc/options.php';
}

add_action('wp_head','show_popup');
function show_popup(){
    wp_register_style( 'sc_popup_style', plugins_url() . '/wp-popup/style/popup.css', false, '1.0' );
    wp_register_style( 'sc_popup_font', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,600', false);

    wp_enqueue_style( 'sc_popup_font' );
    wp_enqueue_style( 'sc_popup_style' );
    
    wp_enqueue_script('sc_popup_script', plugins_url() . '/wp-popup/script/popup.js', array('jquery'), '1.0');
    include_once 'inc/popup.php';
}