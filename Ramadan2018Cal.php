<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta name="author" content="Reem Soliman">
	<title>ISOS- Ramadan 2018 Calendar</title>
	<link rel="stylesheet" type="text/css" href="IsosMenuCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosFooterCSS.css">
	<link rel="stylesheet" type="text/css" href="IsosCSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
        <script type="text/javascript" src="../PrayTimes.js"></script>

        
        <style>    
		/*body, tr, form {font-family: tahoma; font-size: 12px; color: #404040; text-align: center; margin: 0; padding: 0}    */
		pre {font-family: courier, serif, size: 10pt; margin: 0px 8px;}
		input {font-size: 12px;}
		.header {background:#eef; border-bottom: 1px solid #ddd; padding: 7px;}
		.caption {font-size: 20px; color: #d95722; text-align: center; width: 10em;}
		.arrow {font-weight: bold; text-decoration: none; color: #3D3D3D; }
		.arrow:hover {text-decoration: underline;}
		.command {font-weight: bold; text-decoration: none; color: #AAAAAA; }
		.command:hover {text-decoration: underline;}
		.timetable {width: 70%; border-width: 1px; border-style: outset; border-collapse: collapse; border-color: gray; margin: 0 auto;}
		.timetable td {border-width: 1px; border-spacing: 1px;  border-style: inset; border-color: #CCCCCC;}
		.timetable tr:nth-child(even) {background: #dddddd;}
		.head-row {color: black; background-color: #eef;}
		.today-row {background-color: #F8F7F4; color: black}
		
	</style>

	</head>
<body>
<?php include 'PageHeader.php';?>

<div style="position:relative;">
<div style="margin-left:auto; margin-right:auto; width:70%;  height:100%;border:3px solid #73AD21; overflow:auto; position:relative; padding-left: 0.5em;">
<h2 class="pageTitle" style"margin-left:0.5em;">Ramadan Calendar</h2>

<div style="width:100%;"  >
<div >
 <p class="smaller"> Timetable in Portland, OR local time using Islamic Society of North America Method.</p>
</div>
<div style="width:100%;">
<img src="Print-2-48.png" alt="Print the table" style="float:right; margin-right: 1em;" onclick="printtable()">
</div>
<div id="timetablediv">

<table style="margin-left:auto; margin-right:auto;">
<tr>
	
	<td id="table-title" class="caption"></td>
	
</tr>
</table>


<br/>

<table id="timetable" style="table-layout: fixed; width:85%; border-width: 1px; border-style: outset; border-collapse: collapse; border-color: gray; margin: 0 auto; ">
	
	<tbody></tbody>
</table>
</div>

 </div>

<div align="center" style="margin-top: 7px">
	Source: <a href="http://praytimes.org/" class="command">PrayTimes.org</a> |
	Time Format: <a id="time-format" href="javascript:switchFormat(1)" title="Change clock format" class="command"></a>
</div>
<br/>

<script type="text/javascript">


	var currentDate = new Date();
	var timeFormat = 1;
	switchFormat(0);

        function printtable()
        {
          var isosLogo = "<div style=\"width:100%\"> <table style=\"margin:auto;\"><tr><td><img src=\"images/\logo.jpg\" ></td><td> <p>Islamic Social Services Of Oregon State</p></td></tr></table></div> <br>";

          var printContent =  isosLogo + document.getElementById('timetablediv').innerHTML;
          var WinPrint = window.open('', '', 'width=900,height=650');
          WinPrint.document.write(printContent);

          WinPrint.document.close();
          WinPrint.focus();
          WinPrint.print();
          WinPrint.close();
        }
	// display monthly timetable
	function displayMonth(offset) {
		var lat = "45.523064";
		var lng = "-122.6765";
		var timeZone = "-8";
		var dst = "auto";
		var method = "ISNA";

		prayTimes.setMethod(method);
		currentDate.setMonth(currentDate.getMonth()+ 1* offset);
		var month = currentDate.getMonth();
		var year = currentDate.getFullYear();
		var title = 'Ramadan 2018 Calendar';
		$('table-title').innerHTML = title;
		makeTable(year, month, lat, lng, timeZone, dst);
	}

	// make monthly timetable
	function makeTable(year, month, lat, lng, timeZone, dst) {		
		var items = {day: 'Day', hday: 'Hijri Day',fajr: 'Fajr', sunrise: 'Sunrise', 
					dhuhr: 'Dhuhr', asr: 'Asr', // sunset: 'Sunset', 
					maghrib: 'Maghrib', isha: 'Isha'};
				
		var tbody = document.createElement('tbody');
		tbody.appendChild(makeTableRow(items, items, 'head-row'));

		var date = new Date(year, 4,16);
		var endDate = new Date(year, 5, 15);
		var format = timeFormat ? '12hNS' : '24h';

		var ramadanDay= 1;
		while (date < endDate) {
			
			var times = prayTimes.getTimes(date, [lat, lng], timeZone, dst, format);
			times.day = date.toDateString();
			var today = new Date(); 
			var isToday = (date.getMonth() == today.getMonth()) && (date.getDate() == today.getDate());
			var klass = isToday ? 'today-row' : '';
			tbody.appendChild(makeTableRow(times, items, klass, ramadanDay));
			ramadanDay ++;
			date.setDate(date.getDate()+ 1);  // next day
		}
		removeAllChild($('timetable'));
		$('timetable').appendChild(tbody);
	}

	// make a table row
	function makeTableRow(data, items, klass, ramadanDay) {
		var row = document.createElement('tr');
		for (var i in items) {
			var cell = document.createElement('td');
			if(i=='day'  || klass =='head-row')
				cell.innerHTML = data[i];
			else if (i == 'hday')
				cell.innerHTML = 'Ramadan ' + ramadanDay ;
			else if(i=='fajr'|| i=='sunrise')
				cell.innerHTML = data[i]+' am';
			else
				cell.innerHTML = data[i]+' pm';
			//cell.innerHTML = i=='fajr'|| i=='sunrise'? data[i]+' am': data[i]+' pm';
			cell.style.width = i=='day' || i=='hday' ?  '4em':'2.3em';
			row.appendChild(cell);
		}
		row.className = klass;
		return row;		
	}

	// remove all children of a node
	function removeAllChild(node) {
		if (node == undefined || node == null)
			return;

		while (node.firstChild)
			node.removeChild(node.firstChild);
	}

	// switch time format
	function switchFormat(offset) {
		var formats = ['24-hour', '12-hour'];
		timeFormat = (timeFormat+ offset)% 2;
		$('time-format').innerHTML = formats[timeFormat];
		update();
	}

	// update table
	function update() {
		displayMonth(0);
	}

	// return month full name
	function monthFullName(month) {
		var monthName = new Array('January', 'February', 'March', 'April', 'May', 'June', 
						'July', 'August', 'September', 'October', 'November', 'December');
		return monthName[month];
	}

	function $(id) {
		return document.getElementById(id);
	}


</script>


</div>

</div>

<?php include 'footer.php';?>
</body>
</html>