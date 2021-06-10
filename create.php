<?php
  $conn = mysqli_connect('localhost','root','123456','opentutorials',3307);
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  $list = '';
  while($row = mysqli_fetch_array($result)){
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</li>";
  }
  $article = array(
    'title'=>'Welcome',
    'description'=>'hello world'
  );
  if(isset($_GET['id'])){
  $sql = "SELECT * FROM topic where id = {$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = $row['title'];
  $article['description'] = $row['description'];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>web</title>
  </head>
  <body>
    <h1><a href="index.php">web</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <form action="process_create.php" method="POST">
      <p><input type="text" name="title" placeholder="title"></p>
      <p><textarea name="description" placeholder="description"></textarea></p>
      <p><input type="text" name="author" placeholder="author"></p>
      <p><input type="text" name="profile" placeholder="profile"></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
