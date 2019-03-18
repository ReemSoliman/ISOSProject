<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Contact US</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	
	<script>
	function validateForm()
	{
	   if(document.getElementById("name").value=="")
	   {
	   		document.getElementById("errors").innerHTML = "Please enter your name.";
	   		return false;
	   	}
	   if(document.getElementById("email").value=="")
	   {
	   		document.getElementById("errors").innerHTML = "Please enter your email."
	   		return false;
	   	}
	   	if(document.getElementById("message").value=="")
	   {
	   		document.getElementById("errors").innerHTML = "Please enter your message."
	   		return false;
	   	}
	   	return true;
	}
	</script>

</head>
<body>
<?php include 'PageHeader.php';?>

<div style="position:relative;">

<div style="margin-left:auto; margin-right:auto;width:70%;height:100%;border:3px solid #73AD21;overflow:auto;position:relative;padding-left: 0.5em;" >
<h2 class="pageTitle">Contact Us</h2>

<div style="width:100%;  position:relative;">
<div style="width:45%; height:100%; float:left; padding-left:1em; position:relative;">
<p>
We love to hear from you!
</p>

<form  id="messageform" action="http://i-sos.org/sendmessage.php" method="post" onsubmit= "return validateForm()">
<div class="errorMessage" id="errors"> </div>
<input type="hidden" name="callingurl" value="contactus">
<label for="name">Name: * </label><input type="text" name="sender" id="name" style="width:50%"> <br> <br>
<label for="email">Email: * </label><input type="email" name="email" id="email" style="width:50%"> <br> <br>
<label for="subject">Message type: * </label><select name="subject" id="subject">
				<option>Question</option>
				<option>Comment</option>
				<option>Suggestion</option>
			  </select> <br><br>
<label for="message">Message: * </label><br><textarea name="message" id="message"  placeholder="Write your message here..." style="width:70%"></textarea> <br> <br>
<input type="checkbox" id="mailinglist" name="mailinglist"><label for="mailinglist">Subscribe to the ISOS email list.</label> <br><br>
<input type="submit" name="submit" value="Send" > <br> <br>
<input type="hidden" name="callingurl" value="contactus">

</form>
</div>
<div style="width:45% ;float:right; padding-right:1em; height: 100%; position:relative;  ">
     <p class="smaller">
	<strong>Address:</strong>  Colonial Office Campus <br>
		<?= address ?>  <br>
	<strong>P.O. Box:</strong> <?= PO ?><br>
	<strong>Phone Number:</strong><a href="tel://<?= phone ?>"><?= phone ?></a> <br>
	<strong>email:  </strong><a href="mailto:<?= email ?>" target="top"><?= email?></a><br>
     </p>
	<iframe style="height:60%;width:60%;border:0;"

                src="https://www.google.com/maps/embed/v1/search?q=:10175+SW+Barbur+Boulevard,+Suite+100BA,+Portland,+OR,+97219&key=AIzaSyA3lVYJHiP3nDntjsu4y9j-S0Z0Rws8Ruo">
	</iframe>
</div>

</div>
</div>
</div>

<?php include 'footer.php';?>
</body>
</html>