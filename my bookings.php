<!DOCTYPE html>
<html>
<body>
<html lang="en">
<style>
#square{
	width:1200px;
	height:660px;
	padding:7px;
	background-color:white;
	border:10px solid red;
	color:black;
	margin-top:10px;
	color:white;
}
body
{
	background-image:url("https://media.istockphoto.com/photos/watercolor-textured-background-picture-id887755698?k=6&m=887755698&s=612x612&w=0&h=_yEUF8gLpWjZv5IgwuWkecNVt4X4P7vpuFBKCWIuR44=");
	background-repeat:no-repeat;
	background-size:100%;
}
h2{
	font-family:bookman old style;
	color:black;
}
</style>

<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"loginpage");
print("<br>");
$query = "SELECT * FROM payment";


$res = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($res)) 
 {
        $field1name = $row["name"];
        $field2name = $row["phno"];
        $field3name = $row["address"];
        $field4name = $row["date"];
        
}
$query = "SELECT * FROM from_to";


$res = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($res)) 
 {
        $field5name = $row["fromdes"];
        $field6name = $row["todes	"];
        $field7name = $row["train_name"];
        $field8name = $row["train_num"];
        $field9name = $row["price"];
}
print("<br>");
print("<br>");
mysqli_close($connect)
?>

<body>
<center>

<div id="square">
<h1 style="color:black; font-size:50"><u>MY BOOKINGS</u></h1>
<pre>
<h2>

Name	    :	<?php echo("$field1name");?><br>
Phone number	   :	<?php echo("$field2name");?><br>
		 Address		  :	<?php echo("$field3name");?><br>
		 Date		  :	<?php echo("$field4name");?><br>
   From		  :	<?php echo("$field5name");?><br>
      To		:	<?php echo("$field6name");?><br>
  Train name	      :	<?php echo("$field7name");?><br>
Train number   :	<?php echo("$field8name");?><br>
  Price	 :	<?php echo("$field9name");?><br>

</h2>
</center></pre>
</body>
</html>
