<?php
  # override : 부모클래스에서 상속된 자식클래스에서 메소드를 재정의 하는것을 의미
  # 해당 기능은 이름이 같은 메소드에서 다른기능을 구현할 때 사용한다.

class ParentClass{
  function callMethod($param){
    echo "<h1>Parent {$param}</h1>";
  }
}
# override 를 하였어도 parent를 먼저 사용하면 부모 클래스의 메소드를 사용할 수 있다.
class ChildClass extends ParentClass{
  function callMethod($param){
    parent::callMethod($param);
    echo "<h1>Child {$param}</h1>";
    # 부모클래스의 method를 호출후 재정의(override)를 한 것이다.
  }
}
  $obj = new ChildClass();
  $obj ->callMethod('method');


 ?>
