<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/hp2.gif">
<link rel="prefetch" href="../../images/hp.gif">
<link rel="prefetch" href="../../images/hpbg.gif">
<link rel="prefetch" href="../../images/hpbg2.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>Harry Plotter</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/hp.gif');
}
.cover:hover {
   background-image: url('../../images/hp2.gif');
}
.cursor {
     cursor: url(../../images/hpCursor.png), default;
}
#click {
    width: 300px;
    margin: 0 auto;
    padding: 0 0 0 140px;
    color: #FCF3CF;
    text-decoration: none;
    font-weight: bold;
    cursor: pointer;
}
#click:hover {
   color: #999;
}
button {margin:0;}
</style>
<script>
function toggle(button) {
  if(document.getElementById("1").value=="back"){
    document.getElementById("1").value="away";
    location.reload();
    } else if(document.getElementById("1").value=="away"){
    document.getElementById("1").value="back";
    document.body.style.background = "#f3f3f3 url('../../images/hpbg.gif') no-repeat fixed top left";
    }
}
function background() {
    if(document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left"){
        document.body.style.background = "#f3f3f3 url('../../images/hpbg2.gif') no-repeat fixed top center";
    }
}
function myFunction() {
    document.getElementById("click").innerHTML = "-UnisiN";
}
</script>
</head>
<body>
<div class="container">
    <div class="cursor">
        <div class="cover"></div>
    </div><br /> 
<?php include_once("ETICINsongMenu.php"); ?>
<h3>Harry Plotter</h3>
<pre>
"Lies!"

Just because I look
Something like them,
Doesn't mean I
Fucking am like them.
I've got my own way of
Doing things like them
But, not the same 'cause,
I'm not a thing like them.

My sea of doubt
Washes over me
As I see you, now,
turn to walk <input type="button" id="1" style="color:black;font-weight:normal;"
       onclick="toggle(this);" value="away" /><img src="../../images/hp.gif" style="width:1px;height:1px;" alt="hp" />.

Just because I look
Something like them,
Doesn't mean I
Fucking am like them.
I've got my own way of
Doing things like them
But, not the same 'cause,
I'm not a thing like them.

Run until you're out of TIME,
Never checking out alive,
Run and tell your
Kids a fucking lie!

Just because I look
Something like them,
Doesn't mean I
Fucking am like them.
I've got my own way of
Doing things like them
But, not the same 'cause,
I'm not a thing like them.

My sea of doubt
Washes over me
As I see you, now,
<input type="button" onclick="background()" value="Turn" style="color: #000;" /><img src="../../images/hp.gif" style="width:1px;height:1px;" alt="hp" /> to walk away.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="bttf.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>