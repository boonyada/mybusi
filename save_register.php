<html>
<head>
<title>SMILELY's SHOP</title>
</head>
<style>
body {
	margin-top:0;
  padding-bottom: 40px;
  background-color: #eee;
}
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>

<?php
	include ("connect.php");
$strSQL = "SELECT * FROM product";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
?>

<body>



<table style="margin-left:auto;
	 margin-right:auto;
	 background-image:url(bg.jpg);
	 font-size:20px;">
	<tr><td>
    		<?php require("header.php"); ?>
	</td></tr>
	<tr><td>
		<?php require("menu.php"); ?>
	</td></tr>
	
	<tr><td align="center">
    <?php

	include ("connect.php");
 
if(trim($_POST["txtUsername"]) == "")
{
echo "Please input Username!";
exit();
}
 
if(trim($_POST["txtPassword"]) == "")
{
echo "Please input Password!";
exit();
}  
 
if($_POST["txtPassword"] != $_POST["txtConPassword"])
{
echo "Password not Match!";
exit();
}
 
if(trim($_POST["txtName"]) == "")
{
echo "Please input Name!";
exit();
}  
 
$strSQL = "SELECT * FROM member WHERE username = '".trim($_POST['txtUsername'])."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if($objResult)
{
echo "Username already exists!";
}
else
{  
 
$strSQL = "INSERT INTO member (username,password,name) VALUES ('".$_POST["txtUsername"]."',
'".$_POST["txtPassword"]."','".$_POST["txtName"]."')";
$objQuery = mysql_query($strSQL);
 
echo "Register Completed!<br>";      
 
echo "<br> Go to <a href='index.php'>Home Page</a>";
 
}
 
mysql_close();
?>

<!-- ,status  ,'".$_POST["ddlStatus"]."' -->

	</td></tr>
	
	<tr><td>
		<?php require("footer.php"); ?>
	</td></tr>
</table>

	

</body>
</html>