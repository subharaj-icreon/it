<?php
session_start();
?>
<html>
<head>
<script>
function startTime() {
    var today=new Date()
    var dd=today.getDate()
    var mm=today.getMonth() + 1
    var y=today.getFullYear()
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = dd+"/"+mm+"/"+y+"&nbsp;&nbsp;"+h+":"+m+":"+s+"&nbsp;&nbsp;&nbsp;";
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
  if (i<10) {i ="0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<script type="text/javascript">
	function goClicked()
	{
             if(document.getElementById('reportType').value==1){
	     //alert('report changed to '+ document.getElementById('reportType').value);
	     	window.location="/view_ip_list.php";
	     }
             if(document.getElementById('reportType').value==2){
             	window.location="/view_available_devices_list.php";
	     }
             if(document.getElementById('reportType').value==3){
	     	window.location="/view_fault_devices_list.php";
	     }
             if(document.getElementById('reportType').value==4){
	     
		window.location="/view_used_devices_list.php";
	     }
	     if(document.getElementById('reportType').value==5){
	     
		window.location="/view_system_cleaning_list.php";
	     }
	}
function goClicked1()
	{
	     if(document.getElementById('reportType1').value==6){
	     
		window.location="/view_reliance_downtime_report.php";
	     }
	     if(document.getElementById('reportType1').value==7){
	     
		window.location="/view_tata_downtime_report.php";
	     }
		//alert('hi');
		//alert('report changed to '+ document.getElementById('reportType').value);
	}
</script>
<title>:: Administrator Page ::</title>
</head>
<style>
background {
    opacity: 0.4;
    filter: alpha(opacity=40);
}
</style>
<body background=keyboard.jpg style="background-size: cover;" onload="startTime()">
<img src="logo.gif" style="opacity: 0.2"</img>
<input type="button" value="Log Out" onClick=window.location="/logout.php" style="float: right; color: white; background-color: transparent">
<div id="time" style="float:right; color:white"></div>
<h1><center><FONT FACE="arial" style="color: white">Welcome to BKC WeatherSys Pvt. Ltd.</font></h1>
<h2><center><FONT FACE="arial" style="color: white">IT-Hardware Information Web Portal<font></h2><br>
<table cellSpacing=3 cellPadding=5 width=990 border="5" align=center>

<tr>
<td> <width = 500 style="color: white"><center><strong>Add IT-Hardware Information</strong></td>
<td> <width = 500 style="color: white"><center><strong>View/Update IT-Hardware Information</strong></td>
<td> <width = 500 style="color: white"><center><strong>IT-Hardware Monthly Reports</strong></td>
<td> <width = 500 style="color: white"><center><strong>ISP Down time Reports</strong></td>
</tr>


<td ><A HREF="/ip_add.php " style="color: yellow">Add User/IP Details</A>
<br><br>
<A HREF="/add_available_devices.php " style="color: yellow">Add Available Devices</A>
<br><br>
<A HREF="/add_fault_devices.php " style="color: yellow">Add Faulty Devices</A>
<br><br>
<A HREF="/add_used_devices.php " style="color: yellow">Add Used Devices</A>
<br><br>
<A HREF="/add_system_cleaning.php " style="color: yellow">Add System Cleaning Report</A>
<br><br>

</td>

<td >
<A HREF="/ip_list.php " style="color: yellow">Update/Delete IP Details</A><br><br>
<A HREF="/available_devices_list.php " style="color: yellow">Update/Delete Available Details</A><br><br>
<A HREF="/fault_devices_list.php " style="color: yellow">Update/Delete Fault Details</A><br><br>
<A HREF="/used_devices_list.php " style="color: yellow">Update/Delete Used Details</A><br><br>
<A HREF="/system_cleaning_list.php " style="color: yellow">Update/Delete System Cleaning Report</A><br><br>
</td>

<td>
<form id="monthlyreport" name="monthlyreport" method="post" style="color: orange"><br><center>Latest Report of IT-Hardware Inventory</center>

<select id="reportType" onchange="reportTypeChanged()" style="color: black; background-color: transparent">
  <option value="1">System IP Details</option>  
  <option value="2">Available Devices</option>  
  <option value="3">Faulty Devices</option>
  <option value="4">Used Devices</option>
  <option value="5">System Cleaning Reports</option>
  </select>

<input type="Submit" name="Submit" value="Go" onclick="goClicked();return false;" style="color: white; background-color: transparent" />

</form><br>
</td>

<td>
<br><br>
<A HREF="/add_system_cleaning.php " style="color: yellow">Add System Cleaning Report</A>
<br><br>
<A HREF="/add_reliance_reports.php " style="color: yellow">Add Reliance Downtime Report</A>
<br><br>
<A HREF="/add_tata_reports.php " style="color: yellow">Add TATA Downtime Reports</A>
<br><br>

<form id="selectisp" name="ispreport" method="POST" style="color: orange"><br><center>Select the ISP</center>
<select id="reportType1" onchange="reportTypeChanged()" style= "height:20px;width:120px; color: black; background-color: transparent" >
    <OPTION value=6>Reliance</option>
    <OPTION value=7>TATA</option>
    </SELECT>
<input type="Submit" name="Submit" value="GO" onclick="goClicked1();return false;" style="color: white; background-color: transparent" />
</form><br>
</td>

</tr>

</table>
</body>
</html>
