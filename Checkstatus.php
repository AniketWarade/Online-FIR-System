<?php include('chksts.php') ?>
<html>
<head>
<title>Check Status</title>
<link rel="stylesheet" type="text/css" href="..\Online FIR System\col.css">
<link rel="stylesheet" type="text/css" href="..\Online FIR System\Font.css">
</head>
<body>
<table align="center" width="100%" style="border:2px solid blue">
<tr>
<td>
<h2 class="fontset2" align="center">Check Status</h2>
<form action="chksts.php" method="post">
<table style="border:2px solid blue" align="center" class="col1">
<tr>
<td class="fontset">Enter FIR Number:&nbsp;&nbsp;<input type="text" name="FIRnumber"></td>
</tr>
<tr>
<td><input type="submit" value="Check Status" name="CheckStatus" class="fontset"></input></td>
<td><input type="reset" value="Reset" class="fontset"></input></td>
</tr>
<tr>
</table>
</form>
</td>
</tr>
</table>
</body>
</html>