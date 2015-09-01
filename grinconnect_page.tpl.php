<div>
  <h1>GRIN Connect</h1>
  <span>Connect to USDA <a href="http://www.ars-grin.gov/npgs/" target="_blank">GRIN (NPGS)</a> germplasm resources with a <b>GRIN accession number</b> or <b>cultivar name</b>.</span>
  <br/>
</div>

<div>
<form  method="get">
  <br/>
  Enter your GRIN Accession Number? &nbsp;&nbsp;&nbsp;
  <input type="text" id="grin_acc_no" name="grin_acc_no" required value="<?php print $_GET['grin_acc_no']; ?>" >
  <input type="submit" value="SUBMIT">
  <br>
  <?php  echo $examples; // from the module file via _theme() ?>
  <br/>
</form>
</div>

<!-- Message  -->
<div>
  <hr/>
  <fieldset  style="background: LightGray;">The following part displays a webpage directly from <b>GRIN.</b><br/>  Click the <b><u>Observations</u></b> link below to see the <u>evaluation data</u> at GRIN if it exist.
    <br/>
  </fieldset>
</div>

<?php
$acc_no = $_GET['grin_acc_no'];
$grin_url = "http://www.ars-grin.gov/cgi-bin/npgs/acc/search.pl?accid=".$acc_no;
?>


<div>
  <iframe id="frameviewer" frameborder="4" width="1200" height="1000" scrolling="yes"  src="<?php  echo($grin_url); ?>"  name="frameviewer"  overflow-x: scroll;  >
</div>


<!-- SCRATCH PAD  -->

<!--

  <div id="examples"  style="font-size:80%;">
    <b>Example:</b>
      <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>PI 289619</a>. Use either 'PI 289619' with space between PI and the number OR just the number, <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>289619</a> without the prefix 'PI'. Searches with descriptors or variety names may not give results for all GRIN holdings.
    <br/>
    <b>More examples:</b>  
    <br/>
    Common bean: 
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>PI 310511</a>,  
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>Calima</a>,
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>PI 325730</a>, 
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>Jamapa</a>,
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>DOR364</a>,
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>BAT93</a>
    <br/>
    Peanut:
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>PI 289619</a>, 
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>PI 565448</a>,  
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>Florunner</a>, 
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>Valencia</a>, 
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>Tifrunner</a>
    <br/>
    Chickpea:
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>Ujjain24</a>,
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>PI 374113</a>, 
    <a href="#" onclick='document.getElementById("grin_acc_no").value=this.innerHTML;'>PI 489777</a>
  </div>


-->