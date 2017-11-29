<?php 
	include ("../connect.php");
 
    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
	//รับชื่อไฟล์จากฟอร์ม 
	
	$ProductName = $_POST['ProductName'];
	$Price = $_POST['Price'];
	$Picture = (isset($_POST['Picture']) ? $_POST['Picture'] : '');
		
	$upload=$_FILES['Picture'];
	if($upload <> '') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	$path="img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['Picture']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path.$newname;
	$path_link="img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['Picture']['tmp_name'],$path_copy);  
		
	
	}
 
 
			 $sql = "INSERT INTO product 
					(ProductName, 
					Price, 
					Picture) 
					VALUES
					('$ProductName',
					'$Price',
					'$newname')";
		
		
		$result = mysql_query($sql)  or die(mysql_error());
 
	mysql_close();
 
 
 
	if($result){
   
			echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มสินค้าเรียบร้อย');";
			echo "window.location='add_product.php';";
			echo "</script>";
	  }
	  else{
		    echo "<script type='text/javascript'>";
				echo "window.location='add_product.php';";
			echo "</script>";
	  }
	
	
 ?>