<?php
  include_once('config.php');

  $dbconn = mysql_connect($dbhost, $dbuser, $dbpass);

  if(!$dbconn){
    die('DATABASE ERROR!');
  }else{
    echo "DATABASE CONNECTED!";
  }
  echo "success<BR>";
  ECHO mysql_errno();
  echo mysql_error();
   ?>
<br>
<br>
<?php
  $_drop_database = 'drop database '.$dbname.';';
  mysql_query($_drop_database, $dbconn);
  mysql_select_db($dbname);
  //echo mysql_error();
?>
<br>
<br>
<?php
if(mysql_error()){
  mysql_query('create database '.$dbname.';', $dbconn);
  mysql_select_db($dbname);
}
?>

<?php
//create table user and insert user datas;
$_create_table = 'create table users(id int not null auto_increment,username varchar(200) not null, password varchar(200) not null, primary key(id));';
mysql_query($_create_table, $dbconn);
echo mysql_error();
$_sql = "insert users(username, password) value('v1ll4n', 'HElasd&^%&');";mysql_query($_sql, $dbconn);
$_sql = "insert users(username, password) value('user1', 'HEadfadfasd^%&');";mysql_query($_sql, $dbconn);
$_sql = "insert users(username, password) value('user2', 'HEadfadfasdasdfas^%&');";mysql_query($_sql, $dbconn);
$_sql = "insert users(username, password) value('user3', 'HEadHHHHHas^%&');";mysql_query($_sql, $dbconn);
$_sql = "insert users(username, password) value('user5', 'HEadHHHHs^%&');";mysql_query($_sql, $dbconn);
$_sql = "insert users(username, password) value('admin', 'CNSS{Th1s_1s_flag}');";mysql_query($_sql, $dbconn);
 ?>

 <?php
 //Create table quote and insert quote datas;

 $_create_table = 'create table quotes(id int not null auto_increment, author varchar(200) not null, quote varchar(2048) not null , primary key(id));';
mysql_query($_create_table, $dbconn);
echo mysql_error();
$_sql = "insert quotes(author, quote) value('v1ll4n', 'The Magical Code Injection Rainbow! MCIR is a framework for building configurable vulnerability testbeds. MCIR is also a collection of configurable vulnerability testbeds.');";mysql_query($_sql, $dbconn);
$_sql = "insert quotes(author, quote) value('admin', 'The Magical vulnerability testbeds. MCIR is also a collection of configurable vulnerability testbeds.');";mysql_query($_sql, $dbconn);
$_sql = "insert quotes(author, quote) value('user1', 'The stbeds. MCIR is also a collection of configurable vulnerability testbeds.');";mysql_query($_sql, $dbconn);
$_sql = "insert quotes(author, quote) value('v1ll4n', 'The Magical Code Injection Rainbow! MCIR is a framework for building code injection vulnerability testbeds.');";mysql_query($_sql, $dbconn);
$_sql = "insert quotes(author, quote) value('user3', 'MCIR unites SQLol, XMLmao, ShelLOL and XSSmh together in a magical world of code injection! They can experience the magic of feature sharing. Instead of having to wait for unicornFurnace to update each one, all the MCIR friends get updates they can all use! YAY!');";mysql_query($_sql, $dbconn);
$_sql = "insert quotes(author, quote) value('hacker', 'MCIR is designed to be good at making new friends, and they get to share updates to sanitization routines, environmental factor options, and interface tweaks. If you want to make a new friend to join the dancing and singing in the Magical Code Injection Rainbow, you can use any of the existing MCIR friends as a template and rewrite the portion where the friend does its magic, so we can inject ALL the things!YIPPEE!');";mysql_query($_sql,$dbconn);

 ?>

<?php  ?>

<?php
/*end*/
mysql_close($dbconn);
 ?>
