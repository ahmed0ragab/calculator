<?php
spl_autoload_register('myAutoloader');
function myAutoloader($className) {
       $url=$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
       $path;
       if (strpos($url,'include')!==false) {
               $path = '../classes/';    
       }
       else {
              $path='classes/';
       }
      $extension = '.class.php';
      $fullpath= $path . $className . $extension;
      require_once $fullpath;
       // include_once $fullpath;
}

// spl_autoload_register('myAutoloader');
//        function myAutoloader($className) {
//               $path="classes/";
//               $extension=".class.php";
//               $fullpath=$path . $className . $extension;
//               // if(!file_exists($fullpath)) {
//               //        return false;
//               // }
//               include_once $fullpath;
//        } 

?>
