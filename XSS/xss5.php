<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XSS chanllenge In Script!</title>
  </head>
  <body>
    <form class=""  method="get">
      <input type="text" name="payload" value="">
      <input type="submit" name="submit" value="Submit your payload">
    </form>
    <?php $payload = @$_GET['payload'];
    $payload = str_replace('/', '', $payload);?>
    <script type="text/javascript">
      //output = '<?=$payload?>'

    </script>
  </body>
</html>
