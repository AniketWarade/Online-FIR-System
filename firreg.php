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
if(isset($_POST['Submit']))
{  
    
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
    $FIRNumber = $FIRNo;
	$FIRType = $_POST['FIRType'];
	$ComplainerName = $_POST['ComplainerName'];
	$Phone = $_POST['Phone'];
	$District = $_POST['District'];
	$City = $_POST['City'];
	$PoliceStation = $_POST['PoliceStation'];
	$Address = $_POST['Address'];
	$CrimeDate = $_POST['CrimeDate'];
	$CrimeTime = $_POST['CrimeTime'];
	$CrimeLocation = $_POST['CrimeLocation'];
	$CrimeDescription = $_POST['CrimeDescription'];
    $sql = "INSERT INTO firregister(FIRNumber,FIRType,ComplainerName,Phone,District,City,PoliceStation,Address,CrimeDate,CrimeTime,CrimeLocation,CrimeDescription) VALUES ('$FIRNumber','$FIRType','$ComplainerName','$Phone','$District','$City','$PoliceStation','$Address','$CrimeDate','$CrimeTime','$CrimeLocation','$CrimeDescription')";

   if (!mysqli_query($con,$sql))
   {
     echo "<script>alert ('not inserted'); </script>";
	  $url='..\Online FIR System\FIRregistration.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
   }
   else
   {
     echo "<script>alert ('inserted'); </script>";
 $url='..\Online FIR System\FIRregistration.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
   }
}

?>