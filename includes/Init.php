<?php
/** 
 * @package HubsFormplugin
*/
namespace Includes;

final class Init{//will not have the hability to extend the class
    // the class name should be match with the file name  HubsFormPluginActivate{
    
   public static function register_Services(){        

    }   
}

//  //Namespaces and Composer Autoload
//  use Includes\Base\Activate;//this avoid write all next code
//                         //require_once plugin_dir_path(__FILE__) . 'includes/hubs-form-plugin-activate.php';
//                         //HubsFormPluginActivate::activate();
// use Includes\Base\Deactivate;     
// use Includes\Admin\AdminPages;               

//  if( !class_exists('HubsFormPlugin')){//initialize the class

//     class HubsFormPlugin 
//     {

//             public $plugin;

//         function __construct()
//         {
           
//             $this->create_post_type();
//             $this->plugin =  plugin_basename(__FILE__);//get the base path of the plugin 
//         }
        



//             function  register(){
//                 add_action('admin_enqueue_scripts', array($this, 'enqueue'));

//                 add_action('admin_menu', array($this, 'add_admin_pages'));

//                 add_filter("plugin_action_links_$this->plugin", array( $this, 'settings_link'));//register the links 
//             }

//             public function settings_link( $links ){
//                 //add custom links 
//                 $settings_link = '<a href="admin.php?page=hubsform_plugin">Settings</a>';
//                 array_push( $links, $settings_link );
//                 return $links;
//             }


//             public function add_admin_pages(){
//                 add_menu_page('Hubspot Form Admin', 'HubsForm', 'manage_options', 'hubsform_plugin', 
//                 array($this, 'admin_index'),'dashicons-store', 110);//add the admin page on the bottom toolbar
//             }



//             function admin_index(){
//                 require_once plugin_dir_path(__FILE__) . 'templates/admin.php';  //register the admin template 
//             }


//              function create_post_type(){
//             add_action('init', array( $this, 'custom_post_type')); 
//             }


        
        
//             function custom_post_type(){
//                 //this register a pin with label books like a post type
//                 register_post_type('book',['public' => true, 'label' => 'Books']);
//             }

//             function enqueue(){
//                 //enqueue all our scripts
//                 wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
//                 wp_enqueue_script('mypluginsscript', plugins_url('/assets/myscript.js', __FILE__));
//             } 

//             function activate(){
//                 //require_once plugin_dir_path(__FILE__) . 'includes/hubs-form-plugin-activate.php';
//                 //HubsFormPluginActivate::activate();
//                 Activate::activate();
//             }
//             function deactivate(){
//                 // require_once plugin_dir_path(__FILE__) . 'includes/hubs-form-plugin-deactivate.php';
//                 // HubsFormPluginDeactivate::deactivate();
//                 Deactivate::deactivate();
//             }

//     }
 
//  $hubsformPlugin = new HubsFormPlugin();
//  $hubsformPlugin->register();

//  //activation
//  register_activation_hook(__FILE__, array($hubsformPlugin, 'activate'));

//  //deactivation
//  register_deactivation_hook(__FILE__, array($hubsformPlugin, 'deactivate'));
//}