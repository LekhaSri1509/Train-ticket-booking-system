<html>
<head>
<link rel="stylesheet"href="login form css.css">
<title>Registration Form</title>
</head>
<script src="frame 3 javascript.js"></script>
<form name="form2" action="login.php" onsubmit="return((allLetter()& allLetter1()& check()& verifyPassword()& ValidateEmail())==1)">
<div class="container">
	
	<h1 class="text-center">Register</h1>
	<form class="registration-form">
		<label class="col-one-half">
			<span class="label-text">First Name</span>
			<input type="text" name="firstName" id="name">
					<span id="message"></span>

		</label>
		<label class="col-one-half">
			<span class="label-text">Last Name</span>
			<input type="text" name="lastName" id="name1">
					<span id="message1"></span>

		</label>
		<label>
			<span class="label-text">User id</span>
			<input type="text" name="userid" id="userid">
					<span id="message5"></span>

		</label>
		
		
		<label class="password">
			<span class="label-text" >Password</span>
			<button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
				<span class="glyphicon glyphicon-eye-close"></span>
									<span id="message4"></span>

			</button>
			<input type="password" name="password" id="pwd">
		</label>
		
		<label>
			<span class="label-text">Gender</span>
			<input type="text" name="gen">

		</label>
		<label>
			<span class="label-text">Birthday</span>
            <input type="date" id="birthday" name="birthday">
		</label>
		
		<label>
			<span class="label-text">Phone number</span>
			<input type="text" name="number" id="mblno">
			<span id="message3"></span>
		</label>
			<center><input type="submit">
			<div class="text-center">
			<button class="submit" name="register" ><a href="home page 1.html" target="_blank">Sign Me Up</a></button>
		</div>
	</form>
</form>
</div>
</html>