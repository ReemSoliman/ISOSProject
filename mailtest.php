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



/*error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");*/

$to      = 'reem.soliman77@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: reem.soliman@i-sos.org' . "\r\n" .
    'Reply-To: reem.soliman@i-sos.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$sent = mail($to, $subject, $message, $headers);
if($sent){
    echo "<br>DONE ...<br>";
} else {
    echo "<br>FALSE ....<br>";
}
/*		$name= 'Lolo';
		$from = 'reem_soliman167@hotmail.com';
		$to = 'reem.sliman77@gmail.com';
		$subject = '7yati';
		//echo $_POST["mailinglist"];
		
		$message = "A message from " . $name;
		
		$headers  = "MIME-Version: 1.0" . '\r\n';
		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$headers .= "From: ". $from. "\r\n";
		$headers .= "Reply-To: ". $from. "\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion();
		$headers .= "X-Priority: 1" . "\r\n"; 
		
		echo($headers);
		echo($message);
		$sent= mail($to,$subject,$message,$headers);
		echo("status ".$sent);
		if($sent)
			echo '<div style="font-family: Times New Roman, Times, serif; color:#73AD21; font-size:3em; height:4em;"> Thanks for contacting us, will get back to you shortly!</div>';
		else
			echo '<div class="errorMessage" style="font-size:3em; height:4em;"> Sorry something went wrong, try contact us again later.</div>';*/

	


 include 'footer.php';

?>

</body>
</html>