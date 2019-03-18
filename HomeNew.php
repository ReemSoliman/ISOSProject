<!DOCTYPE html>
<html>
<head>
<meta name="keywords" content="ISOS, Islamic, Social, Organization, Oregon">
<meta name="author" content="Reem Soliman">
<title>ISOS Home Page</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
<meta name="viewport" content="width=device-width, initial-scale=0.5">


<style>
.mySlides {display:none;}
</style>

</head>


<body >

<?php include 'PageHeader.php';?>

<div  class="w3-content w3-section" style="max-width:800px;">
<h3 style="font-family:Times New Roman, Times, serif; color:#73AD21;">Serving The Community Through Islam </h3>
  <img class="mySlides" src="images\RamadanFoodDrive.jpg" style="width:800px; max-height:400px;">
  <img class="mySlides" src="images\Fgallery5-12.jpg" style="width:800px; max-height:400px;">
  <img class="mySlides" src="images\MuslimIdCard.JPG" style="width:800px; max-height:400px;">
</div>

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


<?php include 'footer.php';?>


</body>
</html>
