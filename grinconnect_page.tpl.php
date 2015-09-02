<!-- Title and guide text  -->
<div>
  <h1>GRIN Connect</h1>
  <span>Connect to USDA <a href="http://www.ars-grin.gov/npgs/" target="_blank">GRIN (NPGS)</a> germplasm resources with a <b>GRIN accession number</b> or <b>cultivar name</b>.</span>
  <br/>
</div>

<!-- Form  -->
<div>
<form  method="get">
  <br/>
  Enter GRIN Accession Number OR a cultivar name? <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  
  <input type="text" id="grin_acc_no" name="grin_acc_no" required value="<?php print $_GET['grin_acc_no']; ?>" >
  &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="SUBMIT">
  <br>
  <?php  echo($examples); // from the module file via _theme() ?>

</form>
</div>

<!-- Message  -->
<div>
  <hr/>
  <fieldset  style="background: #E0E0E0;">
    Your search will return a web page directly from <b>GRIN</b>. You may need to scroll down within the GRIN page below to see all of the information. In that page, click the <b>Observations</b> link to see <b>evaluation data</b> if it exists. 
  </fieldset>
</div>

<!-- Iframe GRIN  -->

<div>
  <iframe id="frameviewer" frameborder="4" width="1200" height="1000" scrolling="yes"
    src="<?php  echo($grin_url); ?>"  name="frameviewer"  overflow-x: scroll;  >
</div>


<!-- SCRATCH PAD  -->

