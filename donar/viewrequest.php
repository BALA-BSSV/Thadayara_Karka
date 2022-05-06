<?php
session_start();
include("../login/header.php");
include("../login/connE.php");
$id = $_SESSION['id'];
echo "<div>";
echo "<table align='center' class='table thead-light table-primay'>";
echo "<tr>";
echo "<th>S.no</th>";
echo "<th>Name</th>";
echo "<th>Father name</th>";
echo "<th> Occupation </th>";
echo "<th> Mother name </th>";
echo "<th> Mother Occupation </th>";
echo "<th>Annual Income </th>";
echo "<th> College name </th>";
echo "<th> Application no </th>";
echo "<th> Course </th>";
echo "<th> Fees per semester </th>";
echo "<th> Application status</th>";
echo "<th> Accept/Reject </th>";
echo "</tr>";
$sql = "SELECT S.*,P.*,R.* FROM student_registration S,student_signup P,srequest R WHERE R.DID = R.DID AND R.SID = S.SID AND S.SID = P.SID ;";
$no=1;
if($result = $con->query($sql))
{
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>".$no."</td>";
echo "<td>".$row['Name']." ".$row['lastname']."</td>";
echo "<td>".$row['Fathername']."</td>";
echo "<td>".$row['Occupation']."</td>";
echo "<td>".$row['Mothername']."</td>";
echo "<td>".$row['moccupation']."</td>";
echo "<td>".$row['annualincome']."</td>";
echo "<td>".$row['collegename']."</td>";
echo "<td>".$row['applicationno']."</td>";
echo "<td>".$row['course']."</td>";
echo "<td>".$row['semfee']."</td>";
echo "<td>".$row['status']."</td>";
echo "<td>
<form action = 'accept.php' method='POST' id=".$id.">
<button class='btn btn-outline-success' id='demo' name ='Accept' 
onclick=document.getElementById('demo').style.color='red';
document.getElementById('demo').innerHTML='Request Sent'>Accept</button>
<button class='btn btn-outline-success' id='demo' name ='Reject' 
onclick=document.getElementById('demo').style.color='red';
document.getElementById('demo').innerHTML='Request Sent'>Reject</button>
</form><td>";
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