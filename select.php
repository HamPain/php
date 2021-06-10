<?php
  $conn = mysqli_connect('localhost','root','123456','opentutorials',3307);

# 1 row
  $sql = "SELECT * FROM topic where id = 6";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  echo $row['title'].'<br/>';
  echo $row['description'];

# all row
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn,$sql);
  echo '<br/>';
  while($row = mysqli_fetch_array($result)){
    echo $row['title'].'<br/>';
    echo $row['description'].'<br/>';
  }

  echo '</br><a href="index.php">돌아가기</a>';
 ?>
