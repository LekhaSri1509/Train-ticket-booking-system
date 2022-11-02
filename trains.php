<html>
<head>
<title>Trains</title>
</head>
<body background="https://www.setaswall.com/wp-content/uploads/2017/07/Train-Wallpapers-22-1920-x-1200.jpg" style="background-repeat:no-repeat; background-position:center;background-size:cover;color:white"><center>
<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"loginpage");
$query = "SELECT * FROM trains";
$result=mysqli_query($connecto,$query);
$i=0;
?>
<table border="5" width="900" height="50px" >
<tr bgcolor="" height="50">
<th>TRAIN NAME</th>
<th>TRAIN NUMBER</th>
<th>PRICE</th>
<th>DEPARTURE TIME</th>
<th>ARRIVAL TIME</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
$a[$i]=$row["train_name"];
$b[$i]=$row["train_num"];
$c[$i]=$row["price"];
$d[$i]=$row["departure_time"];
$e[$i]=$row["arrival_time"];
print("<tr><th><h2>$a[$i]</th>");
print("<th><h2>$b[$i]</th>");
print("<th><h2>$c[$i]</th>");
print("<th><h2>$d[$i]</th>");
print("<th><h2>$e[$i]</h2></th></tr>");
print("<br>");
$i=$i+1;
}
?>

</body>
</html>