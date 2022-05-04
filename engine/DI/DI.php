<?php

namespace Enegine\DI;

class DI {
 
    /* 
    * @var array
    */
    private $container = [];
    
    public function set($key, $value){
    
    $this ->container[$key]=$value;
    
    return $this;
    }
}