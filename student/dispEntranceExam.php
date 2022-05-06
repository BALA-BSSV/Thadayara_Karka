<?php session_start(); ?>
<!DOCTYPE html> 
<html>
<head><title>Entrance Exams | Thadaiyara karkka</title></head>
<style type='text/css'>
.dropdown
{
color: 'white';
background-color: '#eee';
margin: '100px';
}
</style>
<body style="background-color:#a5e1ad;">
<?php 
include("../login/header.php");
include("../login/connE.php");
?>
<div class="dropdwon" align="center">
<br><br><br>
<form action="dispEntranceExam.php" method="POST">
Select Course:<select name="course">
<option value="">Choose Course</option>
<option value="B.Tech">Engineering and Technology</option>
<option value="M.B.B.S">MBBS/BDS/Sidha/Veterinary</option>
<option value="B.Sc">B.Sc/M.Sc Courses</option>
<option value="B.A">B.A/M.A Courses</option>
<option value="LLB">Law</option>
<option value="B.Des">Design</option>
<option value="ARMY">ARMY/NAVY/AIRFORCE</option>
<option value="B.Arch">Architecture</option>
<option value="B.Ed">B.Ed</option>
<option value="Chartered Accountant">Chartered Accountant</option>
</select>
<input type="submit" name ="submit" value="Search" align="center"/>
</form><br><br><br>
</div>
<?php
if(isset($_POST['submit']))
{
if(!empty($_POST['course']))
{
$ans = $_POST['course'];
if($ans=='B.Tech')
{
$sql = "SELECT * from entrance_exam WHERE POSITION('B.E' IN course)>0 OR POSITION('B.Tech' IN course)>0";
}
else if($ans == 'M.B.B.S')
{
$sql = "SELECT * from entrance_exam WHERE POSITION('M.B.B.S' IN course)>0 OR POSITION('BS-MS' IN course)>0 OR POSITION('B.V.Sc' IN course)>0 OR POSITION('B.D.S' IN course)>0";
}
else if($ans == 'B.Sc')
{
$sql = "SELECT * from entrance_exam WHERE POSITION('B.Sc' IN course)>0 OR POSITION('M.Sc' IN course)>0";
}
else if($ans == 'B.A ')
{
$sql = "SELECT * from entrance_exam WHERE POSITION('B.A' IN course)>0 OR POSITION('M.A' IN course)>0";
}
else
{
$sql = "SELECT * from entrance_exam WHERE POSITION('".$ans."' IN course)>0";
}
$no=1;
echo "<table class='table thead-light table-primary' align='center'>";
echo "<tr>";
echo "<th>S.no</th>";
echo "<th> Exam Name </th>";
echo "<th> Courses </th>";
echo "<th> Colleges </th>";
echo "<th> Course Duration </th>";
echo "<th> Website </th>";
echo "</tr>";
if($result = $con->query($sql))
{
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>".$no."</td>";
echo "<td>".$row['examname']."</td>";
echo "<td>".$row['course']."</td>";
echo "<td>".$row['college']."</td>";
echo "<td>".$row['duration']."</td>";
echo "<td>".$row['website']."</td>";
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
}
}
else
{
header("refresh: 600;");
}
?>
</body>
</html>
