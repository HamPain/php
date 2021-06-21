<?php
  #access modifier and property visibility
  #php에도 get set method가 있음.
  class Person{
    private $name;

    public function hello(){
      print("hello wolr have a{$this->good}.");
    }
    public function setgood($good){

    }
  }
 ?>
