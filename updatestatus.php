<?php
   $con = mysqli_connect("localhost","id6844970_aniket","aniket")or die("not connected");
mysqli_select_db($con,"id6844970_onlinefirsystem")or die("no db found");
if($con)
{
}
else
{echo "error";
}
if(isset($_POST['Update']))
{
    try
    {
        $pdoConnect  = new PDO("mysql:host=localhost; dbname=id6844970_onlinefirsystem", "id6844970_aniket", "aniket");
    }
    catch(PDOException $e)
    {
         echo $e->getTraceAsString();
    }
    $FIRNumber=$_POST['FIRNumber'];
	$Status = $_POST['Status'];
	$Report = $_POST['Report'];
    $sql = "UPDATE `firregister` SET `Status`=:Status, `Report`=:Report WHERE `FIRNumber`=:FIRNumber";
    $pdoResult = $pdoConnect->prepare($sql);
    $pdoExec = $pdoResult->execute(array(":Status"=>$Status, ":Report"=>$Report, ":FIRNumber"=>$FIRNumber));
    if($pdoExec)
    {
        
    }
    else
    {
        echo "Error Data Not Updated";
    }
 /*  if (mysqli_query($con, $sql))  
   {
     echo "<script>alert ('Record updated successfully'); </script>";
	  $url='..\Online FIR System\Newcomplaints.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
   }
   else
   {
     echo "<script>alert ('Error updating record'); </script>";
 $url='..\Online FIR System\Newcomplaints.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
   }*/
}

?>