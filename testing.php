<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class testing {
    
    protected $name;
    public $age;
    
    /*
     * @dec set the name of the person when the class being intanciated
     * @param string $name
     * @return void
     */
    public function __construct(String $name) {
        $this->name = $name;
    }
    /*
     * @dec get the name of the individual
     */
    public function getName(){
        return $this->name;
    }
    /*
     * @Dec set the age of the individual and prints it out.
     * @param string age
     * @return void
     */
    public function setAge(int $age){
        $this->age = $age;
        echo $this->age;
        
    }
}