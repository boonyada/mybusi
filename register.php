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
    
	<form name="form1" method="post" action="save_register.php">
Register Form <br>
<table width="400" border="1" style="width: 400px">
<tbody>
<tr>
<td width="125"> &nbsp;Username</td>
<td width="180">
<input name="txtUsername" type="text" id="txtUsername" size="20">
</td>
</tr>
<tr>
<td> &nbsp;Password</td>
<td><input name="txtPassword" type="password" id="txtPassword">
</td>
</tr>
<tr>
<td> &nbsp;Confirm Password</td>
<td><input name="txtConPassword" type="password" id="txtConPassword">
</td>
</tr>
<tr>
<td>&nbsp;Name</td>
<td><input name="txtName" type="text" id="txtName" size="35"></td>
</tr>
	<!--<tr>
	<td> &nbsp;Status</td>
	<td>
	<select name="ddlStatus" id="ddlStatus">
	<option value="ADMIN">ADMIN</option>
	<option value="USER">USER</option>
	</select>
	</td>
	</tr> -->
</tbody>
</table>
<br>
<input type="submit" name="Submit" value="Save">
</form>

	</td></tr>
	
	<tr><td>
		<?php require("footer.php"); ?>
	</td></tr>
</table>

	

</body>
</html>