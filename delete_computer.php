<?php
include('dbcon.php');
include('session.php');
if (isset($_POST['delete_computer'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($connection,"select * from comp_det where comp_id ='$id[$i]'")or die(mysql_error());
	$row = mysqli_fetch_array($query);
	$comp_name = $row['comp_name'];

	mysqli_query($connection,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Deleted  Computer $comp_name')")or die (mysql_error());
	mysqli_query($connection,"DELETE FROM comp_det where comp_id='$id[$i]'");
}
header("location: add_computer.php");
}
?>