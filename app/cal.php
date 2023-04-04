<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script>
function vatCalculation() {
var subtotal = document.getElementById('subtotal').value;
var vat = document.getElementById('vat').value;
var total = parseFloat(parseFloat(subtotal) + parseFloat(vat)).toFixed(2);

document.getElementById('subtotal').value = parseFloat(subtotal).toFixed(2);
document.getElementById('vat').value = parseFloat(vat).toFixed(2);
document.getElementById('total').value = total;
}
</script>

<form>
<input name="subtotal" id="subtotal" type="text"  placeholder="00.00" onchange="vatCalculation();" />

<input name="vat" id="vat" type="text"  placeholder="00.00" />

<input name="total" id="total" type="text" placeholder="00.00" readonly="true" />
</form>

</body>
</html>