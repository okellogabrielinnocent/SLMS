<?php

$connection = mysqli_connect('localhost','root','','school');
if (!$connection) {
	die("Connection failed" . mysqli_connect_error());
}
?>
