<?php
  $page = $_SERVER['SCRIPT_NAME'];
  echo basename($page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <title>Document</title>
</head>
<?php include_once('header.php'); ?>
<body>
    <h1>Contact</h1>
    <input type="text"></br>
    <input type="text"></br>
    <input type="textarea" class="textarea">

    
</body>
<?php include_once('footer.php'); ?>
</html>