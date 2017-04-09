<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Weak Type1</title>
  </head>
  <body>
    <?php $user = @$_GET['username'];
    $pass = @$_GET['password'];
    if(isset($user) && isset($pass)){
      if(@strcmp($pass, 'CNSS_{WWWW3333eeee444444KType}') == 0){
        die('SUCCESS');
      }else{
        echo "<h2>Fail to login!</h2>";
      }
    }?>
    <form class="" method="get">
      <p>USERNAME:</p>
      <input type="text" name="username" value="">
      <p>PASSWORD:</p>
      <input type="password" name="password" value="">
      <br>
      <input type="submit" name="" value="LOG IN">
    </form>
  </body>
</html>
