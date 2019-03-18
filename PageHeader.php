<?php

include('constants.php');

echo '
<div style="position: relative; height: 5%;  clear:both; width:100%; min-width:200px; max-width:2000px;">

<img src="images\headerImageXL.jpg" >

</div>

<div style="height: 10%;">

<div>
    <a href="http://i-sos.org/index.php">
    <img class="logo" src="images\logo.jpg" >
    </a>

    <h1 class="orgTitle">Islamic Social Services Of Oregon State (ISOS)</h1>
</div>
<div>    
    <p class="smaller" style="float:left; padding-left:0.1em">Working together to help those in need to be self-reliant</p>
    
    <a href="https://www.pinterest.com/isos0691/" target="_blank">
    <img src="images\logo_pinterest.png"  alt="Pinterest Profile" style="float:right; margin-right:2em; margin-bottom: 1em;">
    </a> 
    <a href="https://www.facebook.com/IslamicSocialServicesOregonState/" target="_blank">
    <img src="images\logo_facebook.png"  alt="Find Us On Facebook" style="float:right; margin-right:0.45em; margin-bottom: 0.5em;">
    </a>
    <a href="https://twitter.com/ISOS_OREGON/" target="_blank">
      <img src="images\logo_twitter.png"  alt="twitter" style="float:right; margin-right:0.45em; margin-bottom: 0.5em;">
    </a>
</div>
</div>

<div style="clear: both;">

<ul Class="Nav" id="menu" >
<li class="non-dropdown"> <a href="http://i-sos.org/index.php">Home</a></li>

<li class="dropdownISOS">
<a href="#" class="dropbtn">Who Are We</a>
	<div class="dropdown-content">
      <a href="/board.php">Our Board</a>
      <a href="/byLaws.php">Our By-Laws</a>
      <a href="/newsletter.php">Our Newsletters</a>
     </div>
</li>

<li class="dropdownISOS">
<a href="#" class="dropbtn">What We Do</a>
	<div class="dropdown-content">
      <a href="/needyassistance.php">Needy Assistance</a>
      <a href="/fooddrive.php">Food Drive</a>
      <a href="/dignityday.php">Day Of Dignity</a>
      <a href="/muslimid.php">Muslim ID Card</a>
      <a href="/healthcare.php">Health Care</a>
     </div>
</li>

<li class="dropdownISOS">

<a href="#" class="dropbtn">Directory</a>
 <div class="dropdown-content">

      <a href="/islamicservices.php" >Islamic Services</a>

      <a href="/salahschedule.php">Salat Schedule </a>
        <a href="/eventcalendar.php">Upcoming Events </a>

</div>
</li>
  <li class="dropdownISOS">
    <a href="#" class="dropbtn">How To Help</a>
    <div class="dropdown-content">
      <a href="/donate.php">Donate</a>
      <a href="/donate-stocks.php">Stock Donations</a>
      <a  href="/volunteersignup.php">Volunteer Sign Up</a>
      <a  href="/donategoods.php">Donate Your Furniture</a>
      <a  href="/otherwaystogive.php">Other Ways To Give </a>
      <!--<a href="#">Shop Here</a>     -->
     </div>
   </li>

   <li class="non-dropdown">
    <a  href="/inst.php">Resource Aid Form</a>
   </li>

   <li class="non-dropdown">
   <a   href="http://i-sos.org/contactus.php"  > Contact Us</a>
   </li>
   <li class="donatelink">
    <a  href="http://i-sos.org/donate.php"> Donate Now!</a>
   </li>
</ul>


</div> 

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117357420-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag(\'js\', new Date());

gtag(\'config\', \'UA-117357420-1\');
</script>

';

?>