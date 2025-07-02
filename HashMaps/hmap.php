<?php

class MyHashMap {
    
    protected $mp;
    /**
     */
    function __construct() {
        $this->mp = [];
    }
  
    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        if(array_key_exists($key,$this->mp)){
            $this->mp[$key] = $value;
        }else{
            $this->mp[] = [$key=>$value];
        }

    }
  
    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if(array_key_exists($key,$this->mp)){
            return (int)$this->mp[$key];
        }else{
            return -1;
        }
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        if(array_key_exists($key,$this->mp)){
            unset($this->mp[$key]);
        }
    }
}

/**
 * Your MyHashMap object will be instantiated and called as such:
 * $obj = MyHashMap();
 * $obj->put($key, $value);
 * $ret_2 = $obj->get($key);
 * $obj->remove($key);
 */