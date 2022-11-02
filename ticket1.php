<!DOCTYPE html>
<html>
<body>
<html lang="en">

<head>
  <title>Harvest vase</title>
  <link rel="stylesheet" href="ticket css.css">
  <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
</head>

<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"loginpage");
print("<br>");
$name1=$_GET['id2'];

$query = "SELECT*FROM payment where name='$name1'";
$res = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($res))
{
	$Name=$row['name'];
	$Phno=$row['phno'];
	$Address=$row['address'];
	$City=$row['city'];
	$State=$row['state'];
	$Pincode=$row['pincode'];

}
print("<br>");
print("<br>");

$query = "SELECT*FROM from_to";
$res = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($res))
{
	$From=$row['fromdes'];
	$To=$row['todes'];
	$doj=$row['date'];
	$Trainname=$row['train_name'];
	$Trainnum=$row['train_num'];
	$Price=$row['price'];

}
print("<br>");
print("<br>");

mysqli_close($connect)
?>






<body>
  <div class="wrapper">
    <div class="product-img">
      <img src="https://st.focusedcollection.com/9264440/i/650/focused_137190786-stock-photo-girl-looking-through-train-window.jpg" height="420" width="327">
      
	</div>
    <div class="product-info">
      <div class="product-text">
        <h1>TICKET DETAILS</h1>
        <h2>by Genga and Lekha</h2>
<pre>
<p>   Name                     :	<?php echo("$Name");?> 
   Train name           :	<?php echo("$Trainname");?>(<?php echo("$Trainnum");?> )
   Date of journey	   :	<?php echo("$doj");?> 
   From destination :	<?php echo("$From");?> 
   To destination      :	<?php echo("$To");?>  
   Phone number     :	<?php echo("$Phno");?>
   
   Address                 :	<?php echo("$Address");?>
   
   city			  :	<?php echo("$City");?>
</p>
</pre>
		
      </div>
      <div class="product-price-btn">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo("$Price");?> </span>Rs</p><br><br><br>
		
        <button type="button" onclick="window.print()">Print ticket</button><br>
      </div>
    </div>
  </div>
<h3><center>Have a safe journey!!!!</center></h3>


</body>
</html>