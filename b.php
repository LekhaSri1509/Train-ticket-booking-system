<html>
<head>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"loginpage");
$userid=$_GET['user'];
$pass=$_GET['pass'];
$query="SELECT*FROM login where id='$userid' and password='$pass'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count>0)
	header("Location:home page 1.php");
else
	print("Login unsuccessful");
mysqli_close($connect)
?>
</body>
</html>