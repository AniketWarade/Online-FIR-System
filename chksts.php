<?php
$con = mysqli_connect("localhost","id6844970_aniket","aniket")or die("not connected");
mysqli_select_db($con,"id6844970_onlinefirsystem")or die("no db found");
if($con)
{
    	
}    
else
{
    echo "Error";
}

if(isset($_POST['CheckStatus']))
{
	$Chk = $_POST['FIRnumber'];
	$sql="Select * from firregister where FirNumber = '$Chk'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	$sqln="Select * from firregister where FirNumber = '$Chk' AND Status = 'New'";
	$resultn=mysqli_query($con,$sqln);
	$countn=mysqli_num_rows($resultn);
	$sqlo="Select * from firregister where FirNumber = '$Chk' AND Status = 'OnGoing'";
	$resulto=mysqli_query($con,$sqlo);
	$counto=mysqli_num_rows($resulto);
	$sqlc="Select * from firregister where FirNumber = '$Chk' AND Status = 'Closed'";
	$resultc=mysqli_query($con,$sqlc);
	$countc=mysqli_num_rows($resultc);
	if($count==1)
	{	
        if($countn==1)
    	{
    	   if ($resultn->num_rows > 0) 
            {
                while($row = $resultn->fetch_assoc()) 
                {
                    echo "<table><tr><td ><h3>Welcome " .$row["ComplainerName"]. ", </h3></td><td><h3>Your FIR Number is: " .  $row["FIRNumber"]. ", </h3></td><td><h3>FIR Type is: " .$row["FIRType"]. ", </h3></td><td><h3>Status of Complaint is: " .$row["Status"]. ".</h3></td></tr></table>";
            
                } 
            }
        echo "<br><h3>As there are large amount of complaints handled everyday, Your complaint is not yet taken, we are sorry for the inconvenience as we do our best to take fresh complaints within 2 days. Please Check again after sometime else send a mail to onlinefirsystemproj3@gmail.com for immediate response, but your complaint should be 24 hours older from the time you registered your complaint</h3>";
    	}
    	else if($counto==1)
    	{	
            if ($resulto->num_rows > 0) 
            {
                while($row = $resulto->fetch_assoc()) 
                {
                    echo "<table><tr><td><h3>Welcome " .$row["ComplainerName"]. ",</h3></td><td><h3>Your FIR Number is: " .  $row["FIRNumber"]. ",</h3></td><td><h3>FIR Type is: " .$row["FIRType"]. ",</h3></td><td><h3>Status of Complaint is: " .$row["Status"]. "</h3></td></tr></table>";
            
                } 
            }
           echo "<br><h3>Your Complaint is taken. We will inform you as soon as possible.</h3>";
    	}
    	else if($countc==1)
    	{	
    	    if ($resultc->num_rows > 0) 
            {
                while($row = $resultc->fetch_assoc()) 
                {
                    echo "<table><tr><td><h3>Welcome " .$row["ComplainerName"]. ",</h3></td><td><h3>Your FIR Number is: " .  $row["FIRNumber"]. ",</h3></td><td><h3>FIR Type is: " .$row["FIRType"]. ",</h3></td><td><h3>Status of Complaint is: " .$row["Status"]. "</h3></td></tr></table>";
            
                } 
            } 
           echo "<br><h3>Your Complaint has been Resolved. Please visit your nearest Police Station for further details.</h3>";
    	}
	}
	else
	{
		echo "No Such FIR Number !!!";
	}
}
?>