<?php
session_start();
include("../login/header.php");
include("../login/connE.php");
$id = $_SESSION['id'];
echo "<div>";
echo "<table align='center' class='table thead-light table-primay'>";
echo "<tr>";
echo "<th>S.no</th>";
echo "<th>Donor name</th>";
//echo "<th>requested date</th>";
echo "<th> status </th>";
echo "</tr>";
$sql = "SELECT D.*,R.* FROM donor_details D INNER JOIN srequest R ON D.DID = R.DID 
WHERE R.SID = '".$id."';";
$no=1;
if($result = $con->query($sql))
{
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>".$no."</td>";
echo "<td>".$row['Firstname']." ".$row['lastname']."</td>";
//echo "<td>".$row['reqdate']."</td>";
echo "<td>".$row['status']."</td>";
echo "</tr>";
$no = $no+1;
}
echo "</table>";
echo "</div>";
$no=1;
$result->free();
$ans ='';
}
else
{
echo "No Exams Availale for the selected course";
}
?>