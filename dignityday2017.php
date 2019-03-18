 <!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Day Of Dignity 2017</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
    
    
        <script src="pop-closeup3.js"></script>
        <script type="text/javascript">
        
</head>

   <body onload = "intializeArrowButtons()">
  <script>
     var left;
     var right;
     var imgs = ["http://i-sos.org/images/DOD-2017/profile/profile.jpg", "http://i-sos.org/images/DOD-2017/profile/education.jpg"
      , "http://i-sos.org/images/DOD-2017/profile/length-homeless.jpg", "http://i-sos.org/images/DOD-2017/profile/reason_homeless.jpg"
      , "http://i-sos.org/images/DOD-2017/profile/reason_homeless2.jpg", "http://i-sos.org/images/DOD-2017/profile/wheresleep.jpg"
      , "http://i-sos.org/images/DOD-2017/profile/requestedservice.jpg", "http://i-sos.org/images/DOD-2017/profile/medicalcoverage.jpg"];

      function intializeArrowButtons()
      {
         //alert('dd');
         left = document.getElementById("leftarrow");
         right = document.getElementById("rightarrow");
         //left.setAttribute('disabled', 'true');
         left.style.visibility = "hidden";
         //right.setAttribute('disabled','false');
         right.style.visibility = "visible";
      }
      

    function changeImage(dir) {

       var img = document.getElementById("profileImage");

       //if(dir == -1 && left.getAttribute('disabled')=== 'true')  return;
       //else if (dir == 1 && right.getAttribute('disabled')=== 'true')  return;
       var indx = imgs.indexOf(img.src) ;
       newIndx = indx + dir;

       if(newIndx == 0)
       {
           //left.setAttribute('disabled', 'true');
           left.style.visibility = "hidden";
       }
       else
       {
           //left.setAttribute('disabled', 'false');
           left.style.visibility = "visible";
       }

       if(newIndx == imgs.length -1)
       {
           //right.setAttribute('disabled', 'true');
           right.style.visibility = "hidden";
       }
       else
       {
           //right.setAttribute('disabled', 'false');
           right.style.visibility = "visible";
       }

       img.src = imgs[newIndx];
       document.getElementById("imgIndx").innerHTML =   newIndx+1+"/8";
    }



  </script>
<?php include 'PageHeader.php';?>

<div style="position:relative;">
<div style="margin-left:auto; margin-right:auto; width:70%; -+:100%; border:3px solid #73AD21; overflow:auto; position:relative; padding-left:0.5em;">
    <h2 class="pageTitle">Day Of Dignity 2017</h2>

    <p class="smaller" style="width:80%; float: left;"> Day of Dignity 2017 was held in the North Park Block B (Park Of the Elephant) on September 10th. 
    This year we had these organizations as partners: <br></p>
    <br> <br> <br>

    <img src="/images/dayOfDignityLogo.jpg" alt="Day of Dignity 2016 flyer" style="float:right; width:20%;height:20%; margin-right:0.3em;">


<ul>
<li>Oregon Islamic Chaplain Organization (OICO)</li>
<li> Immaculate Heart of Mary Catholic Church</li>
<li> UNITE people - Japanese American Citizen League </li>
<li> Shafa Clinic </li>
<li> William Temple House</li>
<li>Village Coalition   </li>
<li> Outside In Agency</li>
<li> Jewish Family and Child Services (JFCS)  </li>
<li> Relay Resources</li>
<li> Multnomah Health Dept  </li>
<li> Oregon Food Bank </li>
<li> Street Roots </li>
<li> Potluck In the Park </li>
<li> Living Hope International </li>
<li> Sesame Donuts </li>
</ul>
<br><br>
Our partnership was our way in showcasing true American spirit
in working together for a better America, united for the greater cause of humanity. We had about 540 homeless served with food;
thermal socks; hoodies; back packs; sweat pants;
First aid kits; school kits; and hygiene kits. In addition, resource information; health counselors and barbers for
haircuts were made available.</p>
 <div style="margin-left:auto; margin-right:auto; position:relative; clear: both; text-align: center;"">
<iframe src="https://player.vimeo.com/video/237015665" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

 </div>

 <p class="smaller">
 Our local youth from 12-18 years of age provided their time and services with manning booths, collecting information on the homeless conditions
and distributing the supplies. For our youth, this is an excellent way to gain awareness and respect for the human condition. <br>
  We want to groom our youth to take more leadership roles with community well-being
activities and to pass the baton over to the next generation.

</p>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="javascript:popUp('./images/DOD-2017/DSC_0695.JPG')">
      <img src="./images/DOD-2017/DSC_0695.JPG" alt="bbq" width="300" height="200">
    </a>
    <div class="desc">Hair Cut Service</div>
  </div>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="javascript:popUp('./images/DOD-2017/villageColation.jpg')">
      <img src="./images/DOD-2017/villageColation.jpg" alt="Youth In Service" width="300" height="200">
    </a>
    <div class="desc">Village Coalition Booth</div>
  </div>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="javascript:popUp('./images/DOD-2017/InsideOut.jpg')">
      <img src="./images/DOD-2017/InsideOut.jpg" alt="Our Partner Multnomah Health" width="300" height="200">
    </a>
    <div class="desc">Outside In Booth</div>
  </div>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="javascript:popUp('./images/DOD-2017/JFCS.jpg')">
      <img src="./images/DOD-2017/JFCS.jpg" alt="Our Partner JFCS Booth" width="300" height="200">
    </a>
    <div class="desc"> JFCS Booth</div>
  </div>
</div>

<div class="DOD17Container" style="margin-left:auto; margin-right:auto; width:100%; position:relative;">
<div style="min-height:0.25em; "><br><p style="visibility: hidden;">9999<p></div>
<div >
<br>
<h3 class="subtitle" align="left" >Homeless Profiles</h3>
</div>
    <div id="DOD17slideshow" style="margin-left:auto; margin-right:auto; width:100%; position:relative;">
        <div style="margin-left:auto; margin-right:auto; width:50%;  position:relative; text-align:center;">
         <img alt="slideshow" style="width:70%;" src="http://i-sos.org/images/DOD-2017/profile/profile.jpg" id="profileImage" />
        </div>
        <div style="margin-left:auto; margin-right:auto; width:100%;  position:relative; text-align:center;">
        <div style="margin-left:auto; margin-right:auto; width:50%; text-align:center; ">
        <img alt="slideshow" style="width:5%;" src="./images/DOD-2017/profile/leftarrow.jpg" id="leftarrow" onclick="changeImage(-1);" />
        <span id="imgIndx"> 1/8</span>
        <img alt="slideshow" style="width:5%;" src="./images/DOD-2017/profile/rightarrow.jpg" id="rightarrow" onclick="changeImage(1);" />
        </div>
        </div>
    </div>
</div>

</div>
</div>


<?php include 'footer.php';?>
</body>
</html>