<html>  
      <head>  
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
$n=(rand(0,2000));
$sql="INSERT INTO login (first, last,id, password, gender, birthday, phone, num) VALUES ('$first','$last','$userid','$password','$gender','$birthday',$number,$n)";
$a=mysqli_query($connect,$sql);


mysqli_close($connect)
?>
<h1>Your number is <?php echo("$n");?></h1>
<br>
<h1>***USE THIS NUMBER FOR FURTHER VERIFICATION***</h1>
<form action="home page 1.php"><br>
<button type="submit" style="height:30px; width:100px;">Submit</button>
</form>
</body>
</html>