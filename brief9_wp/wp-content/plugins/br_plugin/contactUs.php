<?php 

/**
 * Plugin Name: Contact Us plugin
  * Description: contact us plugin for brief9 .
 */

add_action('admin_menu','admin_menu');
register_activation_hook(__FILE__,'wp_tab');
register_uninstall_hook(__FILE__,'DropDatabase');

function DropDatabase(){
    global $wpdb;
    $table_name=$wpdb->prefix."contactUs";

    $wpdb -> query("DROP TABLE IF exists $table_name");
}

function wp_tab(){
    global $wpdb;
    $table_name=$wpdb->prefix."contactUs";
  
      $sql = "CREATE TABLE $table_name(id int NOT NULL PRIMARY KEY AUTO_INCREMENT, names varchar(255) NOT NULL,phone varchar(255) NOT NULL,email varchar(55) NOT NULL, messages varchar(255) NOT NULL)";
      $wpdb->query($sql);
  
  }


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