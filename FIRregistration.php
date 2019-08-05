<?php include('firreg.php')?>
<html>
<head>
  <title>FIR REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="..\Online FIR System\col.css">
  <link rel="stylesheet" type="text/css" href="..\Online FIR System\Font.css">
  <script src="..\Online FIR System\cityinfo.js"></script>
  <script src="..\Online FIR System\polinfo.js"></script>
  <script src="..\Online FIR System\type.js"></script>
  <script src="..\Online FIR System\phone.js"></script>
</head>
<body> 
<form method="post" action="firreg.php">
<table align="center" width="100%">
<tr>
<td><h2 align="center" class="fontset2">FIR Registration Form</h2> 
 <div>
  <table style="border:2px solid blue" align="center" class="col1">
  <tr>
<td>
<p align="center" class="fontset">FIR Number:
<?php
$con = mysqli_connect("localhost","id6844970_aniket","aniket")or die("not connected");
mysqli_select_db($con,"id6844970_onlinefirsystem")or die("no db found");
if($con)
{
    
}
else
{
    echo "error";
}

   $find_Query = "SELECT * from firregister";
    $find_Result = mysqli_query($con,$find_Query);
    if($find_Result)
    {
        if(mysqli_num_rows($find_Result))
        {
            while($rows = mysqli_fetch_array($find_Result))
            {
                $FIRN = $rows['FIRNumber'];
                $FIRNo =$FIRN + 1;
            }
        }
    }
    print $FIRNo;
    ?>  
</p></td>
</tr>
 <tr>
<td><p align="center" class="fontset">FIR Type:<input type="text" id="FIRType" name="FIRType"></input>
</p>
<br>
<table align="center" class="col1">
<tr>
 <td ><h3 align="center" class="fontset2">COMPLAINER DETAILS</h3>
 <table align="center" class="col1">
   <tr>
    <td class="fontset">ComplainerName:</td>
    <td><input type="text" name="ComplainerName" required></input></td>
   </tr>
<tr>
    <td class="fontset">Phone no:</td>
    <td><input type="number" name="Phone" id="phone" onKeyDown="if(this.value.length==10){ return false }" onclick="this.value=''" onblur="phonenocheck()" required ></input></td>
   </tr>
   <tr>
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
      <option value="Pune City">Pune City</option>
      <option value="Raigad">Raigad</option> 
      <option value="Thane City">Thane City</option>
		</select></td>
   </tr>
   <tr>
    <td class="fontset">City:</td>
    <td><select id="City" name="City" style="width: 180px" onchange="pol(this.id,'PoliceStation')" > 
		</select></td>
    </tr>
    <tr>
    <td class="fontset">Nearest Police Station:</td>
    <td><select id="PoliceStation" name="PoliceStation" style="width: 180px"> 
		</select></td>
    </tr>
  
   <tr>
    <td class="fontset">Address:</td>
    <td><textarea type="text" name="Address" required></textarea></td>
   </tr>
</div>
</table>
</td>
 </tr>
 </table>
<br><br>
<div>
<table align="center" class="col1">
<tr>
<td><h3 align="center" class="fontset2">CRIME DETAILS</h3>
 <br>
<table align="center" class="col1">
   <tr>
	<td class="fontset">Crime Date:</td>
    <td><input type="date" name="CrimeDate" required></input></td>
   </tr>
   <tr>
    <td class="fontset">Crime Time:</td>
    <td><input type="time" name="CrimeTime" required></input></td>
   </tr>
     
  </div>
</div>
   <tr>
    <td class="fontset">Crime Location:</td>
    <td><input type="text" name="CrimeLocation" required></input></td>
   </tr> 
<tr>
    <td class="fontset">Crime Description:</td>
    <td><input type="text" name="CrimeDescription" required></input></td>
   </tr> 
  </table> 
  </td>
 </tr>
 </table>
  <br>
 <table align="center" class="col1">
   <tr>
    <td><input type="submit" name="Submit" value="Submit" class="fontset"></input></td>
   <td><input type="reset" value="Reset" class="fontset"></input></td>
   </tr>
   </table>
   </td>
</tr>
  </table>
</div>
 </form>
</body>
</html>