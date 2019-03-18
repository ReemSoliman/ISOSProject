<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Day Of Dignity Photo Gallery</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">

        <script language="JavaScript" src="pop-closeup3.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	</head>
<body>
<?php include 'PageHeader.php';?>

<div style="position:relative;">
<div style="margin-left:auto; margin-right:auto; width:70%;  height:40em;border:3px solid #73AD21; overflow:auto; position:relative; padding-left: 1em; padding-right: 1.5em;">
<h2 class="pageTitle">Day Of Dignity Photo Gallery</h2>

<div class="w3-container" style="margin-top:auto; margin-bottom:auto;">

</div>

<div class="w3-content w3-section" style="max-width:30em; max-height:30em; margin-top:auto; margin-bottom:auto; overflow:hidden;">
  <img class="mySlides w3-animate-top" src="./gallery/g1/Fgallery1-2.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="./gallery/g1/Fgallery1-3.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="./gallery/g1/Fgallery1-4.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="./gallery/g1/Fgallery1-5.jpg" style="width:100%">
  
  <img class="mySlides w3-animate-top" src="./gallery/g1/Fgallery1-6.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="./gallery/g1/Fgallery1-7.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="./gallery/g1/Fgallery1-8.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="./gallery/g1/Fgallery1-9.jpg" style="width:100%">
  
  <img class="mySlides w3-animate-top"  src="./gallery/g3/Fgallery3-2.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="./gallery/g3/Fgallery3-3.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="./gallery/g3/Fgallery3-4.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="./gallery/g3/Fgallery3-5.jpg" style="width:100%">


  <img class="mySlides w3-animate-top"  src="./gallery/g3/Fgallery3-6.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="./gallery/g3/Fgallery3-7.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="./gallery/g3/Fgallery3-8.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="./gallery/g3/Fgallery3-9.jpg" style="width:100%">
  
  <img class="mySlides w3-animate-top"  src="./gallery/g5/Fgallery5-2.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="./gallery/g5/Fgallery5-3.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="./gallery/g5/Fgallery5-4.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="./gallery/g5/Fgallery5-5.jpg" style="width:100%">
  
  <img class="mySlides w3-animate-top"  src="./gallery/g5/Fgallery5-6.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="./gallery/g5/Fgallery5-7.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="./gallery/g5/Fgallery5-8.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="./gallery/g5/Fgallery5-9.jpg" style="width:100%">


</div>

<script>
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
    setTimeout(carousel, 2500);    
}
</script>




</div>

</div>

<?php include 'footer.php';?>
</body>
</html>


