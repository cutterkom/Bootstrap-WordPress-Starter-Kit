<?php

//Register Bootstrap JavaScript
add_action('wp_enqueue_scripts','register_custom_scripts');
function register_custom_scripts() {
  //bootstrap
  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('bootstrap');
}
?>