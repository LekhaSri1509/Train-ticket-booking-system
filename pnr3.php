<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"loginpage");
$a=$_POST['id2'];
$b=$_POST['id'];

$query = "UPDATE login SET pnrstatus='$b' WHERE pnrno='$a'";
if(mysqli_query($connecto,$query))
	header("Location:success.php");
else
	echo("Not update");
?>