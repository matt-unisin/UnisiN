<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/eticin.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>Every Time Is Contained In Now</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/eticin.gif');
}
.cursor {
     /* cursor: url(../../images/eticinCursor.png), default; */
     cursor: none;
}
button {margin:0;}
</style>
<script>
function background() {
    if(document.body.style.background = "#f3f3f3 url('../../images/header.jpg') no-repeat fixed top left"){
        document.body.style.background = "#f3f3f3 url('../../images/eticinbg.gif') no-repeat fixed top left";
        setTimeout(myTimeout1, 7900) 
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
<h3>Every Time Is<br />
Contained In Now</h3>
<pre>
As I was on the down and out,
Thought that only time would tell
When my life would turn around
And I'd awaken from this spell.
Time heals everything, they say

But, time is only an illusion.
Every time is contained in now.
Break away from that delusion
To conceal what life is about.
Time to break away from time.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="../../indexDT.php#anchor"class="button">Home</a>
</div>
<br /><br />
</body>
</html>