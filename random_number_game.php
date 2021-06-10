<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
if (!isset($answer)) {
  $answer=1000;

} if (isset($_POST['number'])) {
    $number = $_POST['number'];
    echo $number;
    $result = ($number < $answer ? 'number is up':
              ($number > $answer ? 'number is down':
              ($number == $answer ? 'successful' : 'error') ) );
    echo $result;
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h2></h2>
     <form action="random_number_game.php" method="post">
       <p><input type="number" name="number" value="number" placeholder="0~9999"></p>
       <p><input type="submit" name="check"></p>
     </form>
   </body>
 </html>
