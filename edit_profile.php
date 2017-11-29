<?php
session_start();
if($_SESSION['userID'] == "")
{
echo "Please Login!";
exit();
}
 
	include ("connect.php");
$strSQL = "SELECT * FROM member WHERE userID = '".$_SESSION['userID']."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save_profile.php">
Edit Profile! <br>
<table width="400" border="1" style="width: 400px">
<tbody>
<tr>
<td width="125"> &nbsp;UserID</td>
<td width="180">
<?php echo $objResult["userID"];?>
</td>
</tr>
<tr>
<td> &nbsp;Username</td>
<td>
<?php echo $objResult["username"];?>
</td>
</tr>
<tr>
<td> &nbsp;Password</td>
<td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["password"];?>">
</td>
</tr>
<tr>
<td> &nbsp;Confirm Password</td>
<td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["password"];?>">
</td>
</tr>
<tr>
<td>&nbsp;Name</td>
<td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["name"];?>"></td>
</tr>
<tr>
<td> &nbsp;Status</td>
<td>
<?php echo $objResult["status"];?>
</td>
</tr>
</tbody>
</table>
<br>
<input type="submit" name="Submit" value="Save">
</form>
</body>
</html>