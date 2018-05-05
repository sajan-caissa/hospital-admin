<?php
$host="localhost";
$db="sd";
$user="root";
$pass="";
$conn=new mysqli($host,$user,$pass) or mysql_error();
if (!$conn)

  {

  die('Could not connect: ' . mysql_error());

  }
$data=mysqli_select_db($conn,$db);

$sql="INSERT INTO myfirst (firstname, lastname, age, email, gender, mobile)";

if (!mysql_query($sql,$conn))

  {die('Error: ' . mysql_error());  }

echo "1 record added";

//$sql=mysql_query("SELECT * FROM myfirst",$conn) or mysql_error();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
$lastname = test_input($_POST["lastname"]);
$age = test_input($_POST["age"]);  
  $gender = test_input($_POST["gender"]);
$email = test_input($_POST["email"]);
    $mobile = test_input($_POST["mobile"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<html>
<head>
<title>Form</title>
</head>
<body bgcolor="lightblue">
<form action="form1.php" method="post" target="_blank">
<fieldset>
<legend>Personal Information:</legend>
First Name:<br><input type="text" name="firstname"><br>
Last Name:<br><input type="text" name="lastname"><br>
Age:<br><input type="int" name="age"><br>
Email ID:<br><input type="text" name="email"><br>
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female<br>

Mobile No.:<br><input type="int" name="mobile"><br>

<input type="submit" value="submit"><br>
</fieldset></form>
</body></html> 