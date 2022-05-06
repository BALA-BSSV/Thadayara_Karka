<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>
</head>
<body>
<?php 
include("../login/header.php");
include("../login/connE.php");
?>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-2" style="margin-left: -20px">
<?php 
include("sidenav.php"); 
?>
</div>
<div class="col-md-10">
<h4 class="my-2">Student Dashboard</h4>
<div class="col-md-12 my-1">
<div class="row">
<div class="col-md-3 bg-success mx-2" 
style="height: 130px">
<div class="col-md-12">
<?php
//$ad=mysqli_query($conn,"SELECT * FROM admin");
//$num=mysqli_num_rows($ad);
?>
<div class="row">
<div class="col-md-8">
<h5 class="text-white">Entrance </h5> <h5 class="text-white">Exams</h5>
</div>
<div class="col-md-4">
<a 
href="../student/dispEntranceExam.php"><i class="fa fa-book-open fa-3x my-4" style="color: 
white"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-3 bg-info mx-2" style="height: 
130px">
<div class="col-md-12">
<div class="row">
<div class="col-md-8"> 
<h5 class=" my-2 
text-white text-center">
</h5>
<h5 class="text-white">Find</h5> <h5 class="text-white">Donars</h5>
</div>
<div class="col-md-4">
<a 
href="finddonor.php"><i class="fa fa-user-md fa-3x my-4" style="color: white"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-3 bg-warning mx-2" 
style="height: 130px">
<div class="col-md-12">
<div class="row">
<div class="col-md-8">
<h5 class="text-white">Foundation</h5> <h5 class="text-white">Details</h5>
</div>
<div class="col-md-4">
<a 
href="../student/trust.php"><i class="fa fa-procedures fa-3x my-4" style="color: 
white"></i></a>
</div>
</div>
</div>
</div>
<div style="width: 100%;height: 20px">
</div>
<div class="col-md-3 bg-warning mx-2" 
style="height: 130px">
<div class="col-md-12">
<div class="row">
<div class="col-md-8">
<h5 class="text-white">Government</h5> <h5 class="text-white">Schemes</h5>
</div>
<div class="col-md-4">
<a 
href="../student/schemes.php"><i class="fa fa-procedures fa-3x my-4" style="color: 
white"></i></a>
</div>
</div>
</div>
 </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>


