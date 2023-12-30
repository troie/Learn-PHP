<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>hello php.</title>
</head>

<body>
<?php
  if('POST' == $_SERVER['REQUEST_METHOD']) {
    print $_POST('email');
  }else{
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="">email</label>
  <input name="email" type="text">
  <input type="submit" value="送出">
</form>
<?php 
  } 
?>
</body>
</html>
