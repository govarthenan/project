<?php
class Controller{
    public function view($view,$data = array()){
        extract($data);
        if(file_exists("../app/view/".$view."-view.php")){
            return file_get_contents("../app/view/".$view."-view.php");
        }else{
            return file_get_contents("../app/view/404-view.php");
        }

    }
    
}