<!doctype html>
<html>
<head>
	<title>NOT A ROBOT</title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"hackathon");
$user1=$_GET['user'];
$pass1=$_GET['pass'];
$query="SELECT*FROM login_form where userid='$user1' and password='$pass1'";
$result=mysqli_query($connect,$query);
while($row = mysqli_fetch_array($res))
{
	$a=$row['userid'];

	$b=$row['password'];
}
mysqli_close($connect)
?>
</body>
</html>