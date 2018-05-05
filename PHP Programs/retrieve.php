<?php
$host='localhost';
$db='his';
$user='root';
$pass='';
$conn = mysql_connect($host,$user,$pass) or mysql_error();

	$data=mysql_select_db($db,$conn)or die("Connection Failed");
	if(!$conn)
	{
		die('Could not connect to database : '.mysql_error());
	}
	
	$inputname=$_POST['Find'];
	
	$myquery="SELECT * FROM ot WHERE name='$inputname'";
	
	$fetched=mysql_query($myquery);
	
	while($rowvalue=mysql_fetch_array($fetched))
	{
		$name=$rowvalue['name'];
		$age=$rowvalue['age'];
		
	}
	mysql_close($conn);
?>

<html>
<body>
<form>
	Name:<input type="text" value='<?php echo $name; ?>'
	<br>
	Age:<input type="text" value='<?php echo $age; ?>'
	
</form>

</body>
</html>