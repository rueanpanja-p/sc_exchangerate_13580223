<!DOCTYPE html>
<html>
<head>
	<title>Exchangerate</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script language="javascript" src="js/jquery-3.2.1.min.js"></script>
	<script language="javascript" src="js/alljavascript.js"></script>
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 well well-sm">
					<h1>Exchange rate</h1>
					<form action="calculate.php" method="post">
						<h4>ระบุจำนวนเงินไทยที่ท่านต้องการแลกเปลี่ยน</h4>
						<input type="text" class="form-control" name="thb" placeholder="Thai Baht" onkeypress="return isNumberKey(event)">
						<h4>เลือกสกุลเงินที่ต้องการแลกเปลี่ยน</h4>
						<div class="col-lg-12">
							<div class="col-sm-10 pull-right">
							<select class="form-control selectcal" name="type">
								<option value="usd">USD - ดอล์ล่าสหรัฐ</option>
								<option value="jyp">JYP - ญี่ปุ่น</option>
								<option value="krw">KRW - เกาหลีใต้</option>
								<option value="gbp">GBP - สหราชอาณาจักร</option>
								<option value="eur">EUR - ยูโรโซน</option>
							</select>
							</div>
							<div class="col-sm-2">
								<div class="images-flag"></div>
							</div>
						</div>
							<br><br><br>
							<button type="submit" class="btn btn-success btn-block checkval">Calculate</button>
					</form>
				</div>	
			</div>
		</div>
</body>
</html>
