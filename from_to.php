<html>
<head>
<title>from_to</title>
</head>
<body>





<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"loginpage");
print("<br>");
$des1=$_GET['from'];
$des2=$_GET['to'];
$idn=$_GET['id1'];
print("<br>");
$query = "SELECT*FROM from_to where fromdes='$des1'";

$res = mysqli_query($connect,$query);
$code = '';
for($id = 0; $id < 10; $id++) { 
$code .= mt_rand(0, 9); 
}
while($row = mysqli_fetch_array($res))
{
	$from=$row['fromdes'];
	$to=$row['todes'];
	$date=$row['date'];
	$train_name=$row['train_name'];
	$train_num=$row['train_num'];
	$price=$row['price'];

}
$query1="UPDATE login SET pnrno='$code' WHERE num='$idn'";
$res1 = mysqli_query($connect,$query1);

print("<br>");	
print("<br>");
mysqli_close($connect)

?>
<html>
<body>

<style>
@import url(https://fonts.googleapis.com/css?family=Cookie|Raleway:300,700,400);
*{
	box-sizing: border-box;
	font-size: 1em;
	margin: 0;
	padding: 0;
}
body{
	background: url('https://wallpapercave.com/wp/wp2094725.jpg') center no-repeat;
	background-size: cover;
	color: #333;
	font-size: 18px;
	font-family: 'Raleway', sans-serif;
}
.container{
	border-radius: 0.5em;
	box-shadow: 0 0 1em 0 rgba(51,51,51,0.25);
	display: block;
	max-width: 700px;
	overflow: hidden;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	padding: 2em;
	position: absolute;
		top: 50%;
		left: 50%;
		z-index: 1;
	width: 98%;
}
.container:before{
	background: url('https://i.pinimg.com/originals/66/dd/0e/66dd0ec2af0b7d61b8ddd50a7887d5f4.jpg') center no-repeat;
	background-size: cover;
	content: '';
	-webkit-filter: blur(10px);
	filter: blur(10px);
	height: 100vh;
	position: absolute;
		top: 50%;
		left: 50%;
		z-index: -1;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	width: 100vw;
}
.container:after{
	background: rgba(255,255,255,0.6);
	content: '';
	display: block;
	height: 100%;
	position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
	width: 100%;
}
form button.submit{
	background: rgba(255,255,255,0.25);
	border: 1px solid #333;
	line-height: 1em;
	padding: 0.5em 0.5em;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form button:hover,
form button:focus,
form button:active,
form button.loading{
	background: #333;
	color: #fff;
	outline: none;
}
form button.success{
	background: #27ae60;
	border-color: #27ae60; 
	color: #fff;
}
@-webkit-keyframes spin{
	from{ transform: rotate(0deg); }
	to{ transform: rotate(360deg); }
}
@keyframes spin{
	from{ transform: rotate(0deg); }
	to{ transform: rotate(360deg); }
}
form button span.loading-spinner{
	-webkit-animation: spin 0.5s linear infinite;
	animation: spin 0.5s linear infinite;
	border: 2px solid #fff;
	border-top-color: transparent;
	border-radius: 50%;
	display: inline-block;
	height: 1em;
	width: 1em;
}

form label{
	border-bottom: 1px solid #333;
	display: block;
	font-size: 1.25em;
	margin-bottom: 0.5em;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form label.col-one-half{
	float: left;
	width: 50%;
}
form label.col-one-half:nth-of-type(even){
	border-left: 1px solid #333;
	padding-left: 0.25em;
}
form label input{
	background: none;
	border: none;
	line-height: 1em;
	font-weight: 300;
	padding: 0.125em 0.25em;
	width: 100%;
}
form label input:focus{
	outline: none;
}
form label input:-webkit-autofill{
	background-color: transparent !important;
}
form label span.label-text{
	display: block;
	font-size: 0.5em;
	font-weight: bold;
	padding-left: 0.5em;
	text-transform: uppercase;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}


form label.invalid{border-color: #c0392b !important;}
form label.invalid span.label-text{color: #c0392b;}
form label.password{position: relative;}
form label.password button.toggle-visibility{
	background: none;
	border: none;
	cursor: pointer;
	font-size: 0.75em;
	line-height: 1em;
	position: absolute;
		top: 50%;
		right: 0.5em;
	text-align: center;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form label.password button.toggle-visibility:hover,
form label.password button.toggle-visibility:focus,
form label.password button.toggle-visibility:active{
	color: #000;
	outline: none;
}
form label.password button.toggle-visibility span{vertical-align: middle;}

h1{
	font-size: 3em;
	margin: 0 0 0.5em 0;
	text-align: center;
	font-family: 'Cookie', cursive;
}

html{
	font-size: 18px;
	height: 100%;
}

.text-center{
	text-align: center;
}

a {
  color:black ;
}

a:hover {
  color:#fff;
}
</style>
<div class="container">
<h1 class="text-center">TRAIN TICKET</h1>
	<form class="registration-form">
		<label class="col-one-half">
			<span class="label-text">From</span>
					<?php echo("$from");?>
							<span id="message"></span>
		</label>
		<label class="col-one-half">
			<span class="label-text">To</span>
						<?php echo("$to");?>
							<span id="message1"></span>
							</label>
				<label>
			<span class="label-text">Date</span>
					<?php echo("$date");?>
					<span id="message5"></span>
		</label>

		<label>
			<span class="label-text">Train name</span>
					<?php echo("$train_name");?>
					<span id="message5"></span>
		</label>
		<label class="password">
			<span class="label-text" >Train number</span>
					<?php echo("$train_num");?>
					</label>
		
		<label>
			<span class="label-text">Ticket fare</span>
					<?php echo("$price");?>
					</label>		
		<label>
			<span class="label-text">PNR Number</span>
					<?php echo("$code");?>
					</label>	
				

			<center><button class="submit" type="submit" ><a href="payphp.php">Book Ticket</a></button>

</body>
</html>