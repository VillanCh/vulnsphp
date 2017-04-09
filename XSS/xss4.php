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
    //if(strpos(, "'"))?>
    <script type="text/javascript">
      //output = 'sdfs<?=$payload?>'
      
    </script>
  </body>
</html>
