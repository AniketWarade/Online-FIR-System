<html>
<head>
<title>Manage Complaints</title>
<link rel="stylesheet" type="text/css" href="..\Online FIR System\col.css">
<link rel="stylesheet" type="text/css" href="..\Online FIR System\Font.css">
<script>
function hide()
{
	var a = document.getElementById('New Comp');
	a.style.display = 'none';
	var b = document.getElementById('Ongoing Comp');
	b.style.display = 'none';
	var c = document.getElementById('Solved Comp');
	c.style.display = 'none';
}
function newcomplaints()
{
	var a = document.getElementById('New Comp');
	a.style.display = 'block';
	var b = document.getElementById('Ongoing Comp');
	b.style.display = 'none';
	var c = document.getElementById('Solved Comp');
	c.style.display = 'none';
}
function ongoingcomplaints()
{	
	var a = document.getElementById('New Comp');
	a.style.display = 'none';
	var b = document.getElementById('Ongoing Comp');
	b.style.display = 'block';
	var c = document.getElementById('Solved Comp');
	c.style.display = 'none';
}
function solvedcomplaints()
{
	var a = document.getElementById('New Comp');
	a.style.display = 'none';
	var b = document.getElementById('Ongoing Comp');
	b.style.display = 'none';
	var c = document.getElementById('Solved Comp');
	c.style.display = 'block';
}
</script>
</head>
<body onload="hide()">
<table width="100%" height="100%" style="border:2px solid blue">
<tr>
<td style="vertical-align:top;">    
<h2 align="left" class="fontset2">Manage Complaints</h2>
<form> 
<input align="left" type="button" id="New Complaints" name="New Complaints" value="New Complaints" onclick="newcomplaints()" class="fontset"><br>
<input align="left" type="button" id="Ongoing Complaints" name="Ongoing Complaints" value="Ongoing Complaints" onclick="ongoingcomplaints()" class="fontset"><br>
<input align="left" type="button" id="Solved Complaints" name="Solved Complaints" value="Solved Complaints" onclick="solvedcomplaints()" class="fontset"><br>
</td>
<td width="100%">
<iframe align="center" id="New Comp" name="main1" src="..\Online FIR System\Newcomplaints.php" width="100%" height="100%" frameborder="0"></iframe>
<iframe align="center" id="Ongoing Comp" name="main1" src="..\Online FIR System\Ongoingcomplaints.php" width="100%" height="100%" frameborder="0"></iframe>
<iframe align="center" id="Solved Comp" name="main1" src="..\Online FIR System\Solvedcomplaints.php" width="100%" height="100%" frameborder="0"></iframe>
</form>
</td>
</tr>
</table>
</body>
</html>