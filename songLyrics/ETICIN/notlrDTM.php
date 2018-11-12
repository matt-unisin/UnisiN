<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/notlr.gif">
<link rel="prefetch" href="../../images/notlr_INSTRUCTIONS_M.gif">
<link rel="prefetch" href="../../images/notlrbg1.gif">
<link rel="prefetch" href="../../images/notlrbg2.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>Night of the Living Room</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
    background-image: url('../../images/notlr_INSTRUCTIONS_M.gif');
}
.cover:hover {
    background-image: url('../../images/notlr.gif');
}
.cursor {
     cursor: url(../../images/notlrCursor.png), default;
}
#click {
    width: 300px;
    margin: auto;
}
.speech-bubble {
    background-color: #f8f8f8;
    border: 1px solid #c8c8c8;
    border-radius: 5px;
    opacity: 0.85;
    filter: Alpha(opacity=85); /* IE8 and earlier */
    width: 180px;
    text-align: center;
    padding: 5px;
    position: absolute;
    color: black;
}
.speech-bubble .arrow {
    border-style: solid;
    position: absolute;
    margin-left: 15px;
}
.bottom {
    border-color: #c8c8c8 transparent transparent transparent;
    border-width: 8px 8px 0px 8px;
    bottom: -8px;
}
#scroll-space {
	height: 0;
	overflow: hidden;
}
button {margin:0;}
</style>
<script src="../../js/main.js"></script>
<script src="../../js/ajax.js"></script>
<script>
/* IF MOBILE DEVICE */
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
if(document.URL !="https://unisin.000webhostapp.com/songLyrics/ETICIN/notlrDTM.php"){
    window.location ="https://unisin.000webhostapp.com/songLyrics/ETICIN/notlrDTM.php";
    }
}
function openETICINTracks(){
    var x = document.getElementById('ETICINTracks');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

/* BUTTON: "UNDER"; CHANGE BG TO MONSTER EATING BED */
x = document.getElementsByClassName("container");
function background1() {
    if(document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left"){
        x[0].style.visibility = "hidden";
        x[1].style.visibility = "hidden";
        document.body.style.cursor = "none";
        document.body.style.background = "#f3f3f3 url('../../images/notlrbg1.gif') no-repeat fixed top left";
        document.getElementById("click").innerHTML = "";
        setTimeout(myTimeout1, 3500) 
    }
}
function myTimeout1() {
    x[0].style.visibility = "visible";
    x[1].style.visibility = "visible";
    document.body.style.cursor = "default";
    document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left";
}

/* BUTTON: "SEE"; CHANGE BG TO ZOMBIES */
function background2() {
    if(document.body.style.background = "#f3f3f3 url('../../images/notlrbg1.gif') no-repeat fixed top left"){
        x[0].style.visibility = "hidden";
        x[1].style.visibility = "hidden";
        document.body.style.cursor = "none";
        document.body.style.background = "#f3f3f3 url('../../images/notlrbg2.gif') no-repeat fixed top left";
        setTimeout(myTimeout2, 5700) 
    }
}
function myTimeout2() {
    x[0].style.visibility = "visible";
    x[1].style.visibility = "visible";
    document.body.style.cursor = "default";
    document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left";
}
</script>
</head>
<body>
<div class="container">

<?php include_once("ETICINsongMenuPg1.php"); ?>
<h3>Night of the Living Room</h3>
<pre>
You can feel it coming
Straight back to you.
It's that feeling something's
In your room.
Run to lock all the windows.
Scramble to lock
All of the doors.
Somebody's waiting
Somebody's waiting
</pre>
</div>
<div id="click"><br />
    <div class="speech-bubble">
        <div class="arrow bottom right"></div>
        click buttons when<br />
        the lyric is sung
    </div><br /><br /><br />
</div>
<div class="container"><pre>
<input type="button" onclick="background1()" value="Under" style="color: #000;" /><img src="../../images/hp.gif" style="width:1px;height:1px;" alt="hp" />-neath your bed.
Run to hide under covers.
Bury your face in your hands.

It's over for you.
There's no one left
To save you now;
A false sense of security.
Blood spatter paints
The vacant walls.
Darkness is where 
You'll find me.

How can you sleep when
There's something lurking?

</pre>
<div class="cursor">
  <div class="cover"></div>
</div>
<pre>

I know it's dark now.
I know it's oh, so very.
Out of the darkness,
Insanity is temporary.
The knife on the nightstand;
I think you've watched
One too many movies
Alone in the darkness
And now, it's all
That you can <input type="button" onclick="background()" value="see" style="color: #000;" /><img src="../../images/hp.gif" style="width:0px;height:0px;" alt="hp" />.
"It's coming for me!"

The darkness is where
You'll find me.
<div id="div1"></div><div id="scroll-space"></div><br />
</pre>
<a href="../../indexDT.php#anchor" class="button">Home</a>&nbsp;&nbsp;
<a href="tpd.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>