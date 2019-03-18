<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Event Calendar</title>
	<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <!--   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> -->
    <!-- Respomsive slider -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" > -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive-calendar.css" >
    <link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	
	<!--  <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/responsive-calendar.js"></script>
      <!--   <script type="text/javascript"> --> 
    
	
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	


</head>
<body >
<?php include 'PageHeader.php';?>

<div style="position:relative;">

<div class="calendarcontainer"  >
<h2 class="pageTitle">Event Calendar</h2>

<div style="width:100%;  ">
<div class="container">
      <!-- Responsive calendar - START -->
    	<div class="responsive-calendar" style=" width:50%;  height:40%; margin-right:2%; float:right;">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary" style="background-color: #008000;">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary" style="background-color: #008000;">Next</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
        
          
        </div>
      </div>
      <!-- Responsive calendar - END -->
      <div  id="eventdesc1" style="width:25%;  height:40%; margin-left:2%; ">
       <p id="eventdesc" style="position: absolute; top: 40%; "></p>  
      </div>
    </div>
    
    <script>

    function zero(num) {
        if (num < 10) { return "0" + num; }
        else { return "" + num; }
      }
    
    $(document).ready(function() {
        var $cal = $('.responsive-calendar');
        $cal.responsiveCalendar({
          events : {
            "2018-07-20" : {
              
              "dayEvents" : [
                {
                  "title" : "Free Food Market",
                  "time" : "11:30 AM - 2:30 PM",
                  "url" : "https://www.facebook.com/events/444430599356256/",
                  "location" : "Bilal Masjid"
                }
              ]
            },
            "2018-08-17" : {
                
                "dayEvents" : [
                  {
                    "title" : "Free Food Market",
                    "time" : "11:30 AM - 2:30 PM",
                    "url" : "https://www.facebook.com/events/722687291405194/",
                    "location" : "Bilal Masjid"
                  }
                ]
              },
              "2018-08-19" : {
                  
                  "dayEvents" : [
                    {
                      "title" : "WALK with Refugees and Immigrants",
                      "time" : "11:00 AM - 2:00 PM",
                      "url" : "https://www.facebook.com/events/325176198023284/",
                      "location" : "10520 NE Halsey St, Portland, OR 97220"
                    }
                  ]
                },
			"2018-09-09" : {
                  
                  "dayEvents" : [
                    {
                      "title" : "Day Of Dignity 2018",
                      "time" : "12:00 PM - 4:00 PM",
                      "url" : "https://www.facebook.com/events/1507925816002961/",
                      "location" : "Elephant Park"
                    }
                  ]
                }, 
              "2018-09-21" : {
                  
                  "dayEvents" : [
                    {
                      "title" : "Free Food Market",
                      "time" : "11:30 AM - 2:30 PM",
                      "url" : "https://www.facebook.com/events/899631343555004/",
                      "location" : "Bilal Masjid"
                    }
                  ]
                },
                "2018-10-19" : {
                    
                    "dayEvents" : [
                      {
                        "title" : "Free Food Market",
                        "time" : "11:30 AM - 2:30 PM",
                        "url" : "https://www.facebook.com/events/467973070281698/",
                        "location" : "Bilal Masjid"
                      }
                    ]
                  },
                  "2018-11-16" : {
                      
                      "dayEvents" : [
                        {
                          "title" : "Free Food Market",
                          "time" : "11:30 AM - 1:30 PM",
                          "url" : "https://www.facebook.com/events/316966988887705/",
                          "location" : "Bilal Masjid"
                        }
                      ]
                    },
                    "2018-12-21" : {
                        
                        "dayEvents" : [
                          {
                            "title" : "Free Food Market",
                            "time" : "11:30 AM - 1:30 PM",
                            "url" : "https://www.facebook.com/events/339174673553344/",
                            "location" : "Bilal Masjid"
                          }
                        ]
                      },
                      "2019-01-18" : {
                          
                          "dayEvents" : [
                            {
                              "title" : "Free Food Market",
                              "time" : "11:30 AM - 1:30 PM",
                              "url" : "https://www.facebook.com/events/2096333590463530/",
                              "location" : "Bilal Masjid"
                            }
                          ]
                        },
                        "2019-02-15" : {
                            
                            "dayEvents" : [
                              {
                                "title" : "Free Food Market",
                                "time" : "11:30 AM - 1:30 PM",
                                "url" : "https://www.facebook.com/events/373872330092389/",
                                "location" : "Bilal Masjid"
                              }
                            ]
                          },
                          "2019-03-15" : {
                        	  "number": 2,
                              "dayEvents" : [
                                {
                                  "title" : "Free Food Market",
                                  "time" : "12:30 PM - 2:30 PM",
                                  "url" : "https://www.facebook.com/events/271693337056065/",
                                  "location" : "Bilal Masjid"
                                },
                                {
                                    "title" : "ISOS Honoring",
                                    "time" : "6:00 PM - 8:00 PM",
                                    "url" : "https://www.facebook.com/IslamicSocialServicesOregonState/posts/2256920017964473?notif_id=1551382528083848&notif_t=page_post_reaction",
                                    "location": "Southwest Community Center"
                                }
                              ]
                            },
                         
                      
          }, /*end of events*/
          
          onActiveDayClick: function(events) { 

              var $activeday, $dayEvents, $output,$today;
              $output = "";
              $activeday = $(this).data('year')+'-'+zero($(this).data('month'))+'-'+zero($(this).data('day'));
              $activedaydisplay = zero($(this).data('month'))+'-'+zero($(this).data('day'))+ '-'+$(this).data('year');
              $today = events[$activeday];
              $dayEvents = $today.dayEvents;
                           
              $.each($dayEvents, function() {
                  $.each( $(this), function( key ){
                    $output += '<h4>'+$activedaydisplay+'</h4>'+'<a target="_blank" href="'+$(this)[key].url +'">'+$(this)[key].title+'</a>' + '<p style="font-size: 0.5em;">Time: '+$(this)[key].time+'<br>Location: '+$(this)[key].location+'</p>';
                  });
                });
                           
        	  document.getElementById("eventdesc").innerHTML = $output;

        	  
        	  },

          onDayClick: function(events) { 
        	  document.getElementById("eventdesc").innerHTML = "";
          }
           
          }); /*end of responsive cal*/
        
        }); /*end of documents*/
      
      
          
    </script>
    </div>
</div>
</div>

<?php include 'footer.php';?>
</body>
</html>