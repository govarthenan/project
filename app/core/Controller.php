<?php
class Controller{
    public static function view($view,$data = array()){
        extract($data);
        if(file_exists("../app/view/".$view."-view.php")){
           // return file_get_contents (ROOT."/../app/view/".$view."-view.php");
           require ("../app/view/".$view."-view.php");
        }else{
           // return file_get_contents (ROOT."/../app/view/404-view.php");
           require  ("../app/view/404-view.php");
        }

    }
    
    
}