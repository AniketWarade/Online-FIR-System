<?php include('userlog.php') ?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="..\Online FIR System\col.css">
<link rel="stylesheet" type="text/css" href="..\Online FIR System\Font.css">
</head>
<body>
<table align="center" width="100%" style="border:2px solid blue">
<tr>
<td>
<h2 class="fontset2" align="center">User Login</h2>
<form action="userlog.php" method="post">
<table style="border:2px solid blue" align="center" class="col1">
<tr>
<td class="fontset">User Name:&nbsp;&nbsp;<input type="text" name="UserName"></td>
</tr>
<tr>
<td class="fontset">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="Password"></td> 
</tr>
<tr>
<td><input type="submit" value="Login" name="Login" class="fontset"></input></a></td>
<td><input type="reset" value="Reset" class="fontset"></input></td>
</tr>
<tr>
<td class="fontset"><a href="..\Online FIR System\userforgpass.php"><p align="left">Forgot Password</p></a></td>
<td class="fontset"><a href="..\Online FIR System\Userregister.php"><p align="right">New User</p></a></td>
</tr> 
</table>
</form>
</td>
</tr>
</table>
</body>
</html>