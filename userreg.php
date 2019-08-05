<?php
   $con = mysqli_connect("localhost","id6844970_aniket","aniket")or die("not connected");
mysqli_select_db($con,"id6844970_onlinefirsystem")or die("no db found");
if($con)
{
}
else
{echo "error";
}
if(isset($_POST['submit']))
{
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	$Gender = $_POST['Gender'];
	$Address = $_POST['Address'];
	$District = $_POST['District'];
	$City = $_POST['City'];
	$Occupation = $_POST['Occupation'];
	$DOB = $_POST['DOB'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
    $sql = "INSERT INTO userregister(FirstName,LastName,UserName,Password,Gender,Address,District,City,Occupation,DOB,Email,Phone) VALUES ('$FirstName','$LastName','$UserName','$Password','$Gender','$Address','$District','$City','$Occupation','$DOB','$Email','$Phone')";

   if (!mysqli_query($con,$sql))
   {
     echo "<script>alert ('not inserted'); </script>";
	  $url='..\Online FIR System\Userregister.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
   }
   else
   {
     echo "<script>alert ('inserted'); </script>";
 $url='..\Online FIR System\Userregister.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
   }
}

?>