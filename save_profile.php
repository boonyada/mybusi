<?php
session_start();
if($_SESSION['userID'] == "")
{
echo "Please Login!";
exit();
}
	include ("connect.php");
 
if($_POST["txtPassword"] != $_POST["txtConPassword"])
{
echo "Password not Match!";
exit();
}
$strSQL = "UPDATE member SET Password = '".trim($_POST['txtPassword'])."'
,Name = '".trim($_POST['txtName'])."' WHERE userID = '".$_SESSION["userID"]."' ";
$objQuery = mysql_query($strSQL);
 
echo "Save Completed!<br>";      
 
if($_SESSION["status"] == "ADMIN")
{
echo "<br> Go to <a href='admin_page.php'>Admin page</a>";
}
else
{
echo "<br> Go to <a href='user_page.php'>User page</a>";
}
 
mysql_close();
?>