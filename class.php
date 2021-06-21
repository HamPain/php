<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<?php
  class MyFileObject{
    function __construct($fname){ # 생성자부분은 다시 공부할 것..
      $this->filename = $fname;
    }
    function isFile(){
      # $this 인스턴스에 부여된 변수 filename에 접근하기위해서는
      # $this-> 라는 약속된 변수를 사용해야한다.
      # java에서 this 와 같다고 생각하면 된다.
      return is_file($this->filename);
    }
  }
  $file = new MyFileObject('data.txt');
  //$file->filename = 'data.txt'; #해당 방식은 filename을 쓰기방식
  var_dump($file->isFile());
  var_dump($file->filename); #해당 방식은 filename의 값을 가져오는 방식
  #두개의 인스턴스로 만들어진 객체는 서로 다른 내용이 출력이 된다.

  // $file2 = new MyFileObject();
  // $file2->filename = 'data2.txt';
  // var_dump($file2->isFile());
  // var_dump($file2->filename);



  /* --용어--
  MyFileObject : Class
  $file, $file2 : Instance
  Isfile : method, behaviar
  $this->filename : Instance variable, Instance field, Instance property
  */
 ?>
