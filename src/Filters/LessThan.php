<?php

namespace Trim07\ServiceLayerSap\Filters;

class LessThan extends Filter{
    
    private $field;
    private $value;
    
    public function __construct($field, $value){
        $this->field = $field;
        $this->value = $value;
    }

    public function execute(){
        return $this->field . " lt " . $this->escape($this->value);
    }
}