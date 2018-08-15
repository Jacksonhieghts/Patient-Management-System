<?php
mysqli_select_db('pms',mysqli_connect('localhost','root',''));
?>
<?php

session_start();
session_destroy();
header('location:index.php');
?>