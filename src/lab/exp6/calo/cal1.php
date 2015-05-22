<?php
session_start(); 
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/jquery.stopwatch.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.stopwatch.js"></script>
<style type="text/css">
body
{
 font-family: "Helvetica Neue", "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
        font-size: 14px;
        margin-top: .5em; color: #666;

}
#container
{
width: 90%;
margin: 10px auto;
background-color: #fff;
color: #333;
border: 10px solid gray;
height:925px;
}

#top
{
padding: .5em;
background-color: #FFFFFF;
border-bottom: 0px solid gray;
}

#top h1
{
padding: 0;
margin: 0;
}

#leftnav
{
float: left;
width: 160px;
margin: 0;
padding: 1em;
}

#rightnav
{
float: right;
width: 300px;
margin: 0;
padding: 1em;
}

#content
{
width: 98%;
border-left: 0px solid gray;
margin-right: 0px;
border-right: 0px solid gray;
padding: 1em;
#max-width: 36em;

}


#content2
{
width: 800;
margin-left: 0px;
border-left: 0px solid gray;
margin-right: 0px;
border-right: 0px solid gray;
border-top: 0px solid gray;
padding: 1em;
#max-width: 36em;
}

#footer
{
clear: both;
margin: 0;
padding: .5em;
color: #333;
background-color: #ddd;
border-top: 0px solid gray;
}

#leftnav p, #rightnav p { margin: 0 0 1em 0; }
#content h2 { margin: 0 0 .5em 0; }
</style>

<script type="text/javascript">
		$(function() {
			$('#clock1').stopwatch();
		});
	</script>
</head>
<body>
  <div id="container">

<div id="top">
<a href=index.html><img border=0 src=vlabs.jpg style="margin-left:20%"></a><br>
</div>
<div id="content">
<h1>Determination of water equivalent of calorimeter (K)</h1> 
<p>
A thermos Flask of 100 ml capacity is filled with distilled water. System is heated via electric coil connected to constant voltage and current source. As the temperature rise of 1-2 degrees is noted, the power supply is switched off. The initial and final temperatures should be noted for calculation of the K, water equivalent of calorimeter.
</p>
</div>
<center>
<h2>Select duration of power to be supplied</h2> 
<div id="clock1"></div>
<input name=timer type="hidden" ><br> </center>


<div style="width:49%; float:left; margin-top:2%">
<img src="cal.jpg">
</div>

<div style="width:45%; float:right; margin-top:2%">
<FORM name="volu">


<h3>Temperature  <INPUT style="width:70px;height:30px;background-color:#D0F18F;color:#53760D;font:20px/30px cursive;border:solid 1px #6DB72C;background-color:#D0F18F;" TYPE="text" VALUE="298.0" NAME="vol" readonly> K</h3>
<h3>Current  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT style="width:50px;height:30px;background-color:#D0F18F;color:#53760D;font:20px/30px cursive;border:solid 1px #6DB72C;background-color:#D0F18F;" TYPE="text" VALUE="0.5" NAME="i" readonly> A</h3>
<h3>Voltage &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT style="width:50px;height:30px;background-color:#D0F18F;color:#53760D;font:20px/30px cursive;border:solid 1px #6DB72C;background-color:#D0F18F;" TYPE="text" VALUE="10" NAME="v" readonly> V</h3>
</FORM>
</div>




<div id="clock1"></div>
		<br /><br />
    
    <form name="time" method="post" action="cal1a.php">
<input name=timer type="hidden" ><br>
<input name=ikal value=298 type="hidden" ><br>
<input name=kal type="hidden" ><br>
<input type="image" src="next.jpg" alt="Submit button" style="margin-top:10%">
</form>
<div id="footer">
<p align="center">Virtual labs IIT Bombay</p>
</div>
</div>
</body>
</html>
