<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XSS chanllenge In Tag Attrs!</title>
  </head>
  <body>
    <form class=""  method="get">
      <input type="text" name="payload" value="">
      <input type="submit" name="submit" value="Submit your payload">
    </form>
    <?php $param1 = @$_GET['param1'];
    $param2 = @$_GET['param2'];
    if(preg_match('/on[a-z]+/is')){
      die('Do not XSS!');
    }else{
      $payload = 'http://baidu.com';
    }
    //if(strpos(, "'"))?>

  </body>
</html>
