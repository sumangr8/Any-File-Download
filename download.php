<?php
mysql_connect("localhost","root","");
mysql_select_db("resume");
$id=$_GET['id'];
$query="select * from table1 where id='$id'";
$query1=mysql_query($query);
while($ros=mysql_fetch_array($query1))
{
	$path=$ros['path'];
	header('content-Disposition:attachment; filename='.$path.'');
	header('content-type:application/octent-strem');
	header('content-length='.filesize($path));
	readfile($path);
}
?>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>