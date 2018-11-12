<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/iayf.jpg">
<link rel="prefetch" href="../../images/iayf2.jpg">
<link rel="prefetch" href="../../images/iayfbg.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>I am Your Fodder</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/iayf2.jpg');
}
.cover:hover {
   background-image: url('../../images/iayf.jpg');
}
.cursor {
     cursor: url(../../images/iayfCursor.png), default;
}
button {margin:0;}
</style>
<script>
function background() {
    if(document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left"){
        document.body.style.background = "#f3f3f3 url('../../images/iayfbg.gif') no-repeat fixed top left";
        setTimeout(myTimeout1, 7270) 
    }
}
function myTimeout1() {
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
<h3>I am Your Fodder</h3>
<pre>
Into the world we wander,
Under the moon and stars,
Until the day we wonder
Exactly how we are
<input type="button" onclick="background()" value="Born" style="color: #000;" /><img src="../../images/hp.gif" style="width:1px;height:1px;" alt="hp" /> into this life.
Wondering what is right
Becomes obsession
'Til the thought is
In our hindsight.

They created God;
Made us all their sinners.
Walk into their doors;
Have your soul forgiven.
I just don't understand it.
I want to go home.

Breathe in, breathe out;
It's then, you've found
What life's about
'Cause, the meaning of life
is to give life meaning.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="std.php" class="button">Next >></a>
</div>

<!-- That's right!
Follow the leader.
That's right!
Follow or thy be dammned.
Goddamn. -->

<br /><br />
</body>
</html>