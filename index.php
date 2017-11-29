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
  		while($objResult = mysql_fetch_array($objQuery))
  		{
  	?>
    	<form action = "products/order.php" method = "post">
        
		<table width="500" border="1" style="border-color:#9CF0FA;">
  			<tr>
    			<td width="450" rowspan="2" align="center">

                <img style="max-height:200px; max-width:450px; min-height:200px;" src="products/img/<?php echo $objResult["Picture"];?>">
                </td>
    			<td width="8" height="98" align="center">ราคา</td>
  			</tr>
  			<tr>
    			<td height="51" align="center"><?php echo $objResult["Price"];?></td>
  			</tr>
  			<tr>
    			<td height="33" align="center">
				<?php echo $objResult["ProductName"];?>
                </td>
    			<td align="center"><input type="hidden" name="txtProductID" value="<?php echo $objResult["ProductID"];?>" size="2"> <input type="text" name="txtQty" value="1" size="2"> <input type="submit" value="สั่งซื้อ"></td>
  			</tr>
		</table>
        
        </form>
	<?php
  		}
  	?>

	</td></tr>
	
	<tr><td>
		<?php require("footer.php"); ?>
	</td></tr>
</table>

	

</body>
</html>