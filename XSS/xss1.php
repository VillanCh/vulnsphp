<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XSS 1</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <p>input your payload! Here</p>
      <input type="text" name="PAYLOAD" value="">
      <br>
      <input type="submit" name="" value="">
    </form>
    <br><br><br>
    <p>--------------------------------------------</p>
    <?=@$_POST['PAYLOAD']?>
  </body>
</html>
