<?php
$conn=mysqli_connect('localhost','root','','mytable');
if(!$conn){
	echo "sory";
}else
{
	echo "success"."<br>";
}
$sql = "DELETE FROM newtable WHERE id='$_GET[id]'";
if(mysqli_query($conn,$sql))
	header("refresh:1; url= display.php");
else
	echo "not deleted";