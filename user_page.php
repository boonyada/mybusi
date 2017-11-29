<?php
session_start();
if($_SESSION['userID'] == "")
{
echo "Please Login!";
exit();
}
 
if($_SESSION['status'] != "USER")
{
echo "This page for User only!";
exit();
}  
 
	include ("connect.php");
$strSQL = "SELECT * FROM member WHERE userID = '".$_SESSION['userID']."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
?>
<html>
<head>
</head>
<body>
Welcome to User Page! <br>
<table border="1" style="width: 300px">
<tbody>
<tr>
<td width="87"> &nbsp;Username</td>
<td width="197"><?php echo $objResult["username"];?>
</td>
</tr>
<tr>
<td> &nbsp;Name</td>
<td><?php echo $objResult["name"];?></td>
</tr>
</tbody>
</table>
<br>
<a href="edit_profile.php">Edit</a><br>
<br>
<a href="logout.php">Logout</a>
</body>
</html>