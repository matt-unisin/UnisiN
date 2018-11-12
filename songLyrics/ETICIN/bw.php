<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/bw.gif">
<link rel="prefetch" href="../../images/bw.jpg">
<link rel="prefetch" href="../../images/bw2.jpg">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>Beast Wrong</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/bw.gif');
}
/* .cover:hover {
   background-image: url('../../images/bw.jpg');
} */
.cover:active {
    background-image: url("../../images/bw2.jpg");
}
.cursor {
    cursor: url("../../images/bwCursor.png"), default;
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
    document.body.style.background = "#f3f3f3 url('../../images/bwbg.gif') no-repeat fixed top left";
    }
}
</script>
</head>
<body>
<div class="container"> 
<?php include_once("ETICINsongMenu.php"); ?>
<h3>Beast Wrong</h3>
<pre>
He threw his eyes
In our direction;
Back to his face
Inside the mirror
And threw his sword
On the floor;
Takes a step back.
He don't wanna
Take that path.
Rise above.
Lift the blindfold.
You've gotta
Bring yourself to

Rise above the hate
'Cause, it's equal to
That which you take.

</pre>
<div class="cursor">
  <div class="cover"></div>
</div>
<pre>

What can we take from this?
What can be learned from this?
This confrontation makes us
Weak inside.

What does it do for you?
What does it do for me?
What does it do for us?
Woah.

Rise above the hate
'Cause, it's equal to
That which you take.
Rise above all the
Violence and hate!

I see you.
I can hear you calling for...
Rise above and now
That conversation's over.

It's TIME for us
To rise above
And come together
Right now.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="hp.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>