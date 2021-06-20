<?php

class Controller {
    public $request;
    
    public function __construct() {
        $this->request = new Request;
    }
    
    public function view($arquivo, $array = null) {
        foreach ($array as $var => $value){
            ${$var} = $value;
        }
    }
}
