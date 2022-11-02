<html>
<head>
<form action="from_to.php">
<style>
@import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
 
  align-items: center;
  height: 100vh;
  background: linear-gradient(45deg, greenyellow, dodgerblue);
  font-family:times new roman;
}
.center {
  position: relative;
  padding: 15px 15px;
  background: #fff;
  border-radius: 5px;
}
.center h2 {
  font-size: 20px;
  border-left: 5px solid dodgerblue;
  padding: 2px;
  color: #000;
  letter-spacing: 5px;
  margin-bottom: 10px;
  font-weight: bold;
  padding-left: 10px;
}
.center .inputbox {
  position: relative;
  width: 600px;
  height: 20px;
  margin-bottom: 50px;
}
.center .inputbox input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 10px;
  border-radius: 10px;
  font-size: 1em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {
  position: absolute;
  top: 15px;
  left: 20px;
  font-size: 1em;
  transition: 0.5s;
  font-family: sans-serif;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  transform: translateX(-13px) translateY(-35px);
  font-size: 1em;
}
.center .inputbox [class="button"] {
  width: 50%;
  background: dodgerblue;
  color: #fff;
  border: #fff;
}
.center .inputbox:hover [class="button"] {
  background: linear-gradient(45deg, greenyellow, dodgerblue);
}

p{
	margin: 10;
	font-family:verdana;
	font-size:20px;
	color:black;
	justify-content: center;
	align-content: center;
}


</style>

<body style="background: url(https://www.wallpapertip.com/wmimgs/155-1554570_indian-train-images-hd.jpg);background-size:100%; background-repeat:no-repeat;;">

<div class="center">
  <p><h1 style="font-family:bookman old style;font-style:bold;color:white;background-color:blue;">&#x1F687;&nbsp;IRCTC</button></h1></p>
  <h2>BOOK TICKET</h2><br>
  <form>
    <div class="inputbox">
      <input type="text" required="required" name="from">
      <span>From</span>
    </div>
	<div class="inputbox">
      <input type="text" required="required" name="to">
      <span>To</span>
    </div>
	
	<div class="inputbox">
      <input type="text" required="required" name="dat">
      <span>DD/MM/YY</span>
    </div>
	<div class="inputbox">
      <input type="text" required="required" name="id1">
      <span>ID No</span>
    </div>
	
	
	 <p>Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="All Classes"><option>All Classes<option>Anubhuti Class(EA)<option>AC First Class(1A)<option>Exec. Chair Car(EC)<option>AC 2 Tier(2A)<option>First Class(FC)<option>AC 3 Tier(3A)<option>AC 3 Economy(3E)<option>AC Chair Car<option>Sleeper</select></p>
    

	 <p>Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="GENERAL"><option>GENERAL<option>LADIES<option>LOWER BERTH/SR.CITIZEN<option>DIVYAANG<option>TATKAL<option>PREMIUM TATKAL</select><br>
	

	<br></p>
	<div><input type="checkbox"name="x">Divyaang Concession</div>
    <div><input type="checkbox"name="x">Flexible With Date</div>
    <div><input type="checkbox"name="x">Train with Available Berth</div><br>
	
    <div class="inputbox">
      <input class="button"type="submit" name="search" value="SEARCH">SEARCH
    </div>	
    <br>
	
  </form>


</body>
</html>