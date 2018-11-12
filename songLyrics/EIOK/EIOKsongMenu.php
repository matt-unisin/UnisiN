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
function goBack() {
    window.history.back();
}
</script>
<!-- BUTTONS -->
<div id="buttonDiv">
    <a class="button" onclick="goBack()">&lt;&lt;</a>&nbsp;&nbsp;
    <a href="../../indexDT.php#anchor2" class="button">Home</a>&nbsp;&nbsp;
    <a class="button" onclick="return false" onmousedown="openEIOKTracks()">List</a>
</div>
<!-- [ EVERYTHING IS OK! TRACKS ] -->
<div id="EIOKTracks" style="display:none;">
  <br />
  <ol>
    <li><a href="o.php">Obey</a></li>
    <li><a href="itv.php">I'm the Victim</a></li>
    <li><a href="sa.php">Sour Apple</a></li>
    <li><a href="t.php">Threads</a></li>
    <li><a href="fd.php">Free Dumb</a></li>
    <li><a href="lih.php">Loosey, I'm Home!</a></li>
    <li><a href="md.php">Manifest Definitely</a></li>
    <li><a href="s_GAME.php">Sinstrumental</a></li>
    <li><a href="a8.php">Alien 8</a></li>
    <li><a href="ihm.php">I Hate Mondays</a></li>
    <li><a href="bs.php">Britney's Song</a></li>
  </ol>
</div>
