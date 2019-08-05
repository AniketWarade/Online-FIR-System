<html>
<head>
<link rel="stylesheet" type="text/css" href="..\Online FIR System\col.css">
<link rel="stylesheet" type="text/css" href="..\Online FIR System\Font.css">
<script>
function hide()
{
	var a = document.getElementById('Reg Comp');
	a.style.display = 'none';
	var b = document.getElementById('Chksts');
	b.style.display = 'none';
}
function registercomplaints()
{
	var a = document.getElementById('Reg Comp');
	a.style.display = 'block';
	var b = document.getElementById('Chksts');
	b.style.display = 'none';
}
function checkstatus()
{	
	var a = document.getElementById('Reg Comp');
	a.style.display = 'none';
	var b = document.getElementById('Chksts');
	b.style.display = 'block';
}
</script>
</head>
<body onload="hide()">
<form>
<table width="100%" height="100%" style="border:2px solid blue">
<tr>
<td style="vertical-align:top;">
<h2 align="left" class="fontset2">Select Option</h2><br>
<input align="left" type="button" id="Register Complaint" name="Register Complaint" value="Register Complaint" onclick="registercomplaints()" class="fontset"><br>
<input align="left" type="button" id="Check Status" name="Check Status" value="Check Status" onclick="checkstatus()" class="fontset"><br>

</td>
<td width="100%">
<iframe align="center" id="Reg Comp" name="main1" src="..\Online FIR System\Complaint.html" width="100%" height="100%" frameborder="0"></iframe>
<iframe align="center" id="Chksts" name="main1" src="..\Online FIR System\Checkstatus.php" width="100%" height="100%" frameborder="0"></iframe>
</td>
</tr> 
</table>
</form>
</body>
</html>