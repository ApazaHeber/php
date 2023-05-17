<?php

class Person{
  public $name, $lastname, $age;

  // We controller the data value with these functions
  // Getters : Used to obtain the value, only lecture, without argument
  // Setter : Used to modify the value , also writting, with argument
  
  public function setName($nombre){
    // in this case we controller if it is uppercase or lowercase
    $this->name = strtolower($nombre);
  }
  
  //to transform the way how return & show data 
  public function getName(){
    return ucwords($this->name);
  }

  // CONSTRUCTOR

  public function _construct(){}

?>

