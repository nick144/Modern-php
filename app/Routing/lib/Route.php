<?php

namespace Routing\lib;


class Route{

    private $_uri, $_method;

    public function add($uri, $method = null){
        $this->_uri[] = trim($uri, '/');

        if($method != null){
            $this->_method[] = $method;
        }
    }

    public function submit(){
        $uriGetParam = isset($_GET['uri'])? $_GET['uri']:'/';
        foreach($this->_uri as $uriKey => $uriValue){
            if(preg_match("#^$uriValue$#", $uriGetParam)){

                if(!empty($this->_method[$uriKey])){
                    $useMethod = $this->_method[$uriKey];
                    $class = 'Routing\Controller\\'.ucwords($useMethod);
                    if(class_exists($class)) new $class;
                }
            }
            
        }
    }
}