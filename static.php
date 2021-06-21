<?php
# static 변수 혹은 class는 객체선언 없이 사용이 가능하다.
# 객체선언 없이 사용이 가능하다고 해서 너무 많이사용하면 안된다.

  class parson{
    private $name;
    private static $count = 0;
    function __construct($name){
      $this->name = $name;
      self::$count = self::$count + 1;
    }
    function enter(){
      echo "<h1>Enter ".$this->name." ".self::$count."th</h1>";
    }
    static function getCount(){
      return self::$count;
    }
  }
  $p1 = new parson('Ttoja');
  $p1->enter();
  $p2 = new parson('Jin1');
  $p2->enter();
  $p3 = new parson('Yusung');
  $p3->enter();
  $p4 = new parson('Liqua');
  $p4->enter();
  echo person::getConut();
 ?>
