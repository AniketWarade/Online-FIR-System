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


if(isset($_POST['GetPassword']))
{
$User = $_POST['UserName'];
$E = $_POST['myEmail'];
$sql = "SELECT * FROM userregister where UserName = '$User' and Email = '$E'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $from = "aniketwara82@gmail.com";
        $subject = "Forgot Password";
        $to = $row["Email"];
        $msg = "Hi ".$row["FirstName"].",\r\nYour UserName: ".$row["UserName"]."\r\nPassword: ".$row["Password"];
        $headers = "To: $to";
        $retval = mail ($from,$subject,$msg,$headers);
                 if( $retval == true ) 
                 {
                    echo "<script>alert('Check your Password in Email. Email sent successfully...')</script>";
                    $url='..\Online FIR System\Userlogin.php';
		            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                 }else 
                 {
                    echo "<script>alert('Email not sent...')</script>";
                    $url='..\Online FIR System\userforgpass.php';
		            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                 }
    } 
} 
else 
{
    echo "<script>alert('0 Results...')</script>";
    $url='..\Online FIR System\userforgpass.php';
	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
}
?>
