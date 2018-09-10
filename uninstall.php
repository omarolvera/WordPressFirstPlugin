<?php
/** 
 * Trigger this file on Plugin uninstall
 * @package HubsFormplugin
*/
//uninstall

if(!defined('WP_UNINSTALL_PLUGIN')){
die;
}

//clear database stored data
$books = get_posts('post_type' => array('book','numberposts'=> -1));

foreach($books as $book){
    //force to delete post doesn´t matter is draf or disable etc.
    //delete all thedata in the relationships with wp_postmeta and term_relationships
    wp_post_delete($book->ID,true);

}

register_uninstall_hook(__FILE__, array($hubsformPlugin, 'uninstall'));