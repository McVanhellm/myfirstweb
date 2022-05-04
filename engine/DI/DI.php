<?php

namespace Enegine\DI;

class DI {
 
    /* 
    * @var array
    */
    private $container = [];
    /**
     * set
     *
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public function set($key, $value){
    
    $this ->container[$key]=$value;
    
    return $this;
    }
    /**
     * get
     *
     * @param  mixed $key
     * @return void
     */
    public function get($key)
    {
        return $this-> has($key);
    }    
    /**
     * has
     *
     * @param  mixed $key
     * @return void
     */
    public function has($key){

        return isset($this->container[$key]);
    }
}