<?php include "updatestatus.php" ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="..\Online FIR System\col.css">
  <link rel="stylesheet" type="text/css" href="..\Online FIR System\Font.css">
  
  
  <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("Update").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("Update").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","manageongoing.php",true);
        xmlhttp.send();
    }
}
</script>

</head>
<body> 
<table align="center" width="100%">
<tr><td><?php include "manageongoing.php" ?></td></tr>      
<tr>
<td><h2 align="center" class="fontset2">Update Complaint Records</h2>
<form method="post">   
<table style="border:2px solid blue" align="center" class="col1">
<tr>
<td><p align="center" class="fontset">FIR Number:<input id="firno" name="FIRNumber" value="<?php if(isset($_POST['FIRNumber'])){print $FIRNumber;}else{$FIRNumber="";} ?>"></input></p>
</td>
</tr>
 <tr>
<td><p align="center" class="fontset">FIR Type:<input id="firtype" name="FIRType" value="<?php if(isset($_POST['FIRType'])){print $FIRType;}else{$FIRType="";} ?>" ></input></p>
  <br>
 <table class="col1">
   <tr>
 <td><h3 align="center" class="fontset2">COMPLAINER DETAILS</h3>
 <table align="center" class="col1">
   <tr>
    <td class="fontset">Complainer Name:</td>
    <td><input type="text" name="ComplainerName"  value="<?php if(isset($_POST['ComplainerName'])){print $ComplainerName;}else{$ComplainerName="";} ?>" ></input></td>
   </tr>
<tr>
    <td class="fontset">Phone no:</td>
    <td><input type="phone" name="Phone" value="<?php if(isset($_POST['Phone'])){print $Phone;}else{$Phone="";} ?>" ></input></td>
   </tr>
   <tr>
<tr>
    <td class="fontset">District:</td>
    <td><input type="text" name="District" value="<?php if(isset($_POST['District'])){print $District;}else{$District="";} ?>" ></input></td>
   </tr>
   <tr>
    <td class="fontset">City:</td>
    <td><input type="text" name="City" value="<?php if(isset($_POST['City'])){print $City;}else{$City="";} ?>" ></input></td>
    </tr>
<tr>
    <td class="fontset">Nearest Police Station:</td>
    <td><input type="text" name="PoliceStation" value="<?php if(isset($_POST['PoliceStation'])){print $PoliceStation;}else{$PoliceStation="";} ?>"></input></td>
   </tr>
  
   <tr>
    <td class="fontset">Address:</td>
    <td><input type="textarea" name="Address" value="<?php if(isset($_POST['Address'])){print $Address;}else{$Address="";} ?>" ></input></td>
   </tr>
</table>
</td>
 </tr>
 </table>
<br><br>
<table class="col1">
<tr>
<td><h3 align="center" class="fontset2">CRIME DETAILS</h3>
<br>
</td>
</tr>
   <tr>
	<td class="fontset">Crime Date:</td>
    <td><input type="text" name="CrimeDate" value="<?php if(isset($_POST['CrimeDate'])){print $CrimeDate;}else{$CrimeDate="";} ?>" ></input></td>
   </tr>
   <tr>
    <td class="fontset">Crime Time:</td>
    <td><input type="text" name="CrimeTime" value="<?php if(isset($_POST['CrimeTime'])){print $CrimeTime;}else{$CrimeTime="";} ?>" ></input></td>
   </tr>
   <tr>
    <td class="fontset">Crime Location:</td>
    <td><input type="text" name="CrimeLocation" value="<?php if(isset($_POST['CrimeLocation'])){print $CrimeLocation;}else{$CrimeLocation="";} ?>" ></input></td>
   </tr> 
<tr>
    <td class="fontset">Crime Description:</td>
    <td><input type="text" name="CrimeDescription" value="<?php if(isset($_POST['CrimeDescription'])){print $CrimeDescription;}else{$CrimeDescription="";} ?>" ></input></td>
	 </tr>
   <tr>
    <td class="fontset">Status:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Status">
	<option value="Select Status">Select Status</option>
	<option value="New">New</option>
	<option value="OnGoing">OnGoing</option>
	<option value="Closed">Closed</option>
	</select><td>
   </tr> 
   <tr>
    <td class="fontset">Report:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea type="text" name="Report"></textarea></td>
   </tr> 
  </table> 
  </td>
 </tr>
 <tr>
    <td><br><input type="submit" name="Find" value="Find" class="fontset"></input></td>
    <td><br><input type="submit" id="Update" name="Update" value="Update" class="fontset"></input></td>
   <td><br><input type="reset" value="Reset" class="fontset"></input></td>
   </tr>
 </table>
   </td>
</tr>
  </table>
 </form>
</body>
</html>