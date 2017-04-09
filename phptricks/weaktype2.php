<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Weak Type2</title>
  </head>
  <body>
    <?php $s1 = @$_GET['s1'];
    $s2 = @$_GET['s2'];
    if(isset($s1) && isset($s2)){
      if(md5($s1) == md5($s2) && $s1 !== $s2){
        die('SUCCESS');
      }else{
        echo "<h2>Fail to login!</h2>";
      }
    }?>
    <form class="" method="get">
      <p>PASS1:</p>
      <input type="text" name="s1" value="">
      <p>PASS2:</p>
      <input type="text" name="s2" value="">
      <br>
      <input type="submit" name="" value="LOG IN">
    </form>
  </body>
</html>
