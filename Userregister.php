<?php include('userreg.php') ?>
<html>
<head>
  <title>User Registration Form</title>
  <link rel="stylesheet" type="text/css" href="..\Online FIR System\col.css">
  <link rel="stylesheet" type="text/css" href="..\Online FIR System\Font.css">
  <script src="..\Online FIR System\password.js"></script>
  <script src="..\Online FIR System\phone.js"></script>
  <script src="..\Online FIR System\cityinfo.js"></script>
</head>
<body>
<form method="post" action="userreg.php">
<table align="center" width="100%" style="border:2px solid blue">
<tr>
<td>
<h2 class="fontset2" align="center">User Registration Form</h2>
 <form method="post" action="userreg.php">
 <table style="border:2px solid blue" align="center" class="col1">
   <tr>
    <td class="fontset">First Name:</td>
    <td><input type="text" name="FirstName" required></input></td>
   </tr>
   <tr>
    <td class="fontset">Last Name:</td>
    <td><input type="text" name="LastName" required></input></td>
   </tr>
   <tr>
    <td class="fontset">UserName:</td>
    <td><input type="text" name="UserName" required></input></td>
   </tr>
   <tr>
    <td class="fontset">Password:</td>
    <td><input type="password" id="password" name="Password" required></input></td>
   </tr>
   <tr>
    <td class="fontset">Confirm Password:</td>
    <td><input type="password" id="confirmpassword" onblur="passwordcheck()" required></input></td>
   </tr>
   <tr>
    <td class="fontset">Gender:</td>
    <td>
     <input type="radio" name="Gender" value="Male" required>Male</input>
     <input type="radio" name="Gender" value="Female" required>Female</input>
    </td>
   </tr>
   <tr>
    <td class="fontset">Address:</td>
    <td><textarea type="text" name="Address" required></textarea></td>
   </tr>
   <tr>
    <td class="fontset">District:</td>
    <td><select id="District" name="District" style="width: 180px" onchange="cit(this.id,'City')"> 
		<option>Select</option>
		<option value="Ahmednagar">Ahmednagar</option>
		<option value="Aurangabad">Aurangabad</option>
      <option value="Beed">Beed</option>
      <option value="Jalgaon">Jalgaon</option>
      <option value="Nagpur City">Nagpur City</option>
      <option value="Nashik City">Nashik City</option>
      <option value="Navi Mumbai">Navi Mumbai</option>
      <option value="Pune City">Pune City</option>
      <option value="Raigad">Raigad</option> 
      <option value="Thane City">Thane City</option>
		</select></td>
   </tr>
   <tr>
    <td class="fontset">City:</td>
    <td><select id="City" name="City" style="width: 180px"> 
		</select></td>
    </tr>
    <tr>
    <td class="fontset">Occupation:</td>
    <td><input type="text" name="Occupation"> </td>
    </tr>
   <tr>
    <td class="fontset">Date Of Birth:</td>
    <td><input type="date" name="DOB" required></input></td>
   </tr>
   <tr>
    <td class="fontset">Email:</td>
    <td><input type="email" name="Email" required></input></td>
   </tr> 
   <tr>
    <td class="fontset">Phone no:</td>
    <td>
     <input type="number" id="phone" name="Phone" onKeyDown="if(this.value.length==10){ return false }" onclick="this.value=''" onblur="phonenocheck()" required></input>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit" class="fontset"></input></td>
   <td><input type="reset" value="Reset" class="fontset"></input></td>
   </tr>
  </table>
 </form>
</td>
  </tr>
</table>
 </form>
</body>
</html>