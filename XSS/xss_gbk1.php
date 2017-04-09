<!DOCTYPE html>
<html>
  <head>
    <meta charset="GBK">
    <title>Break OUT GBK 1</title>
  </head>
  <body>
    <?php header("Content-type: text/html; charset=gbk");  ?>
    <form class="" action="" method="get">
      <p>INPUT YOUR PAYLOAD!</p>
      <input type="text" name="payload" value="">
      <input type="submit" name="" value="Submit you payload">
    </form>

    <?php @$payload = $_GET['payload'];

    if(isset($payload)){

      echo "<br><br>Input by you:  $payload\n";

      $payload = addslashes($payload);
      echo "<br><br>Addslashes by me";
    } ?>
    <p>----------------------------------------------------</p>
    <p>Now you can alert something!</p>
    <?php if(isset($payload)){
      echo "<img name='$payload'>Have Fun!</p>";
    } ?>
  </body>
</html>
