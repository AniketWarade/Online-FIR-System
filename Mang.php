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
<h2 align="left" class="fontset2">Manage Complaints</h2>
<form> 
<table align="left">
<tr>
<td class="fontset"><input type="button" id="New Complaints" name="New Complaints" value="New Complaints" onclick="newcomplaints()" class="fontset">
</td>
</tr>
<tr>
<td class="fontset"><input type="button" id="Ongoing Complaints" name="Ongoing Complaints" value="Ongoing Complaints" onclick="ongoingcomplaints()" class="fontset">
</td>
</tr>
<tr>
<td class="fontset"><input type="button" id="Solved Complaints" name="Solved Complaints" value="Solved Complaints" onclick="solvedcomplaints()" class="fontset">
</td>
</tr>
</table>