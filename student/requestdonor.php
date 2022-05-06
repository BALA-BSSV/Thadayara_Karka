<!DOCTYPE html5>
<html>
<head>
<title>Send Request </title>
</head>
<body style="background-color: #caf7e3;">
<?php
session_start();
include("../login/header.php");
include("../login/connE.php");
?>
<table align = 'center' border='1' class='table thead-light table-primay'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Contact</th>
<th>Occupation</th>
<th>Stipend</th>
<th>NOTE</th>
<th>Send Request</th>
</tr>
<?php
$sql = "SELECT * FROM donor_details";
if($result = $con->query($sql))
{
$id=$_SESSION['id'];
while($row=$result->fetch_assoc())
{
$did = $row['DID'];
echo "<tr>";
echo "<td>".$row['Firstname']." ".$row['lastname']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['address']."<br>".$row['city']."<br>".$row['district']."<br>".$row['pincode']."</td>";
echo "<td>".$row['contact']."</td>";
echo "<td>".$row['occupation']."</td>";
echo "<td>".$row['stipend']."</td>";
echo "<td>".$row['info']."</td>";
echo "<td>
<form action = 'insertreq.php' method='POST' id=".$did.">
<input type='hidden' name='sname' value='".$id."'/>
<input type='hidden' name='dname' value='".$did."'/>
<button class='btn btn-outline-success' id='demo' name ='".$id."submit' 
onclick=document.getElementById('demo').style.color='red';
document.getElementById('demo').innerHTML='Request Sent'>Send 
Request</button></td>
</form>";
}
$result->free();
echo "</body></html>";
}
?>
</table>
<script>
function myfunction(id)
{
}
</script>
</body>
</html>