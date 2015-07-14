<?php
$host="localhost"; // Host name
$user="root"; // Mysql username
$password="hardware123!"; // Mysql password
$db_name="hardware"; // Database name
// Connect to server and select database.
mysql_connect("$host", "$user", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM available_devices";
$result=mysql_query($sql);
?>
<html>
<body bgcolor="#FFFFFF" text="black">
<FONT FACE="arial">
<center><table width="1000" border="1" cellspacing="1" cellpadding="0"></center>
<tr>
<td>
<center><table width="1000" border="1" cellspacing="1" cellpadding="5"></center>
<tr>
<td colspan="13"><strong><center>List of all Available Devices</center></strong></td>
</tr>
<tr>
<td align="center"><strong>Sl.No.</strong></td>
<td align="center"><strong>Date</strong></td>
<td align="center"><strong>Device Name</strong></td>
<td align="center"><strong>Description</strong></td>
<td align="center"><strong>Quantity</strong></td>
<td align="center"><strong>Receipt From</strong></td>
<td align="center"><strong>Received Date</strong></td>
<td align="center"><strong>Issue To</strong></td>
<td align="center"><strong>Issue Date</strong></td>
<td align="center"><strong>Balance</strong></td>
<td align="center"><strong>Remarks</strong></td>
<td align="center"><strong>Update</strong></td>
<td align="center"><strong>Delete</strong></td>
</tr>
<?php
$i=1;
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><? echo $i; ?></td>
<td><? echo $rows['date']; ?></td>
<td><? echo $rows['devices']; ?></td>
<td><? echo $rows['descr']; ?></td>
<td><? echo $rows['qty']; ?></td>
<td><? echo $rows['receipt']; ?></td>
<td><? echo $rows['rdate']; ?></td>
<td><? echo $rows['issueto']; ?></td>
<td><? echo $rows['idate']; ?></td>
<td><? echo $rows['balance']; ?></td>
<td><? echo $rows['remarks']; ?></td>

<td align="center"><a href="/update_available_devices.php?id=<? echo $rows['id']; ?>">Update</a></td>
<td align="center"><a href="/delete_available_devices.php?id=<? echo $rows['id']; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</td>
</tr>
</table>
<br><center><input type="button" name="home" value="Home" onClick=window.location="/bkc_info_admin.php">
<input type="button" value="Print" onclick="window.print();"/></center>
</font>
</body>
</html>
<?php
mysql_close();
?>
