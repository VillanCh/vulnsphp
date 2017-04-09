<html>
<head><title>This is our main website!</title></head>
<body>
<p>
    select your language: <a href='?lang=ch'>ch</a>
</p>
<?php 
$file = $_GET['lang'];
if(isset($file)){
    include(''.$file.'.php');
    
}?>
</body>
</html>
