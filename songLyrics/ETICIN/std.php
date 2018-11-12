<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/std.gif">
<link rel="prefetch" href="../../images/std.jpg">
<link rel="prefetch" href="../../images/stdbg.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>Seize the Daydream</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/std.jpg');
}
.cover:hover {
   background-image: url('../../images/std.gif');
}
.cursor {
    /* cursor: url(../../images/stdCursor.png), default; */
     cursor: none;
}
button {margin:0;}
</style>
<script>
x = document.getElementsByClassName("container");
function background() {
    if(document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left"){
        x[0].style.visibility = "hidden";
        document.body.style.cursor = "none";
        document.body.style.background = "#f3f3f3 url('../../images/stdbg.gif') no-repeat fixed top left";
        setTimeout(myTimeout1, 12750) 
    }
}
function myTimeout1() {
    x[0].style.visibility = "visible";
    document.body.style.cursor = "default";
    document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left";
}
</script>
</head>
<body>
<div class="container">
    <div class="cursor">
        <div class="cover"></div>
    </div><br /> 
<?php include_once("ETICINsongMenu.php"); ?>
<h3>Seize the Daydream</h3>
<pre>
When I realized a
Little known confusion;
The mind's what is real
And reality's illusion.
I had to sit back
And think about it,
Never letting myself live
<input type="button" onclick="background()" value="Without" style="color: #000;" /><img src="../../images/hp.gif" style="width:1px;height:1px;" alt="hp" /> it.

The more I tried to understand,
I felt more disconnected.
I think, therefore I am
Not living in the present moment.
I had to force myself
To not think about it,
Never letting myself live.

I think, therefore I am
Not living in the present moment.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="nttie.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>