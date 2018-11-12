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
    <a class="button" onclick="goBack()">&lt;&lt;</a>&nbsp;&nbsp;
    <a href="../../indexDT.php#anchor" class="button">Home</a>&nbsp;&nbsp;
    <a class="button" onclick="return false" onmousedown="openETICINTracks()">List</a>
</div>
<!-- [ EVERY TIME IS CONTAINED IN NOW TRACKS ] -->
<div id="ETICINTracks" style="display:none;border:1px;">
<br />
    <ol>
      <li><a href="notlr.php">Night of the Living Room</a></li>
      <li><a href="tpd.php">The Power Dangers</a></li>
      <li><a href="bw.php">Beast Wrong</a></li>
      <li><a href="hp.php">Harry Plotter</a></li>
      <li><a href="bttf.php">Back to the Furniture</a></li>
      <li><a href="iojk.php">I'm Only Joe King</a></li>
      <li><a href="iayf.php">I am Your Fodder</a></li>
      <li><a href="std.php">Seize the Daydream</a></li>
      <li><a href="nttie.php">Naked to the Invisible Eye</a></li>
      <li><a href="iskg.php">It's Sofa King Good</a></li>
      <li><a href="etm.php">Eleven the Moment</a></li>
      <li><a href="eticin.php">Every Time is Contained in Now</a></li>
	</ol>
</div>