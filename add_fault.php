<html>
<body>
<img src="logo.gif"</img>
<body bgcolor="#FFFFFF" text="black">
<font face="arial"><h1><strong><CENTER><td colspan="8"><strong><center>ADD an Faulty Devices</h1></strong></center></font></td>

<form METHOD=POST  action="/insert_fault_devices.php">
<center><table  width="500" border="1" cellspacing="1" cellpadding="5"></center>
<tr>
<td> <center><font face="arial">Device Name</font> </td>
<td> <center><font face="arial">Fault Description</font> </td>
<td> <center><font face="arial">Fault Date</font> </td>
<td> <center><font face="arial">User/PC Name</font> </td>
<td> <center><font face="arial">Remarks</font> </td>
</tr>
<tr>
<td> <select name="devices">
  <option value="SMPS">SMPS</option>
  <option value="Hard Disk Drive">Hard Disk Drive</option>
  <option value="RAM">RAM</option>
  <option value="Molded Cable">Molded Cable</option>
  <option value="Pendrive">Pendrive</option>
  <option value="Network Connectivity Tester">Network Connectivity Tester</option>
  <option value="DMDD TX HDD">DMDD TX HDD</option>
  <option value="DMDD RX HDD">DMDD RX HDD</option>
  <option value="LAN Card">LAN Card</option>
  <option value="Keyboard">Keyboard</option>
  <option value="12V Power Adapter">12V Power Adapter</option>
  <option value="DVD-Writer External">DVD-Writer External</option>
  <option value="ZYXEL Wireless Router">ZYXEL Wireless Router</option>
  <option value="External HDD">External HDD</option>
  <option value="Microsoft Camera Webcam">Microsoft Camera Webcam</option>
  <option value="HP 1020 Printer">HP 1020 Printer</option>
  <option value="SMPS ATX">SMPS ATX</option>
  <option value="Head Phone">Head Phone</option>
  <option value="USB to LAN">USB to LAN</option>
  <option value="Mouse">Mouse</option>
  <option value="Mouse Pad">Mouse Pad</option>
  <option value="CD R/W">CD R/W</option>
  <option value="DVD R/W">DVD R/W</option>
  <option value="Power Adapter">Power Adapter</option>
  <option value="VGA Splitter">VGA Splitter</option>
  <option value="Linksys RV02">Linksys RV02</option>
  <option value="D-link Wireless">D-link Wireless</option>
  <option value="RJ-45 Extender">RJ-45 Extender</option>
  <option value="HP DVD SATA Writer">HP DVD SATA Writer</option>
  <option value="Switch">Switch</option>
  <option value="Speaker">Speaker</option>
  <option value="No Used Device">No Used Device</option>
  <option value="No Faulty Device">No Faulty Device</option>
</select></td>
<td> <input size="15" type="text" name="descr" value=""></td>
<td> <input size="15" type="text" name="fdate" value=""></td>
<td> <input size="15" type="text" name="users" value=""></td>
<td> <input size="15" type="text" name="remarks" value=""></td>
<td><input type="hidden" name="udate" value="<?php echo date('d-m-Y'); ?>"></td></tr>
</tr>
</table>
<br><center><input type="reset" value="Reset" />
<input type="button" name="logout" value="Log Out" onClick=window.location="/index.php">
<input type="submit" value="Submit">
<input type="button" name="home" value="Home" onClick=window.location="/bkc_info_admin.php"></center>
</form>
</body>
</html>
