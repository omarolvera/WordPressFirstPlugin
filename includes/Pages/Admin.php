<?php

namespace Includes\Pages;

class Admin{

    function __construct()
    {
        
    }
public function register(){
    add_action('admin_menu', array($this, 'add_admin_pages'));
}
    
}