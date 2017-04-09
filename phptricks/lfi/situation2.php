<html>
<head><title>This is our main website!</title></head>
<body>
<p>
    select your language: <a href='?lang=ch.php'>ch</a>
</p>
<?php 
$file = $_GET['lang'];
if(isset($file)){
    include('./'.$_GET['lang']);
    
}?>
</body>
</html>
