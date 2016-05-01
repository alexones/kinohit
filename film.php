
<?php
$link = mysqli_connect('localhost', 'kinohit', 'kinohit', 'kinohit');
$sql = mysqli_query($link, 'SELECT * FROM `films`');

$cars = [];
while($row = mysqli_fetch_assoc($sql)){
  $cars[] = $row;
}


?>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title> PROSTO SITE </title>

<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
  <?php require('head.php');?>
  <div class="fondop">

</div>


</body>




</html>
