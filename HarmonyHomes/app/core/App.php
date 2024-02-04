<?php

class App{
    protected $Controller = "home";
    protected $method = "index";
    protected $params = array();

    public function __construct(){ 
        $URL= $this->getUrl();
        if (file_exists("../app/controller/".$URL[0].".php")){
            $this->Controller = ucfirst($URL[0]);
            unset ($URL[0]);
        }
        require "../app/controller/".$this->Controller.".php";
        $this->Controller = new $this->Controller(); 

        if(isset($URL[1])){
            if (method_exists($this->Controller,$URL[1])){
                $this->method=ucfirst($URL[1]) ;
                unset($URL[1]); 
            }
        }
        $URL = array_values($URL); 
        //$this->params = $URL;
       // print_r($URL);
        $paramsToPass = is_array($this->params) ? $this->params : array();
        call_user_func_array([$this->Controller,$this->method],$paramsToPass);
    }


    //obtaining url from search bar
    private function getUrl(){
        $url= isset ($_GET['url']) ? $_GET['url'] : "home";
        return explode("/",filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
       
    }


}



?>