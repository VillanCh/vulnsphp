<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Please Login!</title>
  </head>
  <body>
    <?php $user = @$_GET['username'];
    $user = addslashes($user);
    $pass = @$_GET['password'];
    ?>

    <?php
    include_once('../sqli/config.php');

    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    mysql_select_db($dbname);

    $retval = mysql_query("select password from users where username = '$user'");
    #print_r($retval);
    $s = mysql_fetch_row($retval);
    $password = $s[0];

    //compare result
    if($password === @md5($pass)){
      die('SUCCESS! YOU DID IT!');
    }else{
      echo '<h2>Login IN<h2>';
    } ?>

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
