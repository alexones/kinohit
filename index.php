
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


<?php foreach($cars as $car): ?>
  <div>
  <a href="/film.php?id=<?= $car['id']?>"><?= $car['name']?></a>
  </div>
<?php endforeach ?>
<div id="footer">
</div>


</body>




</html>
