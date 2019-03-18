<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>Islamic Centers</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">

</head>

<body>

<div style="width:100%;position: relative; " >
<?php include 'PageHeader.php'; ?>
<div style="width:100%; margin: 0 auto; position: relative;" >
<div style="position: relative; width:80%;  height:100%; margin-right:auto; margin-left:auto; border:3px solid #73AD21; overflow:auto; padding-left: 0.5em;">
<h2 class="pageTitle">Islamic Services</h2>

    <div style=" position: relative; height:10%; min-height:10%; margin-right:auto; margin-left:auto; overflow:visible;">
           <p style="margin-left:1em;" >
                 The Islamic Services in Portland Metro Area.<br>
                 <strong>Show</strong>
                  <input type="checkbox" id="centers" onclick="initMap();" checked>  Islamic Centers
                  <input type="checkbox" id="schools" onclick="initMap();">    Islamic Schools
                  <input type="checkbox" id="cemeteries" onclick="initMap();">    Islamic Cemeteries  
           </p>


    </div>

    <div id="map" style=" position: relative; height: 65%; width:90%; margin-right:auto; margin-left:auto; margin-top:3%; border:1px solid #73AD21;">



<script>


function initMap() {

        var map;
        if(!document.getElementById("cemeteries").checked)
        {
            var portland = { lat: 45.5230622, lng: -122.6764816 };
            map= new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: portland
            });
        }
        else
        {   var woodburn = {lat: 45.143731, lng: -122.8553725};
            map= new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            center: woodburn
            });
        }

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        displayMarkers(this,map);
        }
        };
        xhttp.open("GET", "locations.xml", false);
        xhttp.send();
}

function displayMarkers(xml, map) {

  var i;
  var locationCategory;
  var locationName;
  var locationLat;
  var locationLng;
  var locationURL;
  var locationInfo;
  var xmlDoc = xml.responseXML;


          var image ={
          url: 'http://i-sos.org/images/Islam-Crescent-icon.png',
          size: new google.maps.Size(20, 20),
          labelOrigin: new google.maps.Point(10,30)
          }

          var imageS ={
          url: 'http://i-sos.org/images/school-bus-icon.png',
          labelOrigin: new google.maps.Point(10,30)
          }
          var imageC ={
          url: 'http://i-sos.org/images/cemetery-32.png',
          //size: new google.maps.Size(20, 20),
          labelOrigin: new google.maps.Point(10,30)
          }

        var x = xmlDoc.getElementsByTagName("location");

        for (i = 0; i <x.length; i++) {

             locationCategory= x[i].getElementsByTagName("category")[0].childNodes[0].nodeValue;
             locationName=     x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
             locationLat=      x[i].getElementsByTagName("lat")[0].childNodes[0].nodeValue;
             locationLng=      x[i].getElementsByTagName("lng")[0].childNodes[0].nodeValue;
             locationURL =     x[i].getElementsByTagName("url")[0].childNodes[0].nodeValue;
             locationInfo =    x[i].getElementsByTagName("info")[0].childNodes[0].nodeValue;
             var marker;
             var content =
              '<div id="content">'+
                   '<h5 >'+locationName+'</h5>'+
                   '<div id="bodyContent">'+
                   '<p>'+   locationInfo+'</p>'+
                   'Website: <a href="'+locationURL+'" target="_blank">'+
                   locationURL+'</a> '+
                   '</div>'+
              '</div>';
             // alert(contentString);
             var myinfowindow = new google.maps.InfoWindow({
                 content: content
             });
             if( locationCategory == "center" && document.getElementById("centers").checked )
             {
                 marker = new google.maps.Marker({
                 position: {lat: Number(locationLat),
                            lng: Number(locationLng)},
                 map: map,
                 label: locationName,
                 title: locationName,
                 infoWindow: myinfowindow,
                 icon: image
                 });
              }
              else if (locationCategory == "school" && document.getElementById("schools").checked)
              {
                marker = new google.maps.Marker({
                 position: {lat: Number(locationLat),
                            lng: Number(locationLng)},
                 map: map,
                 label: locationName,
                 title: locationName,
                 infoWindow: myinfowindow,
                 icon: imageS
                 });
              }
              else if (locationCategory == "cemetery" && document.getElementById("cemeteries").checked)
              {
                marker = new google.maps.Marker({
                 position: {lat: Number(locationLat),
                            lng: Number(locationLng)},
                 map: map,
                 label: locationName,
                 title: locationName,
                 infoWindow: myinfowindow,
                 icon: imageC
                 });

              }

              if (marker != null)
              {
               google.maps.event.addListener(marker, 'click', function() {
               this.infoWindow.open(map, this);
                });
               }



        }
  }


       </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-Lw2OPTCXFnZdMfjWVZtqRVRRgEU14Og&callback=initMap">
    </script>

    </div>

    <div style="position: relative; height: 15%; min-height:15%; margin-right:auto; margin-left:auto; text-align:center; margin-bottom:5%;">
    <pre><img src="/images/Islam-Crescent-icon.png"  style="float:left;"> Islamic Center Location.</pre>
    <pre><img src="/images/school-bus-icon.png"  style="float:left;"> Islamic School Location.</pre>
    <pre><img src="/images/cemetery-32.png"  style="float:left;"> Islamic Cemetery Location.</pre>   <br>
    <span> Click (if you are using a mouse) or Tap (if you are using hand held device) on the locations on the map to view information about them.   <span>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>