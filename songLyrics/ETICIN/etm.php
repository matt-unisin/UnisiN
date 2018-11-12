<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="../../images/etm.gif">
<link rel="prefetch" href="../../images/etm.jpg">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<title>Eleven the Moment</title>
<link rel="stylesheet" href="../../style/songLyrics.css">
<style>
.cover {
   background-image: url('../../images/etm.jpg');
}
.cover:hover {
   background-image: url('../../images/etm.gif');
}
.cursor {
     /* cursor: url(../../images/etmCursor.png), default; */
     cursor: none;
}
button {margin:0;}
h4 {
    margin: 0;
    text-decoration: underline;
    font-weight: bold;
}
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
<h3>Eleven the Moment</h3>
<pre>
Hours, before you break down,
Before you crash,

Watch as the clouds drift away.
New life is due us
Like the ones before you.
Before you break through,
The sun is gone.

Watching the flowers that grow;
Subtle things that
You may never know before you
Make out the
Scents of your own.

If not now, then
When will you live in
Your dying dream
As you wait for it to begin
And if not now, tell me,
When will you begin
To shine as bright
As the burning light within?

Hours, before you break down,
Before you crash,

What do we always think of?
New lovers do us
Like the ones before you.
Before you break up
your sense of self.

Why do the problems that come
Haunt us for hours,
Like the ones before you
But, right now,
What harm do they cause?

If not now, then
When will you live in
Your dying dream
As you wait for it to begin
And if not now, tell me,
When will you begin
To shine as bright
As the burning light within?
<br />
</pre>
<a class="button" onclick="goBack()">&lt;&lt; Back</a>&nbsp;&nbsp;
<a href="eticin.php" class="button">Next >></a>
<!-- <a href="../../indexDT.php#anchor"class="button">Home</a> -->
</div>
<br /><br />
</body>
</html>