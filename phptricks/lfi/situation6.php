<html>
<head><title>This is our main website!</title></head>
<body>
<p>
    select your language: <a href='?lang=h.php'>ch</a>
</p>
<?php 
$file = $_GET['lang'];
if(isset($file)){
    include('./c'.$_GET['lang']);
    
}?>
</body>
</html>
