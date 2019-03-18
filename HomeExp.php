 <!DOCTYPE html>
<html>
<head>
<meta name="keywords" content="ISOS, Islamic, Social, Organization, Oregon">
<meta name="author" content="Reem Soliman">
<title>ISOS Home Page</title>

<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
<link rel="stylesheet" type="text/css" href="IsosCSS.css">
<meta name="viewport" content="width=device-width, initial-scale=0.5">


<style>
.mySlides {display:none;}
</style>

</head>


<body >

<?php include 'PageHeader.php';?>


<div class="containerCarousel" style="margin-left:auto; margin-right:auto; width:70%;  height:100%;border:3px solid #73AD21; overflow:auto; position:relative; padding-left: 0.5em; padding-right: 1.5em; ">
 <h2 class="pageTitle">Mission and Vision</h2>
 <h3 class="subtitle">Our Mission </h3>
 <p class="smaller" style="float:left; font-family: Times New Roman, Times, serif; font-size: 1em;">
Islamic Social Services of Oregon State (ISOS) is a 501c3 social service charitable organization.
We strive to be a trusted organization practicing Islamic values when rendering services to people in need of assistance through trying times.  </p>
<div  class="homeCarousel" >

  <img class="mySlides" src="images\RamadanFoodDrive.jpg" style="width:400px; height:300px;">
  <img class="mySlides" src="images\homepage\home1.JPG" style="width:400px; height:300px;">
  <img class="mySlides" src="images\homepage\home2.JPG" style="width:400px; height:300px;">
  <img class="mySlides" src="images\homepage\home3.JPG" style="width:400px; height:300px;">
  <img class="mySlides" src="images\homepage\home4.JPG" style="width:400px; height:300px;">
   <h4 style="font-family:Times New Roman, Times, serif; color: white;">Serving The Community Through Islam </h4>
   <script>// <![CDATA[
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
// ]]></script>
</div>
 <p class="smaller" style="font-family: Times New Roman, Times, serif; font-size: 1em;">
<br>In doing so we hope to reflect and spread understanding of Islam, promote self reliance and add to the well being of the community we live in.
  </p>

<h3 class="subtitle">Our Vision </h3>
<p class="smaller" style="font-family: Times New Roman, Times, serif; font-size: 1em;">
ISOS collaborates with a network of non-profit organizations and community service groups to assist those facing periods of challenge in gaining self reliance through financial 
assistance and access to public assistance targeted to their needs and goals. <br>

Following are the primary areas of service rendered by ISOS:      <br>
 <ul style="list-style-type: none; ">
   <li><strong> Refugee Services: </strong>
Sponsors and assist refugees in acclimating themselves within a designated timeframe until they become self-sufficient. </li>
   <li><strong>Needy Assistance:  </strong>
Provides assistance when misfortunate occurs, such as inability to pay bills due to loss of income and family abandonment.   </li>
   <li><strong>Family Crisis: </strong>
Assists as arbitrators and facilitators when family separation, dispute and death occur.  </li>
    <li><strong>Alliance Support:   </strong>
Work with other service organizations, community centers and mosques to leverage and centralize resources and service.   </li>
</ul>
<br>
Prophet Muhammad (peace be upon him), the Messenger of Allah (Arabic for One God) was asked:
"Who is the dearest person to Allah?" He said: "Those who are most useful to (other) people." Thus in another tradition the Prophet 
(peace be upon him) said: "And Allah will surely help the person as long as he helps his brother."     <br> <br>

All board members of ISOS serve on volunteer basis.

May Allah/God Bless and Guide us in all our endeavors in serving His Cause.
 </p>

 
 </div>

<?php include 'footer.php';?>


</body>
</html>
