<?php
# 접근제어자 protected, private, public
class ParentClass{
  public $_public = '<h1>public</h1>';
  private $_private = '<h1>private</h1>';
  protected $_protected = '<h1>protected</h1>';

}
class ChildClass extends ParentClass{
  function callPublic(){
    echo $this->_public;
  }
  function callPrivate(){
    echo $this->_private;
  }
  function callProtected(){
    echo $this->_protected;
  }
}
  $obj = new ChildClass();
  echo $obj->_public;           # 접근가능
  echo $obj->_private;          # 상속을 받은 자식이여도 접근불가.
  echo $obj->_protected;        # 접근 불가능
  echo $obj->callPublic();      # 접근가능
  echo $obj->callPrivate();     # 접근 불가능
  echo $obj->callProtected();   # 접근가능
 ?>
