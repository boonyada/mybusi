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
	include ("../connect.php");
$strSQL = "SELECT * FROM product";
$objQuery = mysql_query($strSQL)  or die(mysql_error());

?>
<body>

<table style="margin-left:auto;
	 margin-right:auto;
	 background-image:url(../bg.jpg);
	 font-size:20px;">
	<tr><td>
		<img src="../head1.jpg" width="auto">
	</td></tr>
	<tr><td align="center">
    
<table width="450"  border="1">
  <tr>
    <td width="101">Picture</td>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="50">Price</td>
    <td width="100">Cart</td>
  </tr>
  <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
  <tr>
	<form action = "order.php" method = "post">
	<td align="center"><img style="max-height:200px; max-width:450px; min-height:200px;" src="img/<?php echo $objResult["Picture"];?>"></td>
    <td align="center"><?php echo $objResult["ProductID"];?></td>
    <td align="center"><?php echo $objResult["ProductName"];?></td>
    <td align="center"><?php echo $objResult["Price"];?></td>
	<td><input type="hidden" name="txtProductID" value="<?php echo $objResult["ProductID"];?>" size="2"> <input type="text" name="txtQty" value="1" size="2"> <input type="submit" value="Add"></td>
    </form>
  </tr>
  <?php
  }
  ?>
</table>
<br><br><a href="show.php">View Cart</a> | <a href="clear.php">Clear Cart</a>
<?php
mysql_close();
?>

	</td></tr>
	
	<tr><td>
		<div style="width:1200px;height:30px; background:#FFF; text-align:center; margin-top:10px;">
น.ส.บุณยดา  สูงติวงค์ รหัสนักศึกษา 5808311010 เบอร์ 098-8566768
</div>
<img src="../footer.jpg" width="auto">
	</td></tr>
</table>

	

</body>
</html>