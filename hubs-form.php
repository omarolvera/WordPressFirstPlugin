<?php
/** 
 * @package HubsFormplugin
*/
/**
 Plugin Name: HubsForm Plugin
 Description: Custom Hubspot Form
 Version: 1.0.0
 Author: Omar Olvera Rodriguez
 License: GPLv2 or later
 */


 defined('ABSPATH') or die('Hey, What are you doing here? You silly human!');

 if( file_exists(dirname( __FILE__) . '/vendor/autoload.php'))//this is to get the 
 {
    require_once( dirname( __FILE__ ) . '/vendor/autoload.php');
 }



if( class_exists( 'Includes\\Init') ) {
    Includes\Init::register_services();
}





