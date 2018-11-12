<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Preload images -->
<link rel="prefetch" href="images/curtains_SHADOW.png">
<link rel="prefetch" href="images/ETICINcoverANIMATED.gif">
<link rel="prefetch" href="images/ETICINcoverANIMATEDstomping.gif">
<link rel="prefetch" href="images/ETICINcoverANIMATEDstompingBGfast.gif">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>UnisiN</title>
<link href="//fonts.googleapis.com/css?family=Architects Daughter" rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<link rel="stylesheet" href="style/main.css">
<style>
body {
    margin: -11px 0 0 0;
    padding: 0;
}

#ETICINcover {background-image: url('images/ETICINcoverANIMATED.gif');}
#ETICINcover:hover {background-image: url('images/ETICINcoverANIMATEDstomping.gif');cursor: none;}

#EIOKcover {background-image: url('images/EIOKcover.jpg');}

.links {
    color: #FCF3CF;
    font-weight: bold;
    text-decoration: none;
    cursor: pointer;
}
.links:hover {
  color: #9e9e9e;
}
</style>
<script>
/* IF MOBILE DEVICE
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
if(document.URL !="https://unisin.000webhostapp.com/indexM.php"){
    window.location ="https://unisin.000webhostapp.com/indexM.php";
    }
}
/* IF INTERNET EXPLORER
var isIE = !!navigator.userAgent.match(/Trident/g) || !!navigator.userAgent.match(/MSIE/g);

if(isIE){
 window.location ="https://unisin.000webhostapp.com/indexDTIE.php";
}
else{
 // alert("Not IE");   
} */
</script>
</head>
<body>

<!-- STAGE LIGHTS-->
<img src="images/stageLights.png" id="lights" alt="stage lights" />

<div class="container">

    <!-- UNISIN IMAGE -->
    <img id="unisin" src="images/UnisiN.png" alt="UnisiN" />

    <!-- EVERY TIME IS CONTAINED IN NOW -->
    <br />
    <a id="anchor"></a>
    <div class="date">NEW! 2018</div>
    <div class="albumTitle">Every Time is Contained in Now</div>
    <div class="cursor">
        <div id="ETICINcover" class="cover" style="border:0px solid blue;"></div>
    </div>
    <div class="buttonDiv">
        <a id="listen-eticin" href="indexDT.php#anchor">Listen</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
        <!-- <a href="audio/ETICIN/UnisiN-Every.Time.is.Contained.in.Now.zip" download>Download</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; -->
        <span class="links lyrics-eticin">Lyrics</span>
    </div>
    <br />

    <!-- EVERYTHING IS OK! -->
    <br />
    <a id="anchor2"></a>
    <div class="date">2013</div>
    <div class="albumTitle">Everything is OK!</div>
    <div id="EIOKcover" class="cover"></div>
    <div class="buttonDiv">
        <a id="listen-eiok" href="indexDT.php#anchor2">Listen</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
        <!-- <a href="audio/EIOK/UnisiN-Everything.is.OK.zip" download>Download</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; -->
        <span class="links lyrics-eiok">Lyrics</span>
    </div>
    <br />

    <!--  CONTACT FORM -->
    <div id="contact" style="margin:auto;">
      <div class="buttonDiv">
        <a class="button" onclick="return false" onmousedown="openUNISINContact()">Contact</a>
      </div>
      <div id="UNISINContact" style="display:none;">
        <div id="contact2">
          <form id="my_form" onsubmit="submitForm(); return false;">      
            <input id="n" name="name" type="text" class="feedback-input" placeholder="Name" style="border-bottom: none;" required>   
            <input id="e" name="email" type="text" class="feedback-input" placeholder="Email (for replies)" style="border-bottom: none;" required>
            <textarea id="m" name="text" class="feedback-input" placeholder="Message" required></textarea>
            <br />
            <input id="mybtn" type="submit" value="Submit"/>
            <span id="status"></span>
          </form>
        </div>
      </div>
    </div>
    <br />

    <!-- copyright -->
    <div id="copyright">
        <a href="indexM.php#mobile">Mobile Version</a>
        <br />
        &copy; 2001-<?php echo date("Y"); ?> UnisiN
    </div>
    <br />

</div>

<!-- CROWD -->
<img src="images/crowd.png" id="crowd" alt="crowd" />
<br />

<script src="js/index.js"></script>
</body>
</html>