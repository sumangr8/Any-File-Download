<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center">
	<form method="post" action="" enctype="multipart/form-data">
		<tr>
			<td>Name:-<input type="text" name="name"></td>
			<td>Email:-<input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Password:-<input type="text" name="password"></td>
			<td>City:-<select name="city">
				<option value="patna">Patna</option>
				<option value="Danapur">Danapur</option>
				<option value="Gopalpur">Gopalpur</option>
				<option value="Naubatpur">Naubatpur</option>
			</select></td>
		</tr>
		<tr>
			<td>Qualification:-MCA<input type="checkbox" name="qualification[]" value="MCA">
			BCA<input type="checkbox" name="qualification[]" value="BCA">
			B.Tech<input type="checkbox" name="qualification[]" value="B.Tech">
			12<input type="checkbox" name="qualification[]" value="12"></td>
			<td>Gender:-<select name="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select></td>
		</tr>
		<tr>
			<td>Experience:-<select name="experience">
				<option value="0-1 Year">0-1 Year</option>
				<option value="2 Year">2 Year</option>
				<option value="3 Year">3 Year</option>
				<option value="4 Year">4 Year</option>
			</select></td>
			<td>Resume:-<input type="file" name="resume"></td>
		</tr>
		<tr>
			<td><input type="submit" name="s" value="Send"></td>
		</tr>
	</form>
</table>
<?php
	if(isset($_POST["s"]))
	{
		extract($_POST);
		$qualification=implode(",",$_POST["qualification"]);
		$resume=$_FILES["resume"]["name"];
		$destination="./folder/".$resume;
		move_uploaded_file($_FILES["resume"]["tmp_name"],$destination);
		$con=mysqli_connect("localhost","root","","resume");
		$qry=mysqli_query($con,"insert into table1 (name,email,password,city,qualification,gender,experience,resume,path) values ('$name','$email','$password','$city','$qualification','$gender','$experience','$resume','$destination')");
		if($qry==true)
		{
			echo "insert data";
		}
	}
?>
</body>
</html>