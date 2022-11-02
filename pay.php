<!doctype html>  
<html>  
      <head>  
           <title>Payment page</title>  
      </head>  
      <body>
      
<?php
$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"loginpage");


$name=$_GET['name'];
$phonenum=$_GET['ph_no'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$pincode=$_GET['pincode'];

$sql="INSERT INTO payment (name, phno, address, city, state, pincode) VALUES ('$name','$phonenum','$address','$city','$state','$pincode')";
if (mysqli_query($connecto,$sql))
	print("<form action=ticket1.php method=get>");
	print("<input type=hidden name=id2 value='".$name."'>");

	print("<input type=submit>");
	print("</form>");

mysqli_close($connecto)
?>
</body>
</html>	