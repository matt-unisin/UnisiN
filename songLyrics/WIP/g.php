<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/g.gif">
<link rel="prefetch" href="../../images/g.jpg">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

<title>Ghostbutlers</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/g.jpg');
}
.cover:hover {
   background-image: url('../../images/g.gif');
}
.cursor {
     /* cursor: url(../../images/gCursor.png), default; */
     cursor: none;
}
#p1 {
    width:50px;
    margin: 0;
    border: 0 solid green;
    float: left;
}
button {margin:0;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function toggle(button) {
  if(document.getElementById("1").value=="OFF"){
    document.getElementById("1").value="Rise";
    document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left";
    } else if(document.getElementById("1").value=="Rise"){
    document.getElementById("1").value="OFF";
    document.body.style.background = "#f3f3f3 url('../../images/tpdbg.gif') no-repeat fixed top left";
    }
}
$(document).ready(function(){
    $("#p1").mouseenter(function(){
        // alert("You entered p1!");
        $("body").css('cursor','url(../../images/gCursor.png),default');
        $("div").css('cursor','url(../../images/gCursor.png),default');
        $("pre").css('cursor','url(../../images/gCursor.png),default');
        $("h3").css('cursor','url(../../images/gCursor.png),default');
    });
});
</script>
</head>
<body>
<div class="container"> 
<?php include_once("ETICINsongMenu.php"); ?>
<h3>Ghostbutlers</h3>

&nbsp;<div id="p1"><img src="../../images/gCursor.png" alt="ghost"></div><< have a <span class="big">free</span> <span class="bigger">pin!!!</span><br /><br />

<pre>
Your faceless ghost;
That don't scare me.
I look at you, though,
You won't even see me

'Cause, I take my TIME
And I rise in the wake
With a free mind.
I've made my mind up
'Cause, you never hesitate
To put a n***a on his back.

Groovin' on, me groovin'
'Cause, me not want to believe in
After seven hundred years,
We've still got something
We can never take back
Because, you're all in my face.
What's up?

Did I make you mad
When I tell ya that
That shorty popped in,
Took it from the back?

By the way did ya
Think I wouldn't figure
Anything that you can do,
Man, I can do it bigger?

That's why you put me
Down in the first place;
I've got something great
That you can't even face.

I know you're not a friend
But, I can just pretend,
Infiltrate and then
Still rise up again.
<div class="cursor">
    <div class="cover"></div>
</div>
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="hbh.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>