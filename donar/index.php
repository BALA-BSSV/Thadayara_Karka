<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Donar Dashboard</title>
</head>
<body style="background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM5tHcYhnXfOtLXDQpevPP1K-tWtkhFXyD4Q&usqp=CAU);background-repeat:0;background-position: center;" >
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
<h4 class="my-2"><kbd class="text text-warning">Donar 
Dashboard</kbd></h4>
<div class="col-md-12 my-1">
<div class="row">
<!--<div class="col-md-3 bg-dark mx-2" style="height: 
130px">
<div class="col-md-12">
<?php
//$ad=mysqli_query($conn,"SELECT * FROM admin");
//$num=mysqli_num_rows($ad);
?>
<div class="row">
<div class="col-md-8 ">
<h5 class="text-warning">My</h5> <h5 class="text-warning">Profile</h5>
</div>
<div class="col-md-4">
<a 
href="profile.php"><i class="fa fa-user-cog fa-3x my-4" style="color: white"></i></a>
</div>
</div>
</div>
</div>-->

<div class="col-md-3 bg-dark mx-2" style="height: 
130px">
<div class="col-md-12">
<div class="row">
<div class="col-md-8"> 
<h5 class=" my-2 
text-white text-center">
</h5>
<h5 class="text-warning">Student</h5> <h5 class="text-warning">Requests</h5>
</div>
<div class="col-md-4">
<a 
href="../donar/viewrequest.php"><i class="fa fa-book-open fa-3x my-4" style="color: 
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
<div class="container-fluid" style="height: 400px">
<div class="jumbotron" style="background-color:black ;width: 100%">
<div class="container">
<h1 class="text-center">Blog</h1>
<p>1:28:37 AM [Apache] Port 80 in use by "Unable to open process" 
with PID 4!
1:28:37 AM [Apache] Apache WILL NOT start without the configured ports free!
1:28:37 AM [Apache] You need to uninstall/disable/reconfigure the blocking application
1:28:37 AM [Apache] or reconfigure Apache and the Control Panel to listen on a 
different port
1:28:38 AM [Tomcat] Problem detected!
1:28:38 AM [Tomcat] Port 8080 in use by ""C:\xampp\apache\bin\httpd.exe" -k 
runservice"!
1:28:38 AM [Tomcat] Tomcat WILL NOT start without the configured ports free!
1:28:38 AM [Tomcat] You need to uninstall/disable/reconfigure the blocking application
1:28:38 AM [Tomcat] or reconfigure Tomcat and the Control Panel to listen on a 
different port
1:28:38 AM [main] Starting Check-Timer
1:28:38 AM [main] Control Panel Ready
1:39:53 AM [mysql] Attempting to start MySQL app...
1:39:56 AM [mysql] Status change detected: running</p>
92
<button class="btn btn-info btn-lg">Learn More</button>
</div>
</div>
</div>
</body>
</html>
