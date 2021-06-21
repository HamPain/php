<?php
// require_once 'namespace.php';
function autoloader(){
  var_dump('here');
}
#standard php library
spl_autoload_register('autoloader');
new Hello();
 ?>
