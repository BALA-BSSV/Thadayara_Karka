<!DOCTYPE html>
<?php 
session_start();
include("../login/connE.php");
$sql = "SELECT * FROM student_signup";
$res = $con->query($sql);
$num = mysqli_num_rows($res)+1;
if(isset($_POST['create'])){
$id="S".$num;
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$course=$_POST['course'];
$ins=$_POST['ins'];
$place=$_POST['place'];
$error=array();
if(empty($fname)){
$error['ac']="Enter Firstname";
}
elseif (empty($lname)) {
$error['ac']="Enter lastname";
}
elseif (empty($uname)) {
$error['ac']="Enter Username";
}
elseif (empty($pass)) {
$error['ac']="Enter Firstname";
}
elseif (empty($cpass)) {
$error['ac']="Confirm password must be same as password";
}
elseif (empty($course)) {
$error['ac']="Enter Course";
}
elseif (empty($ins)) {
    $error['ac']="Enter Institution";
    }
    elseif (empty($place)) {
    $error['ac']="Enter place";
    }
    if(count($error)==0){
    $query="INSERT INTO student_signup(SID, firstname, lastname, username, 
    password, course, institution,place) VALUES 
    ('".$id."','".$fname."','".$lname."','".$uname."','".$pass."','".$course."','".$ins."','".$place."')";
    $res=mysqli_query($con,$query);
    if($res){
    header('Location:../student/login.php');
    }
    else{
    echo "<script>alert('failed')</script>";
    }
    }
    }
    ?>
    <html>
    <head>
    <title>Create Account</title>
    </head>
    <body>
    <?php 
include("../login/header.php");
?>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 my-5 jumbotron">
<h5 class="text-center my-3">Create Account</h5>
<form method="post">
<div class="form-group">
<label>First name</label>
<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter First name">
</div>
<div class="form-group">
<label>Last Name</label>
<input type="text" name="lname" class="form-control" autocomplete="off" placeholder="Enter last name">
</div>
<div class="form-group">
<label>Username</label>
<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Student Name">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Your Password">
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="cpass" 
class="form-control" autocomplete="off" placeholder="Enter Your Password">
</div>
<div class="form-group">
<label>Course</label>
<input type="text" name="course" class="form-control" autocomplete="off">
</div>
<div class="form-group">
<label>Institution</label>
<input type="text" name="ins" class="form-control" autocomplete="off" placeholder="Enter Your Institution name">
</div>
<div class="form-group">
<label>Place</label>
<input type="text" name="place" class="form-control" autocomplete="off" placeholder="Enter Your Institution location">
</div>
<input type="submit" name="create" class="btn btn-success my-3" value="Create Account">
<p><b>I already have an account</b><a 
href="../student/login.php" ><kbd class="text text-info">Click here.</kbd></a></p>
</form>
 <code style="font-size: 25px">&it;&gt;If you already have an account directly go to 
the login page&it;&gt;</code>
</div>
<div class="col-md-3"></div>
</div>
</div>
</div>
</body>
</html>


    
