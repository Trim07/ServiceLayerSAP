<?php

namespace Trim07\ServiceLayerSap\Filters;

class Equal extends Filter{
    
    private $field;
    private $value;
    
    public function __construct($field, $value){
        $this->field = $field;
        $this->value = $value;
    }

    public function execute(){
        return $this->field . " eq " . $this->value;
    }
}