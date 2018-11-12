<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="prefetch" href="../../images/ihm1.gif">
<link rel="prefetch" href="../../images/ihm2.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<link rel="stylesheet" href="../../style/songLyrics.css">
<title>I Hate Mondays</title>
<style>
.cover {
   background-image: url('../../images/ihm1.gif');
}
.cover:hover {
   background-image: url('../../images/ihm2.gif');
}
button {margin:0;}
</style>
<script>
function toggle(button) {
  if(document.getElementById("1").value=="OFF"){
    document.getElementById("1").value="power";
    document.body.style.background = "#f3f3f3 url('../../images/header2.jpg') no-repeat fixed center left";
    } else if(document.getElementById("1").value=="power"){
    document.getElementById("1").value="OFF";
    document.body.style.background = "#f3f3f3 url('../../images/iskg2.gif') no-repeat fixed center top";
    }
}
</script>
</head>
<body>
<div class="container">
    <div class="cursor">
        <div class="cover"></div>
    </div><br /> 
<?php include_once("EIOKsongMenu.php"); ?>
<h3>I Hate Mondays</h3>
<pre>
I woke to the sound of
A gun shot outside of my house
In the early morn';
One more city sound that
I can't believe.
One shot the other
And the other drove off,
Drawing attention to the cops.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="bs.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>