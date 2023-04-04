<html>

<head>
	<title>Checkout</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
	<script>
		function suggest(inputString) {
			if (inputString.length == 0) {
				$('#suggestions').fadeOut();
			} else {
				$('#country').addClass('load');
				$.post("autosuggestname.php", {
					queryString: "" + inputString + ""
				}, function(data) {
					if (data.length > 0) {
						$('#suggestions').fadeIn();
						$('#suggestionsList').html(data);
						$('#country').removeClass('load');
					}
				});
			}
		}

		function fill(thisValue) {
			$('#country').val(thisValue);
			setTimeout("$('#suggestions').fadeOut();", 600);
		}
	</script>

	<style>
		#result {
			height: 20px;
			font-size: 16px;
			font-family: Arial, Helvetica, sans-serif;
			color: #333;
			padding: 5px;
			margin-bottom: 10px;
			background-color: #FFFF99;
		}

		#country {
			border: 1px solid #999;
			background: #EEEEEE;
			padding: 5px 10px;
			box-shadow: 0 1px 2px #ddd;
			-moz-box-shadow: 0 1px 2px #ddd;
			-webkit-box-shadow: 0 1px 2px #ddd;
		}

		.suggestionsBox {
			position: absolute;
			left: 10px;
			margin: 0;
			width: 268px;
			top: 40px;
			padding: 0px;
			background-color: #000;
			color: #fff;
		}

		.suggestionList {
			margin: 0px;
			padding: 0px;
		}

		.suggestionList ul li {
			list-style: none;
			margin: 0px;
			padding: 6px;
			border-bottom: 1px dotted #666;
			cursor: pointer;
		}

		.suggestionList ul li:hover {
			background-color: #FC3;
			color: #000;
		}

		ul {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 11px;
			color: #FFF;
			padding: 0;
			margin: 0;
		}

		.load {
			background-image: url(loader.gif);
			background-position: right;
			background-repeat: no-repeat;
		}

		#suggest {
			position: relative;
		}

		.combopopup {
			padding: 3px;
			width: 268px;
			border: 1px #CCC solid;
		}
	</style>
</head>

<body onLoad="document.getElementById('country').focus();">
	<form action="bulksavesales2.php" method="post">
		<div id="ac">
			<center>
				<h4><i class="icon icon-money icon-large"></i> Complete Transaction</h4>
			</center>
			<hr>
			<input type="date" name="date" value="<?php echo date("Y-m-d"); ?>" hidden="true" />
			<input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
			<input type="hidden" name="amount" value="<?php echo $_GET['total']; ?>" />
			<input type="hidden" name="ptype" value="<?php echo $_GET['pt']; ?>" />
			<input type="hidden" name="cashier" value="<?php echo $_GET['cashier']; ?>" />
			<input type="hidden" name="profit" value="<?php echo $_GET['totalprof']; ?>" />
			<center>

			<input type="number" name="total" readonly value="<?php echo $_GET['total']; ?>" placeholder="Amount Received" style="width: 268px; height:35px;  margin-bottom: 15px;" required /><br>

<input type="number" name="cash" autofocus placeholder="Amount Tendered" style="width: 268px; height:35px;  margin-bottom: 15px;" required /><br>

				<div class="suggestionsBox" id="suggestions" style="display: none;">
					<div class="suggestionList" id="suggestionsList"> &nbsp; </div>
				</div>
				<?php
				$asas = $_GET['pt'];
				if ($asas == 'credit') {
				?>Due Date: <input type="date" name="due" placeholder="Due Date" style="width: 268px; height:30px; margin-bottom: 15px;" /><br>
			<?php
				}
				if ($asas == 'cash') {
			?>

			<select name="imei" style="width: 268px; height: 35px; margin-bottom: 15px" required>
				<option value="">--Select Payment Mode--</option>
					<option value="Cash">Cash</option>
					<option value="POS">POS</option>
				<option value="Transfer">Transfer</option>
					<option value="Credit">Credit</option>
				
				</select><br>
				
				<input type="text" size="25" name="cname" placeholder="Enter Customer Name" style="width: 268px; height:35px;" /><br><br>

				
			<?php
				}
			?><button class="btn btn-primary btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
			</center>
		</div>
	</form>
</body>

</html>