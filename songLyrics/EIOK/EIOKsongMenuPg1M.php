<script>
/* open tracks list */
function openEIOKTracks(){
    var x = document.getElementById('EIOKTracks');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script>
<!-- BUTTONS -->
<div id="buttonDiv">
    <a href="../../indexM.php#anchor2" class="button">Home</a>&nbsp;&nbsp;
    <a class="button" onclick="return false" onmousedown="openEIOKTracks()">List</a>
</div>
<!-- [ EVERYTHING IS OK! TRACKS ] -->
<div id="EIOKTracks" style="display:none;">
  <br />
  <ol>
    <li><a href="oM.php">Obey</a></li>
    <li><a href="itvM.php">I'm the Victim</a></li>
    <li><a href="saM.php">Sour Apple</a></li>
    <li><a href="tM.php">Threads</a></li>
    <li><a href="fdM.php">Free Dumb</a></li>
    <li><a href="lihM.php">Loosey, I'm Home!</a></li>
    <li><a href="mdM.php">Manifest Definitely</a></li>
    <li><a href="sM.php">Sinstrumental</a></li>
    <li><a href="a8M.php">Alien 8</a></li>
    <li><a href="ihmM.php">I Hate Mondays</a></li>
    
    <li><a href="bsM.php">Britney's Song</a></li>
  </ol>
</div>