<?php 

/**
 * Plugin Name: Impsyde Code Test
 * Plugin URL:
 * Description: This is for a coding test with Impsyde to test my skill in PHP
 * Version: 0.1
 * Author: Jaleen Bowens-Kelly
 * Author URL:
 * License: MIT
 */

add_action( 'wp_body_open', 'echo_head' );

 //A simple function to get the user on the website
 function get_user()
 {
     if (!is_user_logged_in( ))
     {
         return "to" . get_bloginfo( 'name' );
     }

     else
     {
         $current_user = wp_get_current_user(  );
         return $current_user -> user_login;
     }
 }

 //Print to an h3 on the page with the text of User Sorting Plugin Installed!
 function echo_head()
 {
     echo '<h3 class ="eh">User Sorting Plugin installed!' , get_bloginfo( 'name' ) . '</h3>';
 }