<?php 
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];
	$sql = "DELETE FROM exch322_history WHERE recordID = $id";
	require 'connect.php';
	$sql_exe = $conn -> query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="alert alert-danger">
			  <?php 
			  	if ($sql_exe) {
					echo "Delete Complete";
					echo "<br>";
					echo "Delete ID"." ".$id;
					echo "<br>";
					echo "THB=".$thb;
					//sleep(5);
					header("Refresh:5; URL=index.php");
				}else{
					echo "Delete Failed";
				}
			  ?>
			</div>
		</div>
	</div>
</body>
</html>