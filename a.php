<html>
<head>
<link rel="stylesheet"href="login form css.css">
<title>Registration form</title>
</head>
<script src="frame 3 javascript.js"></script>
<form name="form2" action="aphp.php" onsubmit="return((allLetter()& allLetter1()& check()& verifyPassword()& ValidateEmail())==1)">
<body>
<div class="container">
<h1 class="text-center">Register</h1>
	<form class="registration-form">
		<label class="col-one-half">
			<span class="label-text">First Name</span>
					<input type="text" name="fname" size="30">
							<span id="message"></span>
		</label>
		<label class="col-one-half">
			<span class="label-text">Last Name</span>
					<input type="text" name="lname" size="15">
							<span id="message1"></span>
							</label>
		<label>
			<span class="label-text">User id</span>
					<input type="text" name="id" size="40">
					<span id="message5"></span>
		</label>
		<label class="password">
			<span class="label-text" >Password</span>
			<button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
				<span class="glyphicon glyphicon-eye-close"></span></button>
					<input type="password" name="pass" size="10">
					</label>
		
		<label>
			<span class="label-text">Gender</span>
					<input type="text" name="gen" size="10">
					</label>
		<label>
			<span class="label-text">Birthday</span>
					<input type="date" name="bday" size="8">
					</label>
		
		<label>
			<span class="label-text">Phone number</span>
			<span id="message3"></span>
				<input type="text" name="phno" size="10">
				</label>

				<center><button class="submit" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button class="submit" type="reset">Reset </button>
</form>
</form>
</body>
</html>