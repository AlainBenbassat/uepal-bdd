<?php
/**
 * Plugin Name: UEPAL BDD
 * Description: Code spécifique pour BDD
 * Version: 1.0
 * Author: <a href="https://www.businessandcode.eu">Alain Benbassat</a>
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function uepalbdd_custom_header() {
  if (is_page('civicrm') || is_page('acceuil')) {
    ?>
    <div id="uepalbdd-header">
      <img src="https://www.uepal.fr/wp-content/themes/uepal/dist/images/uepal-logo.svg">
    </div>
    <?php
  }
}
add_action('wp_body_open', 'uepalbdd_custom_header');

function uepalbdd_custom_footer() {
  if (is_page('civicrm')) {
    ?>
    <div id="uepalbdd-footer">
      <img alt="" width="94" height="104" src="https://www.uepal.fr/wp-content/themes/uepal/resources/../dist/images/uepal-logo-footer.svg">
    </div>
    <?php
  }
}
add_action('wp_footer', 'uepalbdd_custom_footer');

function uepalbdd_enqueue_styles() {
  if (is_page('civicrm') || is_page('acceuil')) {
    wp_enqueue_style('uepalbdd-styles', plugin_dir_url( __FILE__ ) . 'uepal-bdd.css', [], '1.0');
  }
}
add_action('wp_enqueue_scripts', 'uepalbdd_enqueue_styles');

