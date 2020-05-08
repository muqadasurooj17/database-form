
<doctype !html>
	<title>table</title>
	<head>
	<h1>delete from database </h1></head>
	<body>
<table border="2">
	<tr>
		
		<th>First name</th>
		<th>Last name</th>
		<th>Email</th>
		<th>operations</th>
		</tr>
	
	<?php
		require("connection.php");
$sql = "SELECT * FROM newtable";
$result=mysqli_query($conn,$sql);
//$row=mysqli_num_rows($result)>0)
while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	 	echo "<td>".$row['first_name']."</td>";
    echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['email']."</td>"; 
    echo "<td><a href ='delet.php?id=".$row['id']."'>delete</a> 
    <a href='update.php?id=".$row['id']."&edit=true'>edit</a></td>";
 
"</tr>";}
    ?>
</table>
	
