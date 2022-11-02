<html>
<head>
<link rel="stylesheet"href="frame 3 css.css">
<script src="frame 3 javascript.js"></script>
<form action="b.php">
</head>


<div class="container">
  <input type="radio" name="tab" id="signin" checked="checked"/>
  <input type="radio" name="tab" id="register"/>
  <div class="pages">
    <div class="page">
      <div class="input">
        <div class="title"><i class="material-icons"></i> EMAIL ID</div>
        <input class="text" type="text" placeholder=""/ id="userid" name="user">
		<span id="message5"></span>
      </div>
      <div class="input">
        <div class="title"><i class="material-icons"></i> PASSWORD</div>
        <input class="text" type="password" placeholder=""/ id="pwd" name="pass">
				<span id="message4"></span>

      </div>
      <div class="input">
	  <button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><center><input type="submit" target="_blank"></a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
</form>
      </div>
    </div>
    <div class="page signup">
      
    <h3 style="text-align:center">Haven't siged in yet!!!!</h3>
	<h3 style="text-align:center">Don't worry</h3>
	<hr></hr>
 
      <div class="input">
        <input type="submit" value="SIGN ME UP!"/>
		<h1><hr></hr></h1>
		<button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href="a.php" target="_blank">SIGN UP</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </div>
    </div>
  </div>
  <div class="tabs">
    <label class="tab" for="signin">
      <div class="text"  onclick="ValidateEmail();verifyPassword()">Sign In</div>
    </label>
    <label class="tab" for="register">
      <div class="text">Register</div>
    </label>
  </div>
</div>

