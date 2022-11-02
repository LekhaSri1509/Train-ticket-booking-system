

var signin = document.querySelector("#signin");
var register = document.querySelector("#register");
setTimeout(function () {
   register.checked = true;
}, 1000);
setTimeout(function () {
   signin.checked = true;
}, 2000);
 function allLetter()
      { 
	  var name=document.getElementById("name").value;
      var letters = /^[A-Za-z.. ]+$/;
      if(name.match(letters))
      {
      document.getElementById("message").innerHTML="<span style=color:green>Your name have accepted Thank You!!";
      return true;
      }
      else
      {
      document.getElementById("message").innerHTML="<span style=color:red>Its Wrong !!! Please Enter alphabets only!!";
      return false;
      }
      }
function allLetter1()
      { 
	  var name1=document.getElementById("name1").value;
      var letters = /^[A-Za-z.. ]+$/;
      if(name1.match(letters))
      {
      document.getElementById("message1").innerHTML="<span style=color:green>Your name have accepted Thank You!!";
      return true;
      }
      else
      {
      document.getElementById("message1").innerHTML="<span style=color:red>Its Wrong !!! Please Enter alphabets only!!";
      return false;
      }
      }
function check()
{
    var num=document.getElementById("mblno").value;
	if(num==""){
	  document.getElementById("message3").innerHTML="<span style=color:red>*Please enter the mobile number*";
	  return false;
	  }
	if(isNaN(num)){
	  document.getElementById("message3").innerHTML="<span style=color:red>*Only numbers are allowed*";
	  return false;
	  }
	  if(num.length<10){
	  document.getElementById("message3").innerHTML="<span style=color:red>*Please enter 10 digit number*";
	  return false;
	  }
	if(num.length>10){
      document.getElementById("message3").innerHTML="<span style=color:red>*Only 10 digits allowed*";
	  return false;
	  }
	if((num.charAt(0)!=9)&&(num.charAt(0)!=8)&& (num.charAt(0)!=7)){
	  document.getElementById("message3").innerHTML="<span style=color:red>*Invalid.Must start with 9 or 8 or 7*";
	  return false;
	  }
	if(num.length==10){
	  document.getElementById("message3").innerHTML="<span style=color:green>*Valid mobile number*";
	  return true;
	  }
	 
function verifyPassword() { 
   var pw=document.getElementById("pwd").value;
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message4").innerHTML = "<span style=color:red>**Fill the password please!";  
	 return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message4").innerHTML = "<span style=color:red;>**Password length must be atleast 8 characters";  
	 return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message4").innerHTML = "<span style=color:red>**Password length must not exceed 15 characters";  
	 return false;  
  } 
  
  else{
     document.getElementById("message4").innerHTML = "<span style=color:green;>**Strong password"; 
	return true;
  }  
}
function ValidateEmail()
{
	var id=document.getElementById("userid").value;
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(id.match(mailformat))
{
document.getElementById("message5").innerHTML="<span style=color:green>Valid email address!";
return true;
}
if(id=="")
{
document.getElementById("message5").innerHTML="<span style=color:red>Please enter the email address!";
return false;
}
if(!id.match(mailformat))
{
document.getElementById("message5").innerHTML="<span style=color:red>You have entered an invalid email address!";
return false;
}
}