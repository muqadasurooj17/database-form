<?php
require("connection.php");

if(isset($_POST['update'])){
if(($_POST['first']=="")||($_POST['last']=="")||($_POST['email']=="")){
	echo "fill all the fields...";
}
else {
	//setting values
	$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$id = $_POST['id'];
//putting values by id
$sql ="UPDATE demo_users SET first_name='".$first."',last_name='".$last."',email='".$email."' where id='".$id."'";
if(mysqli_query($conn,$sql)){
	echo "updated";
}else{
	echo "not updated";
}
}
}
?>

<html>
<?php
//fetching previous  data 
if(isset($_GET['edit'])){
	$sql = "SELECT * FROM demo_users Where id='".$_GET['id']."'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
}

?>
<form action="" method="POST">
	<lable>first Name</lable>
	<input type="text" name="first" id="first" value="<?php if(isset($row["first_name"])){
		echo $row["first_name"];}?>">
		<div>

		<lable>last Name</lable>
	<input type="text" name="last" id="last" value="<?php if(isset($row["last_name"])){
		echo $row["last_name"];}?>">
	</div>
		<div>
		<lable>Email</lable>
	<input type="text" name="email" id="email" value="<?php if(isset($row["email"])){
		echo $row["email"];}?>">
	</div>
	<input type="hidden" name="id" value="<?php echo $row['id']?>">
	<div>
	<button type="submit" name="update">update</button></div>
</form>
</html>