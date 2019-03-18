<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<title>ISOS-Donate</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">


	<script>

	function verify()
	{

		if (document.getElementById("on0").selectedIndex == "0")
		{

			document.getElementById("errors").innerHTML = "Please choose your type of donation.";
			return false;
		}
		document.getElementById("item_name").value =  document.getElementById("on0").value;


	}
    function dodo(radioValue)
    {

                if(radioValue == "once")
		{

			document.getElementById("hosted_button_id").value = "URW6SMPAT4MRG";
			document.getElementById("os0").disabled= true;
			//document.getElementById("cmd").value= "_donations";
			document.getElementById("donateOnceSubmit").disabled = false;
			document.getElementById("donateMonthlySubmit").disabled = true;

		}
		else
		{
		 	document.getElementById("hosted_button_id").value= "6P4RXXRSBJ6JG";
		 	//document.getElementById("cmd").value= "_xclick-auto-billing";
                        document.getElementById("os0").disabled= false;
		 	document.getElementById("donateOnceSubmit").disabled = true;
		 	document.getElementById("donateMonthlySubmit").disabled = false;
		}
    }
	</script>


</head>

<body >


<?php include 'PageHeader.php';?>

<div style="width:100%">

<div style="margin-left:auto; margin-right:auto; width:60%; height:90%; border:3px solid #73AD21; padding:3em; overflow-x: hidden;">

 <h2 class="pageTitle">Donations</h2>

<p class="smaller">
 ISOS is registered with the State of Oregon and IRS as a 501c3 nonprofit organization.
 There are three ways to make a donation, you can choose between to <a href="#donateOnline">donate online </a>, <a href="#mailACheck">mail a check to ISOS.</a> Or to <a href="#stockDonations">donate stocks</a>
 </p>
 <a name="donateOnline" style=" font-size: 1.3em; ">Donate Online</a>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="return verify()">

	<div id="errors" class="errorMessage"></div>

	<br><label for="on0" style="font-size: 1.0em;">Type Of Donation</label>
	<select name="on0" id="on0">
		<option value="donation" selected> Choose the type of donation</option>
		<option>Zakat</option>
		<option>Sadaqa</option>
		<option>General Donation</option>
		<option>Ramadan Food Drive</option>
	</select>
	<br> <br>

	<input type="radio" name="donationType" id="onetime" onclick="dodo(this.value);" value="once" checked/>
        <label for="onetime" style="font-size: 1.0em;">One Time Donation</label> <br/>



	<input name="submit" id="donateOnceSubmit"  alt="PayPal - The safer, easier way to pay online!"
        type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" />
    <img alt="" border="0" width="1" height="1"  src="/spaw/getimg.php?img=https://www.paypal.com/en_US/i/scr/pixel.gif" /> <br><br>


	<input type="radio" name="donationType" id="monthly" onclick="dodo(this.value);" value="monthly"/>
        <label for="monthly" style="font-size: 1.0em;">Monthly Donation</label> <br/>

	<select id="os0" name="os0" disabled>
   			<option value="Option 1"> $20.00USD - monthly</option>
   			<option value="Option 2"> $50.00USD - monthly</option>
   			<option value="Option 3"> $100.00USD - monthly</option>
   			<option value="Option 4"> $150.00USD - monthly</option>
                        <option value="Option 5"> $200.00USD - monthly</option>
   	  </select>

             <!--  <input list="os0">

             <datalist id="os0" name="os0" disabled>
                <option value="Option 1"> $20.00USD - monthly</option>
   			<option value="Option 2"> $50.00USD - monthly</option>
   			<option value="Option 3"> $100.00USD - monthly</option>
   			<option value="Option 4"> $300.00USD - monthly</option>
	       </datalist>  -->
             <br>

   	<input name="submit" id="donateMonthlySubmit" alt="PayPal - The safer, easier way to pay online!" type="image"
   		src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_subscribeCC_LG.gif" disabled/>
   		<!--"https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_subscribeCC_LG.gif"       -->
   	<img alt="" border="0" width="1" height="1"
   	src="/spaw/getimg.php?img=https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" />

	<input name="currency_code" type="hidden" value="USD" />
	<input name="cmd" id="cmd" type="hidden" value="_s-xclick" />
	<!-- when not commemted it chanes the paypal form to donate form -- >
        <!-- <input type="hidden" name="business" value="info@i-sos.org"> -->  
	<input id="hosted_button_id" name="hosted_button_id" type="hidden" value="URW6SMPAT4MRG" />
            <input type="hidden" id="item_name" name="item_name" >

	<input type="hidden" id="refreshed" value="no">

<script type="text/javascript">
	onload=function(){

	var e=document.getElementById("refreshed");
	if(e.value=="no")e.value="yes";
	else{e.value="no";location.reload();}
	}
</script>

</form>

<a name="mailACheck" style=" font-size: 1.3em; "><br><br>Donate Via Mail</a>
  <p class="smaller">
  
  Please make your check out to: ISOS (Islamic Social Services of Oregon State)<br>
  and note on the memo of your check how the funds are to be used: Zakat/ General Donation/ Ramadan Food Drive.
<br>
  Please mail your check to either of the following addresses: <br>
  <?= $cst(address) ?>. <br>
                             <b>OR To</b> <br>
                             
                             P.O. Box: <?= $cst(PO) ?>. <br><br>

  A tax receipt will be sent to you promptly. If you have any questions, please feel free to contact us.
  </p>

<a name="stockDonations" style=" font-size: 1.3em; "><br><br>Stock Donations</a>
  <p class="smaller">
  
  For Stock Donations guidelines, please visit <a href="/donate-stocks.php">Stock Donations</a>.
  </p>

</div>
</div>

<?php include 'footer.php';?>


</body>
</html>