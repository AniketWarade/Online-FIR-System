<?php include("policeforgot.php") ?>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" type="text/css" href="..\Online FIR System\col.css">
<link rel="stylesheet" type="text/css" href="..\Online FIR System\Font.css">
</head>
<body>
<table align="center" width="100%" style="border:2px solid blue">
<tr>
<td>
<h2 class="fontset2" align="center">Forgot Password</h2>
<form action="policeforgot.php" method="post">
<table style="border:2px solid blue" align="center" class="col1">
<tr>
<td class="fontset">User Name:&nbsp;&nbsp;<input type="text" name="UserName"></td>
</tr>
<tr>
<td class="fontset">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="myEmail"></td> 
</tr>
<tr>
<td><input type="submit" value="Get Password" name="GetPassword" class="fontset"></input></a></td>
<td><input type="reset" value="Reset" class="fontset"></input></td>
</tr> 
</table>
</form>
</td>
</tr>
</table>
</body>
</html>