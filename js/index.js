// define UI vars
const listenTIME = document.querySelector('#listen-eticin');
const lyricsTIME = document.querySelector('.lyrics-eticin');
const listenOK = document.querySelector('#listen-eiok');
const lyricsOK = document.querySelector('.lyrics-eiok');

// Load all event listeners
loadEventListeners();

// Load all event listeners
function loadEventListeners() {
  // Open the eticin audio player
  listenTIME.addEventListener('click', openETICIN);
  // Go to eticin lyrics pages
  lyricsTIME.addEventListener('click', lyricsETICIN);
  // Open the eiok audio player
  listenOK.addEventListener('click', openEIOK);
  // Go to eiok lyrics pages
  lyricsOK.addEventListener('click', lyricsEIOK);
}

// Go to lyrics pages
function lyricsETICIN() {
  // remove elements
  var x = document.querySelector('.container');
    if (x.style.visibility === 'visible') {
        x.style.visibility = 'hidden';
    } else {
        x.style.visibility = 'hidden';
    }
  // show stomping background
  document.body.style.background = "#f3f3f3 url('images/ETICINcoverANIMATEDstompingBGfast.gif') no-repeat fixed top center";
  document.body.style.backgroundSize = "cover";
  document.body.style.cursor = "none";
  myVar = setTimeout(goToTimeLyrics, 3000);
  // go to eticin lyrics pages
  function goToTimeLyrics() {
      location.href = "songLyrics/ETICIN/notlr.php"
  }
}

// go to eiok lyrics pages
function lyricsEIOK() {
  location.href = "songLyrics/EIOK/o.php"
}

/* MEDIA PLAYER */
function openETICIN() {
    window.open("audioPlayer_ETICIN.php", "", "width=330,height=435,scrollbars=no,menubar=no,titlebar=no,toolbar=no,resizable=no,fullscreen=no,top=180,left=130");
    window.focus();
}
function openEIOK() {
    window.open("audioPlayer_EIOK.php", "", "width=330,height=435,scrollbars=no,menubar=no,titlebar=no,toolbar=no,resizable=no,fullscreen=no,top=180,left=130");
    window.focus();
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
                setTimeout(function(){ location.href = "indexDT.php#anchor2"; }, 3000);
            } else {
                _("status").innerHTML = ajax.responseText;
                _("mybtn").disabled = false;
            }
        }
    }
    ajax.send( formdata );
}