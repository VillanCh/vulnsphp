<!DOCTYPE html>
<html>
  <head>
    <meta charset="gbk">
    <title>XSS chanllenge In Script!</title>
    <?php header("Content-type: text/html; charset=gbk"); ?>
  </head>
  <body>
    <form class=""  method="get">
      <input type="text" name="payload" value="">
      <input type="submit" name="submit" value="Submit your payload">
    </form>
    <?php $payload = @$_GET['payload'];
    if(strpos($payload, "'") !== false || strpos($payload, '"') !== false
    || strpos($payload, '&') !== false || strpos($payload, '>')!== false ||
    strpos($payload, '#') !== false || strpos($payload, '<') !== false){
      die('My Waf eat you payload');
    }
    $payload = urldecode($payload); ?>
    <script type="text/javascript">
      //output = 'sdfs<?=$payload?>'
      a = 'aaaaaaaaaaaaaaaaaa<?=$payload?>'
    </script>
  </body>
</html>
