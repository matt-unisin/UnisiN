<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>UnisiN</title>
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<link rel="stylesheet" href="style/main.css">
<style>
body {
    margin: 20px 0;
    padding: 0;
}
#ETICINcover {
    background-image: url('images/ETICINcover.jpg');
    height: 300px;
    width: 300px;
    margin:auto;
    -webkit-filter: drop-shadow(7px 7px 7px #A4A4A4);
    filter: drop-shadow(7px 7px 7px #222);
}
#EIOKcover {
    background-image: url('images/EIOKcover.jpg');
    height: 300px;
    width: 300px;
    margin:auto;
    -webkit-filter: drop-shadow(7px 7px 7px #A4A4A4);
    filter: drop-shadow(7px 7px 7px #222);
}
</style>
<script>
/* MEDIA PLAYER */
function openETICIN() {
    window.open("audioPlayer_ETICIN.php", "", "width=330,height=435,scrollbars=no,menubar=no,titlebar=no,toolbar=no,resizable=no,fullscreen=no,top=180,left=130");
    window.focus();
}
function openEIOK() {
    window.open("audioPlayer_EIOK.php", "", "width=330,height=435,scrollbars=no,menubar=no,titlebar=no,toolbar=no,resizable=no,fullscreen=no,top=180,left=130");
    window.focus();
}

/* CONFIRM: NAVIGATE TO FULL WEBSITE? */
function getConfirmation(){
   var retVal = confirm("WiFi connection recommended due to large images.");
   /* OK (GO TO FULL WEBSITE HOME PAGE) */
   if( retVal == true ){
      window.location.href = "http://unisin.000webhostapp.com/indexDT.php#desktop";
      return true;
   }
   /* CANCEL (DO NOT NAVIGATE) */
   else{
      return false;
   }
}

/* OPEN CONTACT FORM */
function openUNISINContact(){
    var x = document.getElementById('UNISINContact');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
/* CONTACT FORM */
function _(id){ return document.getElementById(id); }
function submitForm(){
    _("mybtn").disabled = true;
    _("status").innerHTML = 'please wait ...';
    var formdata = new FormData();
    formdata.append( "n", _("n").value );
    formdata.append( "e", _("e").value );
    formdata.append( "m", _("m").value );
    var ajax = new XMLHttpRequest();
    ajax.open( "POST", "contact_parser.php" );
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            if(ajax.responseText == "success"){
                _("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent!</h2>';
                setTimeout(function(){ location.reload(); }, 3000);
            } else {
                _("status").innerHTML = ajax.responseText;
                _("mybtn").disabled = false;
            }
        }
    }
    ajax.send( formdata );
}
</script>
</head>
<body>
<div class="container" style="width:300px;margin:auto;">
<!--<div class="col-lg-offset-6 col-lg-3 col-md-offset-6 col-md-4 col-sm-8 col-xs-12">-->
    <img id="unisin" src="images/UnisiN.png" alt="UnisiN" />
<!--[ Every Time is Contained in Now ]-->
      <br />
      <a id="anchor"></a>
      <div class="date">NEW! 2018</div>
      <div class="albumTitle">Every Time is Contained in Now</div>
      <div id="ETICINcover"></div>
      <div class="buttonDiv">
        <a href="indexM.php#anchor" onclick="openETICIN()">Listen</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
        <!-- <a href="audio/ETICIN/UnisiN-Every.Time.is.Contained.in.Now.zip" download>Download</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; -->
        <a href="songLyrics/ETICIN/notlrM.php">Lyrics</a>
      </div>
      <br />
<!--[ Everything is OK! ] -->
      <br />
      <a id="anchor2"></a>
      <div class="date">2013</div>
      <div class="albumTitle">Everything is OK!</div>
      <div id="EIOKcover"></div>
      <div class="buttonDiv">
        <a href="indexM.php#anchor2" onclick="openEIOK()">Listen</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
        <!-- <a href="audio/EIOK/UnisiN-Everything.is.OK.zip" download>Download</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; -->
        <a href="songLyrics/EIOK/oM.php">Lyrics</a>
      </div>
      <br />
  <!--[ CONTACT FORM/GAMES ]-->
    <div style="margin:auto;">
      <div class="buttonDiv">
          <a id="anchor3"></a>
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
    </div>  <br />
    <!--copyright-->
    <div id="copyright">
        <a id="mobile"></a>
        <a href="indexDT.php#desktop" onclick="getConfirmation(); return false;">Desktop Version</a>
        
        <!--<a href="indexDT.php#desktop" onclick="alert('WiFi connection recommended due to large images.')">Full Website</a>-->
        <br />
        &copy; 2001-<?php echo date("Y"); ?> UnisiN
    </div>
</div>
<br><br><br>
</body>
</html>