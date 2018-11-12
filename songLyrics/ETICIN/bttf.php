<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/bttf.gif">
<link rel="prefetch" href="../../images/bttf.jpg">
<link rel="prefetch" href="../../images/bttfbg.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<title>Back to the Furniture</title>
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/bttf.jpg');
}
.cover:hover {
   background-image: url('../../images/bttf.gif');
}
.cursor {
     cursor: url(../../images/bttfCursor.png), default;
}
#click {
    width: 300px;
    margin: auto;
    color: #FCF3CF;
}
button {margin:0;}

/* font to make the blanks a straight line instead of dashes */
.blank {
    font-family: "Comic Sans MS", cursive, sans-serif
}
</style>
<script>
function toggle(button) {
  if(document.getElementById("1").value=="OFF"){
    document.getElementById("1").value="space";
    document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left";
    } else if(document.getElementById("1").value=="space"){
    document.getElementById("1").value="OFF";
    document.body.style.background = "#f3f3f3 url('../../images/bttfbg.gif') no-repeat fixed top center";
    }
}
</script>
</head>
<body>
<div class="container">
    <div class="cursor">
        <div class="cover"></div>
    </div><br />   
<?php include_once("ETICINsongMenu.php"); ?>
<h3>Back to the Furniture</h3>
<pre>
In <input type="button" id="1" value="space" style="color:black"
       onclick="toggle(this);" /> and TIME,
We live out lives
Through what we have
Within our minds.
What we can see,
We look with eyes;
The visible spectrum,
The rest, we're blind.
Remember back
To the future plans.
You took so long
To give thanks back.
We talk so much,
With nothing said.
Don't look now 'cause,
That moment's passed.

There was never enough
TIME to bide me.
Don't always go with the
Flow with what's happening
And now, it's TIME to.

Give someone the <span class="blank">____</span> of day.
There is no <span class="blank">____</span> like the present.
<span class="blank">____</span> Is of the essence.
Now, that TIME's gone.
Standing the test of <span class="blank">____</span>.
<span class="blank">____</span> goes marching on.
<span class="blank">____</span> flies when you have fun.
Now, that TIME's gone.

<span class="big">Let go of the past.
Live life in the now.
Fear not for the fu</span><span class="bigger">u</span><span class="biggest">tuuure!</span>

I will never be
One with society
'Cause, I was always
Alone with that company
And now, it's TIME to <span class="bigger">die!!</span>

Don't let it get away,
Baby, blooming into childhood,
Changing into teenage,
Turning into mother,
Fucking into father TIME.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="iojk.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>