<?php 

/**
 * Plugin Name: Contact Us plugin
  * Description: contact us plugin for brief9 .
 */

add_action('admin_menu','admin_menu');

function admin_menu () {
    add_menu_page("Contact Menu","Contact Menu","manage_options","Contact-menu","Description_admin_page","dashicons-format-status",2 );
}

function Description_admin_page () {
    include_once("dashTable.php");
}

 function contactUs(){
    include_once("contactForm.php");
 }

 add_shortcode('contact','contactUs');