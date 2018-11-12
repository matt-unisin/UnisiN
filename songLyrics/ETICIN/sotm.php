<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/sotm.gif">
<link rel="prefetch" href="../../images/sotm.jpg">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>Survival of the Misfits</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/sotm.jpg');
}
.cover:hover {
   background-image: url('../../images/sotm.gif');
}
.cursor {
     /* cursor: url(../../images/sotmCursor.png), default; */
     cursor: none;
}
button {margin:0;}
</style>
<script>
/* IF MOBILE DEVICE */
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
if(document.URL !="https://unisin.000webhostapp.com/songLyrics/ETICIN/sotmDTM.php"){
    window.location ="https://unisin.000webhostapp.com/songLyrics/ETICIN/sotmDTM.php";
    }
}
function toggle(button) {
  if(document.getElementById("1").value=="OFF"){
    document.getElementById("1").value="Rise";
    document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left";
    } else if(document.getElementById("1").value=="Rise"){
    document.getElementById("1").value="OFF";
    document.body.style.background = "#f3f3f3 url('../../images/sotmbg.gif') no-repeat fixed top center";
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
<h3>Survival of the Misfits</h3>
<pre>
I tried to blame all my doubts
On the faults of someone else,
Lessening myself
And I always get back down

So, I tried for the best
I ever did. Give it away.
Take all my frustrations
And just give it away.
I take the fall, yet,
I always get back up and rise

'Cause, every TIME
I get tripped up,
I see the better side
And that I need to
Rise back up.

"There is nothing you can
Do to stop me now."
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="iojk.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>