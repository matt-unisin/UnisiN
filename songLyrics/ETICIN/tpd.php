<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/tpd.gif">
<link rel="prefetch" href="../../images/tpd.jpg">
<link rel="prefetch" href="../../images/tpdbg.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>The Power Dangers</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/tpd.jpg');
}
.cover:hover {
   background-image: url('../../images/tpd.gif');
}
.cursor {
     cursor: url(../../images/tpdCursor.png), default;
}
button {margin:0;}
</style>
<script>
function toggle(button) {
  if(document.getElementById("1").value=="OFF"){
    document.getElementById("1").value="Let";
    document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left";
    } else if(document.getElementById("1").value=="Let"){
    document.getElementById("1").value="OFF";
    document.body.style.background = "#f3f3f3 url('../../images/tpdbg.gif') no-repeat fixed top center";
    }
}
function myLeaveFunction() {
    // location.reload();
}
</script>
</head>
<body>
<div class="container">
    <div class="cursor">
        <div class="cover" onmouseleave="myLeaveFunction()"></div>
    </div><br /> 
<?php include_once("ETICINsongMenu.php"); ?>
<h3>The Power Dangers</h3>
<pre>
Rise above them; arise again.
TIME to live in the moment
And live again.
Let's do something.
Let's start the world all over.

We all fall 'cause,
you get what you want
And you want what you get
And you can't wait for it
And we want what you've got
And we know it's a lot
And we can't fucking wait for it.

<input type="button" id="1" value="Let" style="color:black"
       onclick="toggle(this);" /><img src="../../images/hp.gif" style="width:1px;height:1px;" alt="hp" /> the blood run out
(it's their blood).

It's our TIME, Take it.
Let us not waste it.
Let the blood pour down,
Taste it.
When their lights go out,
It's less dangerous.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="bw.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>