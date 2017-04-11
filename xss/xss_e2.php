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
    <?php $payload = @$_GET['payload'];

    $event_pattern = '/on[a-z]+/is';
    if(strpos($payload, '\'') !== false ||
  strpos($payload, '<') !== false ||
  strpos($payload, '>') !== false ||
  strpos(strtolower($payload), 'eval') !== false ||
  strpos($payload, '"') !== false  ||
  strpos($payload, '(') !== false ||
  strpos($payload, ')') !== false ||
  strpos($payload, '&') !== false ||
  strpos($payload, '`') !== false ){
    die('Error! MyWAF Eat you!');
  }
    //if(strpos(, "'"))?>
    <img src="hello.jpg" onmousemove='<?=$payload?>' alt="">
  </body>
</html>
