<html>  
      <head>  
           <title> Test Page</title>  
      </head>  
      <body>
      
	  <?php
	      $host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"loginpage");
$first=$_GET['fname'];
$last = $_GET['lname'];
$userid = $_GET['id'];
$password=$_GET['pass'];
$gender=$_GET['gen'];
$birthday=$_GET['bday'];
$number=$_GET['phno'];
$nums=$_GET['ids'];
$code = '';
for($id = 0; $id < 10; $id++) { 
$code .= mt_rand(0, 9); 
}

$sql="INSERT INTO bookings(first, last,id, password, gender, birthday, phone, pnrno) VALUES ('$first','$last','$userid','$password','$gender','$birthday',$number,'$nums')";
while($row = mysqli_fetch_array($result))
{
$a=$row["pnrstatus"];
$c=$row["pnrno"];
}
$query1="UPDATE bookings SET pnrno='$code' WHERE fromdes='$from'";
$res1 = mysqli_query($connect,$query1);

if($c=="")
{
	print("<h1>Wait for it</h1>");
}
else{
	print("<h1>Completed</h1>");

	print("<form action=pnr3.php method=post>");
	print("<input type=hidden name=id value='booked'>");

	print("<input type=hidden name=id2 value='".$c."'>");
	print("<input type=submit>");
	print("</form>");
}



mysqli_close($connect)
?>
</body>
</html>