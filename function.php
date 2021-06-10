<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<?php
  # 함수
  var_dump(is_file('data.txt'));
  var_dump(is_dir('data.txt'));
  var_dump(file_get_contents('data.txt'));
  file_put_contents('data.txt', rand(1,100));
 ?>

<?php
  #객체
  $file = new SplFileObject('data.txt','rw+');
  var_dump($file->isFile());
  var_dump($file->isDir());
  var_dump($file->fread($file->getSize()));
  $file->fwrite(rand(1,100));
 ?>
