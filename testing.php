<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class testing {
    
    protected $name;
    
    public function __construct(String $name) {
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
}