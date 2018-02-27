<?php 
	// if ($_SERVER['HTTP_HOST']=='localhost') {
		// $DB_SERVER = 'localhost';
		// $DB_USER_READER = 'root';
		// $DB_PASS_READER = 'Silpakorn60';
		// $DB_NAME = 'db322_exchangerate';
		//echo "localhost";
	// }
	// else{
	// 	//บน server imsu.co
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'u13580223';
		$DB_PASS_READER = 'zt7vRIiJz0';
		$DB_NAME = 'db13580223';
	// }
	//คำสั่งที่ใช้กับฐานข้อมูล
	$conn = new mysqli($DB_SERVER , $DB_USER_READER , $DB_PASS_READER , $DB_NAME);

	//ตรวจสอบว่าต่อสำเร็จไหม
	if ($conn -> connect_error) {
		die("connection failed".$conn -> connect_error);
	}
	mysqli_set_charset($conn,"utf8");

?>