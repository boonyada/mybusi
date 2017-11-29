<?php
session_start();
	include ("connect.php");
$strSQL = "SELECT * FROM member WHERE username = '".mysql_real_escape_string($_POST['txtUsername'])."'
and password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
echo "username and password Incorrect!";
}
else
{
$_SESSION["userID"] = $objResult["userID"];
$_SESSION["status"] = $objResult["status"];
 
session_write_close();
 
if($objResult["status"] == "ADMIN")
{
header("location:admin_page.php");
}
else
{
header("location:user_page.php");
}
}
mysql_close();
?>