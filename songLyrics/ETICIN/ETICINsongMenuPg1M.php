<style>
button {color:#FCF3CF;background:transparent;border-width:2px;border-style: solid;border-color: #FCF3CF;position:relative;margin:0em;display:inline-block;padding:0.5em 1em;transition:all 0.3s ease-in-out;text-align:center;
font-weight:bold}
</style>
<script src="../../js/main.js"></script>
<script src="../../js/ajax.js"></script>
<script>
/* ETICIN */
function openETICINTracks(){
    var x = document.getElementById('ETICINTracks');
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
<div id="buttonDiv">
    <a href="../../indexM.php#anchor" class="button">Home</a>&nbsp;&nbsp;
    <a class="button" onclick="return false" onmousedown="openETICINTracks()">List</a>
</div>
<!-- [ EVERY TIME IS CONTAINED IN NOW TRACKS ] -->
<div id="ETICINTracks" style="display:none;border:1px;">
<br />
    <ol>
      <li><a href="notlrM.php">Night of the Living Room</a></li>
      <li><a href="tpdM.php">The Power Dangers</a></li>
      <li><a href="bwM.php">Beast Wrong</a></li>
      <li><a href="hpM.php">Harry Plotter</a></li>
      <li><a href="bttfM.php">Back to the Furniture</a></li>
      <li><a href="iojkM.php">I'm Only Joe King</a></li>
      <li><a href="iayfM.php">I am Your Fodder</a></li>
      <li><a href="stdM.php">Seize the Daydream</a></li>
      <li><a href="nttieM.php">Naked to the Invisible Eye</a></li>
      <li><a href="iskgM.php">It's Sofa King Good</a></li>
      <li><a href="etmM.php">Eleven the Moment</a></li>
      <li><a href="eticinM.php">Every Time is Contained in Now</a></li>
    </ol>
</div>