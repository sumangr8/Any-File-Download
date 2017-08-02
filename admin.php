<?php
$con=mysqli_connect("localhost","root","","resume");
$qry=mysqli_query($con,"select * from table1");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1">
	<tr>
		<td>Sr. No</td>
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
		<td>Gender</td>
		<td>City</td>
		<td>Exprince</td>
		<td>Qualification</td>
		<td>Resune</td>
		<td>Download</td>
	</tr>
<?php
$i=1;
	while ($row=mysqli_fetch_array($qry)) 
	{
		// echo $row["name"];
		$id=$row["id"];
		echo "<tr>";
		echo "<td>".$i."</td>";++$i;
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td>".$row['city']."</td>";
		echo "<td>".$row['experience']."</td>";
		echo "<td>".$row['qualification']."</td>";
		echo "<td>".$row['resume']."</td>";
		echo "<td><a href='download.php?id=".$id."'>Download</td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>