<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "1==2 : <br>".var_dump(1==2); # 1==2의 값이 맞지않아 false가 나온다.
    echo '1==1 : <br>'.var_dump(1==1); # 1==1의 값이 맞아 true가 나온다.
    echo "1!=2 : <br>".var_dump(1!=2); # 1!=2의 값이 맞지않아 true가 나온다.
    echo "10>20 : <br> ".var_dump(10>20); 
    echo "10>=20 : <br>".var_dump(10>=20);
     ?>
  </body>
</html>
