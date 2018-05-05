<?php
$host='localhost';
$db='anna_db';
$user='root';
$pass='';
$conn = mysql_connect($host,$user,$pass) or mysql_error();
$data= mysql_select_db($db,$conn);
$sql = mysql_query("SELECT * FROM user_tb",$conn) or mysql_error();
if(isset($_POST['f_name'])!='')
 {
$res = mysql_query("INSERT INTO user_tb (`first_name`,`last_name`,`status`) VALUES('".$_POST['f_name']."','".$_POST['l_name']."','1')",$conn) or mysql_error();
header("Location: form.php");
echo "Data Inserted Successfully";
}
?>
	<html>
		<body>
			<form name="form" method="POST" action="form.php">
			<label>First Name</label>
			<input type="text" name="f_name" id="f_name">
			<label>Last Name</label>
			<input type="text" name="l_name" id="l_name">
			<input type="submit" name="button" id="button" value="Submit">
			</form>
			<?php while($result=mysql_fetch_assoc($sql))
{?>
	
			<table>
			<tr>
			<td><?php echo $result['first_name'].'<br>';?></td>
			<td><?php echo $result['last_name'].'<br>';?></td>
			</tr>
			</table>
<?php
} 
?>
		</body>
	</html>
