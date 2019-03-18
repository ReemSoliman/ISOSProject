<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Day Of Dignity</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script>

$(document).ready(function() {
  var $slider = $('.carousel'); // class or id of carousel slider
  var $slide = 'article';//$('.slide'); // could also use 'img' if you're not using a ul
  var $transition_time = 1000; // 1 second
  var $time_between_slides = 4000; // 4 seconds

  function slides(){
    return $slider.find($slide);
  }

  slides().fadeOut();

  // set active classes
  slides().first().addClass('active');
  slides().first().fadeIn($transition_time);
  //slides().first().animate({right: '25px'})
  //alert(screen.width);

  // auto scroll
  $interval = setInterval(
    function(){
      var $i = $slider.find($slide + '.active').index();
      slides().eq($i).removeClass('active');
      slides().eq($i).fadeOut($transition_time);

      if (slides().length == $i + 1) $i = -1; // loop to start

      slides().eq($i + 1).fadeIn($transition_time);
      slides().eq($i + 1).addClass('active');
    }
    , $transition_time +  $time_between_slides
  );
});
</script>

<style>

.carousel {
  margin: 5% 0;
  width: 70%; /* Update to your slider width */
  height: 20em; /* tried to use percentages but didn't work */
  position: relative;
  overflow: hidden;
  border-radius: 25px;
  border: 2px solid #73AD21;
}
 @media only screen and (max-width: 600px){
    .carousel {
        width: 90%;
        height: 70%;
    }
 }
.slide {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 25px;
  padding: 1em;
}
@media only screen and (max-width: 500px){
    .slide {
        padding:0.1em;
        font-family: Times New Roman, Times, serif;
	font-size: .5em;
    }
 }
</style>

	</head>
<body>
<?php include 'PageHeader.php';?>

<div style="position:relative;">
<div style="margin-left:auto; margin-right:auto; width:70%;  height:100%;border:3px solid #73AD21; overflow:auto; position:relative; padding-left: 1em; padding-right: 1.5em;">
<h2 class="pageTitle">Day Of Dignity</h2>
   <p class="smaller">
   Day of Dignity is an annual ISOS event, financially sponsored by
Islamic Relief USA (IRUSA) and partnering with local agencies. 
This day gives opportunity for caring individuals from diverse communities to provide services to their neighbors in need.
Food, clothing, winter supplies, and hygiene kits are just some of the items distributed during Day of Dignity events.
Free medical care, screenings and barber services are provided.
  <br>

   </p>

 
<div class="carousel">
<article class="slide">
          <h3 class="subtitle">Day of Dignity 2018</h3>
          <p class="smaller"> This year’s day of Dignity fell on the 25th anniversary of
            Islamic Relief USA. The location was held downtown Portland in the Pearl District park. . </p>
            <a href="/dayOfDignity2018.php" > Read More...</a>
    </article>
     <article class="slide">
          <h3 class="subtitle">Day of Dignity 2017</h3>
          <p class="smaller"> This year’s day of Dignity fell on the 16th anniversary of
            the 9/11 tragedy. The location was held downtown Portland in the Pearl District park. . </p>
            <a href="/dignityday2017.php" > Read More...</a>
    </article>
    <article class="slide">
      <h3 class="subtitle">Day of Dignity Photo Gallery</h3>
      <div class="responsive">
  <div class="img">

     <img src="./gallery/g1/Fgallery1-2-small.jpg" alt="Day of Dignity" width="200" height="30%">
  </div>
</div>
<div class="responsive">
  <div class="img">
      <img src="./gallery/g1/Fgallery1-14-small.jpg" alt="Day of Dignity" width="200" height="30%">
  </div>
</div>

<div class="responsive">
  <div class="img">
      <img src="./gallery/g3/Fgallery3-77-small.jpg" alt="Day of Dignity" width="200" height="30%">
  </div>
</div>
<div class="responsive">
  <div class="img">
      <img src="./gallery/g3/Fgallery3-89-small.jpg" alt="Day of Dignity" width="200" height="30%">
  </div>
</div>  <br><br>  <br>
<div>
<a href="/dignitydayphotos.php" > More Pictures...</a>
</div>
    </article>
    


 </div>

</div>

</div>

<?php include 'footer.php';?>
</body>
</html>