<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fake Static</title>
  </head>
  <body>
    <?php
      // $_SERVER;
      //print_r($_SERVER);
      $pathinfo = $_SERVER['PATH_INFO'];
      $path = array();
      if(preg_match('/^\/(\w+)\/(\w+)/', $pathinfo, $path)){
        $type = $path[1];
        $id = $path[2];

      }else{
        $tyoe = 'default';
        $id = 'default';
      }
     ?>
  </body>
</html>
