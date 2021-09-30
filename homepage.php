<?php
session_start();
if(isset($_SESSION["username"]))
{
 if(time()-$_SESSION["login_time_stamp"] >100)
 {
 session_unset();
 session_destroy();
 header("Location:login.php");
 }
}
else
{
 header("Location:login.php");
}
?>
<html>
<head>
<title>AppSolute</title>
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<style>
#topbar{
width:2000px;
background-color:#121212;
height:80px;
}
body
{
margin:0;
padding:0;
font-family: 'Rubik', sans-serif;
background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
background-size: 400% 400%;
animation: gradient 15s ease infinite;
}
@keyframes gradient {
 0% {
 background-position: 0% 50%;
 }
 50% {
 background-position: 100% 50%;
 }
 100% {
 background-position: 0% 50%;
 }
}
/*html{
 zoom: 80%;
}*/
.fly {
 position: relative;
 animation: mymove 4s infinite;
 display: inline;
}
@keyframes mymove {
 from {left: 0px;}
 to {left:2000px;}
}
#logo{
width:77px;
height:77px;
float:left;
margin-top:3px;
margin-right:6px;
margin-left:4px;
}
.top-barsection
{
float:left;
border-left: 10px #FCB040 double;
height:100%;
}
#sign-inimage
{
width:72px;
height:72px;
margin:4px;
margin-right:3px;
margin-left:2px;
}
#login
{
color:white;
font-size:125%;
position:relative;
top:-35px;
margin-right:10px;
}
#garbageimage
{
width:77px;
height:77px;
margin:2px;
margin-right:2px;
margin-left:2px;
}
#foodimage
{
width:71px;
height:71px;
margin:5px;
margin-right:2px;
margin-left:2px;
}
#repairimage
{
width:75px;
height:75px;
margin:3px;
margin-top:4px;
margin-right:3px;
margin-left:4px;
}
#gpsimage
{
width:79px;
height:79px;
margin:3px;
margin-right:2px;
margin-left:2px;
}
#hospitalimage
{
height:74px;
width:72px;
margin:3px;
margin-right:4px;
}
#helplineimage
{
height:74px;
width:75px;
margin:3px;
margin-right:6px;
margin-left:4px;
}
#eveimage
{
width:75px;
height:75px;
margin:5px;
margin-top:4px;
margin-right:6px;
margin-left:4px;
}
#appsolutelogo
{
position:relative;
top:60px;
right:-350px;
}
#sideimage
{
position:relative;
top:190px;
right:-100px;
height:2000px;
width:50px;
}
#downimage
{
position:relative;
top:-1900px;
right:-10px;
height:50px;
width:1500px;
}
#maincontent1
{
position:absolute;
top:500px;
right:10px;
height:400px;
width:900px;
background-color:white;
}
#AboutUs
{
color:white;
font-size:125%;
position:absolute;
top:520px;
right:-5px;
margin-right:10px;
margin-left:10px;
}
h1
{
color:#FF9800;
margin-right:10px;
right:1100px;
border-bottom:2px pink solid;
}
#ha1
{
position:absolute;
top:450px;
}
#ha2
{
position:absolute;
top:750px;
right:1003px;
}
#ha3
{
position:absolute;
top:1100px;
right:1010px;
}
#ha4
{
position:absolute;
top:1450px;
right:1040px;
}
#ha5
{
position:absolute;
top:1800px;
right:1040px;
}
#ha6
{
position:absolute;
top:2150px;
right:940px;
}
h2
{
color:white;
width:1200px;
right:50px;
margin-bottom:20px;
}
#a
{
position:absolute;
top:550px;
}
#b
{
position:absolute;
top:850px;
}
#c
{
position:absolute;
top:1203px;
}
#d
{
position:absolute;
top:1550px;
}
#e
{
position:absolute;
top:1900px;
}
#f
{
 position:absolute;
 top:2250px;
}
.new
{
position:absolute;
right:550px;
}
a:hover{
 color:green;
}
}
.container{
 position:relative;
 text-align: center;
 margin-top: 360px;
}
.btn{
 border: 2px solid #3498db;
 background: none;
 padding: 10px 20px;
 font-size: 20px;
 font-family: "montserrat";
 cursor: pointer;
 margin: 10px;
 transition: 0.8s;
 position: relative;
 overflow: hidden;
 right:-455px;
}
.btn2{
 color: #3498db;
}
.btn2:hover{
 color: #fff;
}
.btn::before{
 content: "";
 position: absolute;
 left: 0;
 width: 100%;
 height: 0%;
 background: #3498db;
 z-index: -1;
 transition: 0.8s;
}
.btn2::before{
 bottom: 0;
 border-radius: 50% 50% 0 0;
}
.btn2:hover::before{
 height: 180%;
}
p {
 position: relative;
 font-family: sans-serif;
 text-transform: uppercase;
 font-size: 2em;
 letter-spacing: 4px;
 overflow: hidden;
 background: linear-gradient(90deg, #000, #fff, #000);
 background-repeat: no-repeat;
 background-size: 80%;
 animation: animate 5s linear infinite;
 -webkit-background-clip: text;
 -webkit-text-fill-color: rgba(255, 255, 255, 0);
}
@keyframes animate {
 0% {
 background-position: -500%;
 }
 100% {
 background-position: 500%;
 }
}
footer{
 margin:auto;
 font-size: 3em;
}
</style>
</head>
<body>
<p>MADE BY ANUBHAV AND ATHARV</p>
<div id="topbar">
<a href=""><img id="logo" src="logo.png" ></a>
<div id="sign-in" class="top-barsection">
<a href="webpageusingcss.php"><img id="sign-inimage" src="Profile512.png"></a>
<span id="login">Log-Out</span>
</div>
<div id="Room-Cleaning" class="top-barsection">
<a href="roomcleaning.php"><img id="garbageimage" src="checkroom.jpg"></a>
<span id="login">Room-Checkup</span>
</div>
<div id="Night-Canteen" class="top-barsection">
<a href="nightcanteen.php"><img id="foodimage" src="medi.jpg"></a>
<span id="login">Medi store</span>
</div>
<div id="maintenance" class="top-barsection">
<a href="maintenance.php"><img id="repairimage" src="maintenance6.png"></a>
<span id="login">Room sanitization</span>
</div>
<div id="tracking" class="top-barsection">
<a href="map.php"><img id="gpsimage" src="gps4.png"></a>
<span id="login">Ambulance-Tracking</span>
</div>
<div id="Emergency-Services" class="top-barsection">
<a href="ambulance.php"><img id="hospitalimage" src="ambulance.png"></a>
<span id="login">Emergency Services</span>
</div>
<div class="top-barsection">
<a href="o7/PhoneNumber.php"><img id="eveimage" src="vacine.png"></a>
<span id="login">Vacine Registration</span>
</div>
<!-- <div class="top-barsection">
<a href="event/"><img id="calimage" src="calendar.jpg"></a>
<span id="login">Calendar</span>
</div> -->
</div>
</div>
<div>
<img id="appsolutelogo"src="sahyog.png">
</div>
<div id="maincontent">
<img id="sideimage" src="capture.jpg">
<img id="downimage" src="line.jpg">
<div class="fly">
 <img src="vit.png" alt="">
 </div>
<h1 id="ha1">About Us</h1>
<h2 id="a" >This project aims at integrating various components of the medical industry - The hospitals, the tool vendors in real time, creating an optimal supply-ondemand service for the students of VIT Vellore.</h2>
<h1 id="ha2" class="column">Room-Checkup</h1>
<h2 id="b">On clicking on the link given below you will be redirected to a web
page to
register for health checkup in your own room.
<br><br><br>
<div class="container" >
 
 <a href="roomcleaning.php"><button class="btn btn2">Register Here</button></a>

</div>
</h2>
<h1 id="ha3">Medi - store</h1>
<h2 id="c">Now order your medical ordinance online.
<br><br><br>
<div class="container" >

 <a href="nightcanteen.php"><button class="btn btn2">Order here</button></a>

</div>
</h2>
<h1 id="ha4">Sanitization</h1>
<h2 id="d">Now register your room for covid sanitization and disinfection of your room on your fingertips.
<br><br><br>
<div class="container" >

 <a href="maintenance.php"><button class="btn btn2">Register Here</button></a>

</div>
</h2>
<h1 id="ha5">Tracking</h1>
<h2 id="e">Now no more wait for the ambulance just check the location of your from the given link.
<br><br><br>
<div class="container" >

 <a href="map.php"><button class="btn btn2">Locate your ride</button></a>

</div>
</h2>
<h1 id="ha6">Emergency-Services</h1>
<h2 id="f">No need to go to block guard to call ambulance directly call ambulance from the given link.
 <br><br><br>
 <div class="container" >

 <a href="ambulance.php"><button class="btn btn2">Call Ambulance</button></a>
 
 </div>
</div>
</div>
<footer><a href="event/">Click here to see mass vacination dates.</footer>
</body>
</html>
