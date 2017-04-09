<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XSS chanllenge In Tag Attrs!</title>
  </head>
  <body>
    <form class=""  method="get">
      <input type="text" name="payload" value="">
      <input type="submit" name="submit" value="Submit your payload">
    </form>
    <img src="hello.jpg" name='<?=@$_GET['payload'];?>' alt="">
  </body>
</html>
