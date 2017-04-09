<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SQL injection test!</title>
  </head>
  <body>
    <h1>Hello! There are a sql injection here.</h1>
    <br>
    <br>
    <h3>Happy Hunting!</h3>
    <br>
    <br>
    <?php include_once('config.php');
    //echo "$dbhost; $dbuser; $dbpass;"
    $dbconn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(!$dbconn){
      die('DATABASE ERROR!');
    }else{
      echo "DATABASE CONNECTED!";
    }
    ?>
    <br>
    <br>
    <form class=""  method="get">
      <p>Input which person you want to know?</p><br>
      <input type="text" name="author" value="">
      <input type="submit" name="submit" value="Query His Quotes!">
    </form>


    <?php /*Get Query Param*/
    /*set waf*/
    $author = @$_GET['author'];

     ?>


    <?php $query = "select * from quotes where author = '$author';" ?>
    <br>
    <br>
    <p>---------------------------------------------</p>
    <p>Show you his quotes!</p>
    <p>---------------------------------------------</p>
    <?php
    /*
    Show result
    */
    mysql_select_db($dbname);

    $retval = mysql_query($query, $dbconn);
    if($retval){
      #echo 'SUCCESS';
      $ret = mysql_fetch_row($retval);
      while ($ret) {
        $_author = $ret[1];
        $_quote = $ret[2];
        echo "<p>Author: $_author</p><p>Quote: $_quote</p>";
        $ret = mysql_fetch_row($retval);
      }
    }else{
      echo "Failed to Fetch Data;";
    }
    ?>

  </body>
</html>
