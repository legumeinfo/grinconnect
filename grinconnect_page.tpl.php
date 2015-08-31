<div>
  <h1>GRIN Connect</h1>
  <span>Connect to USDA <a href="http://www.ars-grin.gov/npgs/" target="_blank">GRIN (NPGS)</a> germplasm resources with a GRIN accession number.</span>
  <br/>
</div>

<div>
<form  method="post">
  <br/>
  Enter your GRIN Accession Number? &nbsp;&nbsp;&nbsp;
  <input type="text" name="grin_acc_no" required value="<?php print $_POST['grin_acc_no']; ?>" >
  <input type="submit" value="SUBMIT">
  <br>
  <span style="font-size:80%;">
  <strong>Example:</strong> PI 289619. Use either 'PI 289619' with space between PI and the number OR just the number, 289619 without the prefix PI".
  <br/>
  More examples:  PI 289620, 289621, 289622, etc.
  </span>
  <br/>
</form>
</div>

<!-- Message  -->
<div>
  <hr/>
  <fieldset  style="background: LightGray;">The following part displays a webpage directly from <b>GRIN.</b><br/>
  </fieldset>
</div>

<?php
$acc_no = $_POST['grin_acc_no'];
$grin_url = "http://www.ars-grin.gov/cgi-bin/npgs/acc/search.pl?accid=".$acc_no;
?>


<div>
  <iframe id="frameviewer" frameborder="4" width="1200" height="1000" scrolling="yes"  src="<?php  echo($grin_url); ?>"  name="frameviewer"  overflow-x: scroll;  >
</div>