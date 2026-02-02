<?php
$con2 = mysqli_connect('localhost','ekrambd','Ekrambd28!','fiha');
if (!$con2)
  {
  die('Could not connect: ' . mysqli_error($con2));
  }
mysqli_select_db($con2, 'fiha');


?>