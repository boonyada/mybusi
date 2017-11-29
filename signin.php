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
		<form name="form1" method="post" action="check.php">
			<table border="1" style="width: 400px;">
		<tbody>
		<tr>
		<td width="66" rowspan="2">Sign In</td>
		<td width="83"> &nbsp;Username</td>
		<td width="168">
		<input name="txtUsername" type="text" id="txtUsername">
	</td>
	<td width="55" rowspan="2"> &nbsp;
		<input type="submit" name="Submit" value="Login" id="user_login">  &nbsp;</td>
	</tr>
	<tr>
	<td> &nbsp;Password</td>
	<td><input name="txtPassword" type="password" id="txtPassword">
	</td>
	</tr>
	</tbody>
	</table>
	</form>
	</td></tr>
	
	<tr><td>
		<?php require("footer.php"); ?>
	</td></tr>
</table>

	

</body>
</html>