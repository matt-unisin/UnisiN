<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/iojk.gif">
<link rel="prefetch" href="../../images/iojk2.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>I'm Only Joe King</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/iojk.gif');
}
.cover:hover {
   background-image: url('../../images/iojk2.gif');
}
.cursor {
     /* cursor: url(../../images/iojkCursor.png), default; */
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
<h3>I'm Only Joe King</h3>
<pre>
The king's onto something new.
I plan to escape the rule,
Set for a new frontier
And I will make my way from here.

I won't make this journey alone.
So many people ask to go.

Meet new indigene man;
Learn how to farm his land.
We all misunderstand
And I will hunt them down, yeah.

I wrote this history alone
And I will call this place home.
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="iayf.php" class="button">Next >></a>
</div>
<br /><br />
</body>
</html>