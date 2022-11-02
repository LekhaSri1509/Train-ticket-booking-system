<html>
<head>
<title>Register</title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"loginpage");
$first=$_GET['firstName'];
$last = $_GET['lastName'];
$user=$_GET['userid'];
$password=$_GET['password'];
$gender=$_GET['gen'];
$birthday=$_GET['birthday'];
$phone=$_GET['number'];
$sql="INSERT INTO login (first,last,id,password,gender,birthday,phone) VALUES ('$first','$last','$user','$password','$gender','$birthday','$phone')";
if (mysqli_query($connect,$sql))
  echo "User id and Password inserted...";
mysqli_close($connect)
?>
</body>
</html>
