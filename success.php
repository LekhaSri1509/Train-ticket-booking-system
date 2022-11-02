<html>
<head>
<title> SUCCESS </title>
<style>
#tick-mark {
    position: relative;
    display: inline-block;
    width: 100px;
    height: 100px;
}

#tick-mark::before {
    position: absolute;
    left: 0;
    top: 50%;
    height: 50%;
    width: 3px;
    background-color: #11ba6b;
    content: "";
    transform: translateX(10px) rotate(-45deg);
    transform-origin: left bottom;
	
}

#tick-mark::after {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 100%;
    background-color:#11ba6b;
    content: "";
    transform: translateX(10px) rotate(-45deg);
    transform-origin: left bottom;
		

}
blink {
  -webkit-animation: 2s linear infinite condemned_blink_effect; /* for Safari 4.0 - 8.0 */
  animation: 2s linear infinite condemned_blink_effect;
}

/* for Safari 4.0 - 8.0 */
@-webkit-keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
</style>
</head>
<body bgcolor="FCCAF1">
<br><br><br><br><br><br><br><br><br><br><center>
<div id="tick-mark"></div>
<h1 style="font-family:bookman old style;text-align:center; color:#0eb047;font-size:50"><marquee behavior="alternate";scrollamount="9">BOOKED SUCCESSFULLY!!!</h1></marquee>
<h1 style="color:#ff1717"><strong><blink>HAPPY JOURNEY</h1></blink>
</body>
</html>
