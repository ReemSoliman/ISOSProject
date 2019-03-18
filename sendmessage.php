<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Message Delivary Confirmation</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">

</head>

<body>

<?php 

include 'PageHeader.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["callingurl"] != null && $_POST["callingurl"] == "contactus")
	{

		$name= $_POST["sender"];
		$from = $_POST["email"];
		$to = "info@i-sos.org";
		$subject = $_POST["subject"];
		//echo $_POST["mailinglist"];
		if ($_POST["mailinglist"]!=null)
		 $subject .= ' Add me to the email list';
		$message = 'A message from ' . $name. ',  '. $_POST["message"];
		$headers = "From: " . $from;


		$sent= mail($to,$subject,$message,$headers);

		if($sent)
			echo '<div style="font-family: Times New Roman, Times, serif; color:#73AD21; font-size:3em; height:4em;"> Thanks for contacting us, will get back to you shortly!</div>';
		else
			echo '<div class="errorMessage" style="font-size:3em; height:4em;"> Sorry something went wrong, try contact us again later.</div>';
	}
	elseif  ($_POST["callingurl"] != null && $_POST["callingurl"] == "volunteer")
	{
                $subject = 'Volunteer Sign Up';
                $fname   = $_POST["fname"];
                $lname   = $_POST["lname"];
                $email   = $_POST["email"];
                $address = $_POST["address"];
                $state   = $_POST["state"];
                $city    = $_POST["city"];
                $zipcode = $_POST["zcode"];
                $phone = $_POST["phone"];
                $interst = '';
                if($_POST["case"]!= null)
                     $interst .= 'Case Worker';
                if($_POST["projco"]!= null)
                     $interst .= '  Project Coordinator';
                if($_POST["webdev"]!= null)
                     $interst .= '  Web Developmnt';
                if($_POST["other"]!= null)
                     $interst .= '  ' . $_POST["other-role"];
                $days    = $_POST["days"];
                $from_time = $_POST["from-time"];
                $to_time   = $_POST["to-time"];
                $from_am_pm = $_POST["from-am-pm"];
                $to_am_pm   = $_POST["to-am-pm"];
                $experience = $_POST["exp"];
                $to = "info@i-sos.org";
                $headers = "From: " . $email;


               $message = "Volunteer Sign Up From: {$fname}  {$lname} \n
                           Address: {$address}, {$city}, {$state} ,  {$zipcode} \n
                           Phone Number:  {$phone} \n
                           Email: {$email} \n
                           Availability: {$days} from {$from_time} {$from_am_pm} to {$to_time} {$to_am_pm} \n
                           Interest : {$interst} \n
                           Volunteer Experience:  {$experience}";
               
               $message = wordwrap($message,70,"\n");
               //echo($message);
               
               $sent= mail($to,$subject,$message,$headers);
               if($sent)
			     echo '<div style="font-family: Times New Roman, Times, serif; color:#73AD21; font-size:2.5em; height:4em;"> Thanks for your interest in volunteering with us, we will contact to you shortly!</div>';
		      else
			     echo '<div class="errorMessage" style="font-size:3em; height:4em;"> Sorry something went wrong, try contact us again later.</div>';
        }
	else
			echo 'Sorry!';

}
else
{
	echo '<div class="errorMessage" style="font-size:3em; height:4em;"> You can not call this page directly from the address bar. </div>';
}


 include 'footer.php';

?>

</body>
</html>