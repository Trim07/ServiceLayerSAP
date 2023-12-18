<?php

namespace Trim07\ServiceLayerSap\Filters;

class Raw extends Filter{
    
    private $string;
    
    public function __construct($string){
        $this->string = $string;
    }

    public function execute(){
        return $this->string;
    }
}