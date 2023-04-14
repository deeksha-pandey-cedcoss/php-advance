<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Currency Converter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Amiri&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
	<!-- linking style.css file-->
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- Currency Converter -->
	<h1 class="heading text-center display-2">
		Currency Converter</h1>
	<hr>
	<div class="container">
		<div class="main">
			<div class="form-group">
				<label for="amount">
					Amount to Convert :
				</label>
				<input type="number" class="form-control searchBox" placeholder="0.00" id="amount">
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">From</span>
						</div>
						<select class="form-control from" id="first">
							<option value="">Select One …</option>
							<option value="USD">USD</option>
							<option value="RUPPEE">RUPPEE</option>
							<option value="USD">USD</option>
							<option value="SOL">SOL</option>
						</select>
					</div>
				</div>
				<button type="submit" name="convert" id="convert" class="btn btn-default bg-secondary" onclick="interChangeValue()"><-----></button>
				<div class="col-sm-4">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">To</span>
						</div>
						<select class="form-control to" id="second">
							<option value="">Select One …</option>
							<option value="USD">USD</option>
							<option value="RUPPEE">RUPPEE</option>
							<option value="EURO">EURO</option>
							<option value="SOL">SOL</option>
						</select>
					</div>
				</div>
			</div>
			<div class="text-center">
				<!-- convert button -->
				<button class="btn btn-primary convert m-2" type="submit" onclick="updatevalue()">
					Convert
				</button>
			</div>
			<div id="finalAmount" class="text-center">
				<h2>
					<center>Converted Amount :
						<span id="finalValue" style="color:green;">
						</span>
					</center>
				</h2>
			</div>
			<!-- Display the converted amount -->
			<h2>Converted Amount :
				<span class="finalValue" style="color:green;">
				</span>
			</h2>
		</div>
		<!-- linking script.js file -->
		<script src="../js/script.js"></script>
</body>
</html>