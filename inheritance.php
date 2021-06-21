<?php
  # 상속
  class Animal{
    function run(){
      print('running..</br>');
    }
    function eat(){
      print('eat..</br>');
    }
  }
  class Human extends Animal{ # human 클래스에 animal 클래스를 상속 run을 사용할수있다.
    function fly(){
      print('Human is not fly..</br>');
    }
    function think(){
      print('thinking...</br>');
    }
    function talk(){
      print('talking...</br>');
    }
  }

  $human = new Human();
  $human->run();
  $human->fly();
  $human->eat();
 ?>
