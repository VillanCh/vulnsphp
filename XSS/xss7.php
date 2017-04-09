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
    $payload = addslashes($payload); ?>
    <script type="text/javascript">
      //output = 'sdfs<?=$payload?>'
      a = 'aaaaaaaaaaaaaaaaaa<?=$payload?>'
    </script>
  </body>
</html>
