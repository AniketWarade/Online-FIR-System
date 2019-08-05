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



if(isset($_POST['Login']))
{	
	$User = mysqli_real_escape_string($con, $_POST['UserName']);
	$Pass = mysqli_real_escape_string($con, $_POST['Password']);
	$sql="Select * from userregister where UserName='$User' AND Password='$Pass'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if($count==1)
	{	
		$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        echo "Hostname: ".$hostname."<br>";
        $ip= gethostbyname($hostname); 
         echo "IP: ".$ip."<br>";
        echo "Date: ".date("d/m/Y")."<br>";
        $d = date("d/m/Y");
        date_default_timezone_set("Asia/Kolkata");
        echo "Time: " . date("h:i:sa"). "<br>";
        $t = date("h:i:sa");
        $s = "INSERT INTO userlogin (UserName, IPAddr, HostName, UserDate, UserTime) VALUES ('$User', '$ip', '$hostname', '$d', '$t')";
        if (mysqli_query($con,$s))
        {
            echo "<script>alert ('!!! Login Successful, We are taking IP address and other details of your device for security purpose !!!'); </script>";
            $url='..\Online FIR System\Selectoption.php';
		    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
        }
	}
	else
	{
		echo "<script>alert ('!!! Login Failed !!!'); </script>";
		$url='..\Online FIR System\Userlogin.php';
		echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
	}
}
?>
