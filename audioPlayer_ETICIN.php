<html>
<head>
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>UnisiN - Every Time is Contained in Now</title>
<link href='//fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style/audioPlayer.css">
<style>
.button {margin-top: 20px;}
</style>
<script>
/* IF MOBILE DEVICE */
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
if(document.URL !="audioPlayer_ETICIN_M.php"){
    window.location ="audioPlayer_ETICIN_M.php";
    }
}

/* DETECT BROWSER VERSION */
if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 ) 
    {   
        // no special page yet
        // window.location ="https://unisin.000webhostapp.com/audioPlayer_ETICIN.php";
        alert('Opera');
    }
    else if(navigator.userAgent.indexOf("Chrome") != -1 )
    {
        // alert('Chrome');
    }
    else if(navigator.userAgent.indexOf("Safari") != -1)
    {
        // no special page yet
        // window.location ="https://unisin.000webhostapp.com/audioPlayer_ETICIN.php";
        // alert('Safari');
    }
    else if(navigator.userAgent.indexOf("Firefox") != -1 ) 
    {
        // alert('Firefox');
    }
    else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
    {
        window.location ="audioPlayer_ETICIN_IE.php";
        // alert('IE'); 
    }  
    else 
    {
       // alert('unknown');
}
</script>
</head>
<body>
    <div id="container">
	    <div class="logo">
			<img src="images/ETICINcover.jpg" alt="UnisiN - Every Time is Containe in Now" />
			<input id="songSlider" class="song-slider" type="range" min="0" step="1" onchange="seekSong()" />
	    </div>
		<div class="audio-player-cont">
			<div class="player">
			    <div id="currentTime" class="current-time">00:00</div>
				<div id="duration" class="duration">00:00</div>
				<div class="controllers">
					<img src="images/previous.png" width="30" onclick="previous();" alt="previous" />
					<img src="images/pause.png" width="40" onclick="playOrPauseSong(this);" alt="pause" />
					<img src="images/next.png" width="30" onclick="next();" alt="next" />
					<img src="images/volume-down.png" width="15" style="margin-left:25px;" alt="volume down" />
					<input id="volumeSlider" class="volume-slider" type="range" min="0" max="1" step="0.01" onchange="adjustVolume()" />
					<img src="images/volume-up.png" width="15" style="margin-left:8px;" alt="volume up" />
				</div>
				<div id="nextSongTitle" class="next-song-title"></div>
				<div id="songTitle" class="song-title">Song title</div>
			</div>
		</div>
		<!-- <a class="button" onclick="window.open('', '_self', ''); window.close();">X Close</a> -->
	</div>
<script src="js/audioPlayer_ETICIN.js"></script>
</body>
</html>