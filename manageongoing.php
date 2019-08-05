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

echo "<style> .tab{ border: 2px solid black; background-color: white; font-style: Times New Roman; font-size: 16px;}</style><br><br><table align='center' class='tab'><tr class='tab'><th class='tab'>FIR Number</th><th class='tab'>FIR Type</th><th class='tab'>Complainer Name</th><th class='tab'>Phone</th><th class='tab'>District</th><th class='tab'>City</th><th class='tab'>Police Station</th><th class='tab'>Address</th><th class='tab'>Crime Date</th><th class='tab'>Crime Time</th><th class='tab'>Crime Location</th><th class='tab'>Crime Description</th><th class='tab'>Status</th><th class='tab'>Report</th></tr>";
$sql = "SELECT FIRNumber,FIRType,ComplainerName,Phone,District,City,PoliceStation,Address,CrimeDate,CrimeTime,CrimeLocation,CrimeDescription,Status,Report FROM firregister where Status='OnGoing'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr class='tab'><td class='tab'>" . $row["FIRNumber"]. "</td><td class='tab'>" . $row["FIRType"]. "</td><td class='tab'>" . $row["ComplainerName"]. "</td><td class='tab'>" . $row["Phone"]. "</td><td class='tab'>" . $row["District"]. "</td><td class='tab'> " . $row["City"]. "</td><td class='tab'>" . $row["PoliceStation"]. "</td><td class='tab'>" . $row["Address"]. "</td><td class='tab'>"
        .$row["CrimeDate"]. "</td><td class='tab'> " . $row["CrimeTime"]. "</td><td class='tab'>" . $row["CrimeLocation"]. "</td><td class='tab'>".$row["CrimeDescription"]. "</td><td class='tab'> " . $row["Status"]. "</td><td class='tab'>" . $row["Report"]. "</td></tr>";

    } 

    echo "</table><br><br>";
} else 
{
    echo "0 results";
}

function getSelect()
{   
    $Sel = array();
    $Sel[0] = $_POST['FIRNumber'];
    return $Sel;
}

if(isset($_POST['Find']))
{
    $data = getSelect();
    $find_Query = "SELECT * from firregister where FIRNumber = $data[0]";
    $find_Result = mysqli_query($con,$find_Query);
    if($find_Result)
    {
        if(mysqli_num_rows($find_Result))
        {
            while($rows = mysqli_fetch_array($find_Result))
            {
                $FIRNumber = $rows['FIRNumber'];
                $FIRType = $rows['FIRType'];
                $ComplainerName = $rows['ComplainerName'];
                $Phone = $rows['Phone'];
                $District = $rows['District'];
                $City = $rows['City'];
                $PoliceStation = $rows['PoliceStation'];
                $Address = $rows['Address'];
                $CrimeDate = $rows['CrimeDate'];
                $CrimeTime = $rows['CrimeTime'];
                $CrimeLocation = $rows['CrimeLocation'];
                $CrimeDescription = $rows['CrimeDescription'];
            }
        }
        else
        {
            echo "<script>alert('No OnGoing Complaint of this FIR Number');<script>";
        }
    }
    else
    {
        echo "<script>alert('No OnGoing Complaint of this FIR Number');<script>";
    }
    
}

$con->close();

?>