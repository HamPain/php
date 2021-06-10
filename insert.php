<?php
#mysql에 connect 하기위한 초기 명령어, 비밀번호 같은 경우는 절대 123456같은 비밀번호를 사용해서는 안된다.
  $conn = mysqli_connect("localhost","root","123456","opentutorials",3307);
  $sql  = "
      INSER INTO topic (
          title,
          description,
          created
      ) VALUES (
          'Apax',
          'Apax is... God',
          NOW()
          )";
  $result = mysqli_query($conn, $sql);
  if($result === false){
      echo 'Insert 성공';
  } else {
      echo mysqli_error($conn);
  }
 ?>
