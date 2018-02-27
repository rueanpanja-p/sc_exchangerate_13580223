<?php
	//1.รับค่ามา
	//ส่งค่าเป็นpost
	//$thb = $_POST['attribute name'];
	$thb = $_POST['thb'];
	$type = $_POST['type'];
	// echo "ค่าที่กรอกคือ".$thb;
	// echo "<br>";
	// echo "สกุลเงินที่ใช้คำนวณ".$type;
	// echo "<br>";

	if ($type == "usd") {
		//$result = $thb * 0.032; 31.2273
		$result = $thb / 31.2273; //31.2273
	}
	else if ($type == "jyp") {
		//$result = $thb * 0.21; 28.9814
		$result = $thb * 28.9814; //28.9814
	}
	else if ($type == "krw") {
		//$result = $thb * 0.11; //0.0290
		$result = $thb / 0.0290; //0.0290
	}
	else if ($type == "gbp") {
		//$result = $thb * 0.50; //43.3292
		$result = $thb / 43.3292; //43.3292
	}
	else if ($type == "eur") {
		//$result = $thb * 0.40; //38.2737
		$result = $thb / 38.2737;
	}
	$result = number_format($result, 4, '.', '');


	//แบบที่สอง
	// if ($type == "usd") {
	// 	$rate = 0.31;
	// }
	// else if ($type == "jyp") {
	// 	$rate = 0.21;
	// }
	// else if ($type == "krw") {
	// 	$rate = 0.11;
	// }
	// else if ($type == "gbp") {
	// 	$rate = 0.50;
	// }
	// else if ($type == "eur") {
	// 	$rate = 0.40;
	// }
	// echo "Result=".$thb*$rate;

	// //แบบที่สาม
	// switch ($type) {
	// 	case 'usd':
	// 		$rate = 0.31;
	// 		break;
	// 	case 'jyp':
	// 		$rate = 0.21;
	// 		break;
	// 	case 'krw':
	// 		$rate = 0.11;
	// 		break;
	// 	case 'gbp':
	// 		$rate = 0.50;
	// 		break;
	// 	case 'eur':
	// 		$rate = 0.40;
	// 		break;

	// 	default:
	// 		$rate = 0;
	// 		break;
	// }

	// echo "Result=".$thb*$rate;
	require 'connect.php';
	$sql = "INSERT INTO exch322_history(thb,calculated,currency) VALUES('$thb','$result','$type')";
	$sql_exe = $conn -> query($sql);
	//echo "<br>";
	//print($sql_exe);
	//echo "<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 well well-sm">
				<h1>Exchange</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 well well-sm bg-success">
				<?php 
					echo "<h4>ค่าที่กรอกคือ</h4>".$thb;
					echo "<br>";
					echo "<h4>สกุลเงินที่ใช้คำนวณ</h4>".strtoupper($type);
					echo "<br>";
					echo "<h4>Result : </h4>".$result;
					echo "<br>";
			 	?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 well well-sm">
			<?php 
			$sql = "SELECT * FROM exch322_history ORDER BY dateRecord DESC";
			$sql_exe = $conn -> query($sql);
			?>
			<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Thai Baht</th>
				        <th>Exchange</th>
				        <th>Calculate</th>
				        <th>Record</th>
				        <th></th>
				      </tr>
				    </thead>
			<?php   
			while ($row = mysqli_fetch_assoc($sql_exe)) {
				echo "";
				?>
					<tbody>
			     	 <tr>
				       	 <td><?php echo $row['thb'] ?></td>
				      	 <td><?php echo strtoupper($row['currency']) ?></td>
				       	 <td><?php echo $row['calculated'] ?></td>
				       	 <td><?php echo $row['dateRecord'] ?></td>
				       	 <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['recordID']; ?> &thb=<?php echo $row['thb']; ?>">Delete</a></td>
			      	</tr>	
					<?php
				}
					$conn->close();
				?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>