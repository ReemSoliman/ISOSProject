 <!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Newsletters</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script type='text/javascript' src=“//wurfl.io/wurfl.js"></script>

	<script>

	function checkBrowser()
	{
           var isMobile = (/Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Windows Phone/i.test(navigator.userAgent)) ? true : false;
	   //alert(isMobile);
	   //alert(screen.width);
	  // alert(navigator.appName + "shanta" +navigator.userAgent);
	   if(isMobile)
           {
             document.getElementById("mode").value = "m";
             //alert(document.getElementById("pdfDoc").style.display);
             document.getElementById("pdfDoc").style.display = "none";
             //alert(document.getElementById("pdfDoc").style.display);
             document.getElementById("pdfDocframe").style.display = "initial";
             //alert(document.getElementById("pdfDocframe").style.display);
             document.getElementById("pdfDocframe").src="https://drive.google.com/viewerng/viewer?embedded=true&url=i-sos.org%2FDocuments%2FNewsletter%2FISOS-2017-Final-Edition-8.pdf";
           }
        }
	function loadpdf (newPdf){

          //alert(newPdf);
          if(document.getElementById("mode").value == "w"){
              var obj = document.getElementById("pdfDoc");
              obj.setAttribute('data', newPdf);
              var cl = obj.cloneNode(true);
              var parent = obj.parentNode;
              parent.removeChild(obj);
              parent.appendChild(cl);
          }
          else{
            var url =  "https://drive.google.com/viewerng/viewer?embedded=true&url=i-sos.org" +  newPdf;
            //alert(url);
            document.getElementById("pdfDocframe").src = url;
          }
          //alert('done');
        }
	</script>

</head>
<body onload= "checkBrowser()">
<?php include 'PageHeader.php';?>

<div style="position:relative;">
<div style="margin-left:auto; margin-right:auto; width:70%; height:100%; border:3px solid #73AD21; overflow:auto; position:relative; padding-left:0.5em;">
    <h2 class="pageTitle">Newsletters</h2>
    <p class="smaller" style="padding-left:25%; margin-left:0; float:left;"> Welcome to ISOS Newsletters. The newsletters provides you with our financial status,
    projects and events within our community. <br>
As always, ISOS welcomes your suggestions, ideas, and contributions. Please feel free to contact us.
</p>

    <div class="newslettercontainer" style="width:70%;  position:relative; float:right;  overflow:auto; margin-right: 5%; overflow:hidden;">
          <input id="mode" type="hidden" value="w">
          <object width="100%" height="800" id="pdfDoc" style="border:3px solid #73AD21; float:left; overflow:hidden; min-height: 101%; min-width: 100%;"
          data="/Documents/Newsletter/ISOS-2018-Annual-Edition-9.pdf">

         </object>

         <iframe  id="pdfDocframe" height="500" style="width:100%; border:3px solid #73AD21; display:none;">
         </iframe>
    </div>
    <div class= "sidebar" style="width:20%;   float:left;  overflow:auto;">
    <ul style="list-style-type: none; padding-left:0;">
    <li style="margin-left: auto; margin-right:auto; text-align: center; padding-bottom:5%"><strong>Newsletters Archive</strong></li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS%20Newsletter%20Q1-2012.pdf" onclick="loadpdf(this.name)"> 2012 Newsletter</a></li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS%20Quarterly-Q1-2013.pdf" onclick="loadpdf(this.name)" > 2013 - Edition 1</a> </li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS-2013-Edition-2.pdf" onclick="loadpdf(this.name)" > 2013 - Edition 2</a> </li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS-2013-Edition-3.pdf" onclick="loadpdf(this.name)" > 2013 - Edition 3</a> </li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS-2014-Edition-4.pdf" onclick="loadpdf(this.name)"> 2014 - Edition 4</a> </li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS-2014-Edition-5.pdf" onclick="loadpdf(this.name)"> 2014 - Edition 5</a> </li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS-2015-Edition-6.pdf" onclick="loadpdf(this.name)"> 2015 - Edition 6</a> </li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS-2016-Edition-7.pdf" onclick="loadpdf(this.name)"> 2016 - Edition 7</a> </li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS-2017-Final-Edition-8.pdf" onclick="loadpdf(this.name)"> 2017 - Edition 8</a> </li>
    <li style="padding-left:10%"><a class="sidebarlink" name="/Documents/Newsletter/ISOS-2018-Annual-Edition-9.pdf" onclick="loadpdf(this.name)"> 2018 - Edition 9</a> </li>
    </ul>
    </div>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>