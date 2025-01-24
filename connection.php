<?php

include ('MysqliDb.php');

$link = new MysqliDb("localhost","root","","metro");

$connect = mysqli_connect("localhost","root","","metro") or die();

?>