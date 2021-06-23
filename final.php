<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<?php
    # final 자식클래스에서 부모 클래스의 method override 금지
    class ParentClass{
      function hello(){ # hello의 이름을 가진 method
        echo 'hello world!'; # hello world! 라는 문구를 출력
      }
      final function Alice(){
        echo 'Alice in Wonderland';
      }
    }
    class ChildClass extends ParentClass{ # extends를 통해 상속
      function hello(){
        echo 'bye world!</br>';
      }
      # 해당부분을 주석처리한 이유는 final 로 지정된 method를 재정의(override)를 하지 못하기떄문에
      # 사용을 하면 오류가 남으로 주석처리를 하였습니다.
      # override 외 상속하여 사용하는 것은 정상적으로 사용이 가능합니다.

      // function Alice(){
      //   echo 'Alice Is Girl';
      // }
    }
    $obj = new ChildClass();
    $obj->hello();
    $obj->Alice();
 ?>
