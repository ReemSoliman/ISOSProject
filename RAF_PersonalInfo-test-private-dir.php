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

<div style="position:relative; z-index:-1;">
<div style="display:table; margin-left:auto; margin-right:auto;width:70%;height:100%;border:3px solid #73AD21;overflow:auto;position:relative;padding-left: 0.5em;">
 <h2 class="pageTitle">Personal Information</h2>

<form  class="form-horizontal"  id="clientInfoform" action="http://i-sos.org/sendmessage.php" method="post" onsubmit= "return validateForm()">
<div class="errorMessage" id="errors"> </div>

<input type="hidden" name="callingurl" value="volunteer">
 <h4 class="formTitle"> Contact Information:  </h4>

 <table>
 <tr>
 <td>
<label for="fname"  >First Name: * </label>
 </td>
      <td>
<input  type="text"  name="fname" id="fname" size="20" maxlength="25" autofocus  required>
        </td>
 </tr>
<tr>
 <td>
<label for="lname" >Last Name : * </label>
</td>
<td>
<input   type="text"  name="lname" id="lname" size="20" maxlength="25" required>
</td>
</tr>

<tr>
<td>
<label for="nickname" >Other Name Used: * </label>
</td>
<td>
<input   type="text"  name="nickname" id="nickname" size="20" maxlength="25" >
 </td>
</tr>



 <tr>
 <td>
<label for="address">Street Address: * </label>
</td>
<td>
<input type="text"  name="address" id="address" size="50" maxlength="60" required>
</td>
</tr>
<tr>
<td>
<label for="city">City: * </label>
</td>
 <td>
<input type="text"  name="city" id="city" size="20" maxlength="25" required >



<label for="state">State Code: * </label>


       <input type="text"  name="state" id="state" size="3" maxlength="2"  pattern="^(?:(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY]))$" required >

<label for="zcode">&nbsp;Zip Code: * </label>
       <input type="text"  name="zcode" id="zcode" size="6" maxlength="5" pattern="^\d{5}$" required >
</td>
</tr>
<tr>
<td>
<label for="phone">Home Phone (xxx)xxx-xxxx: * </label>
</td>
<td>
       <input type="text"  name="hphone" id="hphone" size="15" maxlength="13"  pattern="^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$"  >

       </td>
       </tr>
 <tr>
 <td>
<label for="phone">Cell Phone (xxx)xxx-xxxx: * </label>
</td>
<td>
       <input type="text"  name="cphone" id="cphone" size="15" maxlength="13"  pattern="^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$"  >
       </td>
       </tr>
       
<tr>
<td>
 <label for="bday">Date Of Birth * </label>
 </td>
  <td>
 <input type="date" id= "bday" name="bday"  >
 </td>
 </tr>
 <tr>
<td>
 <label for="gender">Gender * </label>
 </td>
  <td>

 <input type="radio" name="gender" value="male" checked> Male
 <input type="radio" name="gender" value="female" >Female
 </td>
 </tr>
 
  <tr>
  <td>
<label for="email">Email: * </label>
</td>
<td><input type="email"  name="email" id="email" size="30" maxlength="35"  > </td>
</tr>

<tr>
  <td>
<label for="IdNumber">Driver's License # or ID #: * </label>
</td>
<td><input type="email"  name="IdNumber" id="IdNumber" size="9" maxlength="9"  pattern="^\([0-9]"> </td>
<td>
<label for="IssuingState">Issuing State: * </label>
</td>
<td>
</td>
</tr>

<tr>
<td>
 
<label for="lanSpoken">Languages Spoken: * </label>
</td>
<td>
   <select name="lanSpoken" multiple>
	<option id="12">Arabic</option>
	<option id="12">English</option>
	<option id="12">Farsi</option>
	<option id="12">French</option>
	<option id="12">Spanish</option>
	<option id="12">Urdu</option>
	<option id="12">Other</option>
	</select>
</td>
</tr>
 </table>
</form>



</div>
</div>
<?php include 'footer.php';?>
</body>
</html>