<?php
/** 
 * @package HubsFormplugin
*/
namespace Includes\Base;

class Activate{// the class name should be match with the file name  HubsFormPluginActivate{
    public static function activate(){
        flush_rewrite_rules();//Remove rewrite rules and then recreate rewrite rules
    }   
}