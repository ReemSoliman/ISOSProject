<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Resource Aid Form</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	
	</head>
<body>
<?php include 'PageHeader.php';?>

<div style="position:relative;">
<div style="margin-left:auto; margin-right:auto; width:70%;  height:100%;border:3px solid #73AD21; overflow:auto; position:relative; padding-left: 0.5em;">
<h2 class="pageTitle">Resource Aid Form Agreement</h2>

<h3 class="subtitle">IMPORTANT: <br>
ISOS does not cover for lost/stolen items. <br>
Please provide ISOS 7-10 days to process your request.<br>
 Please comply to the following before completing the Resource Aid Form.</h3>
<p >By completing the form, you agree to the following:</p>
<ol>
  <li> You are a resident of  Oregon State or Southwest Washington State.<br>
    <br>
  </li>
  <li>  You are being serviced by another social service agency before applying for aid with ISOS. You will be asked to provide details in the form under Active Community Partners/Sponsors Information section. 
        As a Sponsor, you must remain available for support while ISOS services the case, if accepted. <br>
        (Note: ISOS does not replace for lost or stolen funds without a receipt).
<br>
    <br>
  </li>
  <li>  You will be able to provide your last year's tax returns /or last 3 months of bank statements and pay statements (if applicable). <br>
  <br>
  </li>
  <li>  You can  provide details about your plans to be self-sufficient.<br>    <br>
  </li>
  <li>
      If you are applying for disability, you must have an authorized agency that can provide us with monthly disability status. <br>
  </li>
</ol>

 <div style="margin-left:auto; margin-right:auto; width:100%; margin-top:2em; margin-bottom:2em;">
       <div class="instButtonDiv" >
       <form method="post">
            <button type="submit"  formaction="/aidforminst.php" >Accept</button>
            <button type="submit"  formaction="/HomeNew.php" style="float:right;">Cancel</button>
       </form>
       </div>
</div>

</div>


</div>

<?php include 'footer.php';?>
</body>
</html>