<!DOCTYPE html>
<?php 
session_start();
include("../login/connE.php");
if(isset($_POST['create']))
{
$targetDir = "uploads/";
$id=$_SESSION['id'];
$name=$_SESSION['student'];
$uname=$_POST['name'];
$fname=$_POST['fname'];
$foc=$_POST['foc'];
$mname=$_POST['mname'];
$moc=$_POST['moc'];
$in=$_POST['in'];
$cname=$_POST['cname'];
$addr=$_POST['addr'];
$app=$_POST['app'];
$semfee=$_POST['semfee'];
$error=array();
if(empty($uname)){
$error['ac']="Enter Firstname";
}
elseif (empty($fname)) {
$error['ac']="Enter lastname";
}
elseif (empty($foc)) {
$error['ac']="Enter Username";
}
elseif (empty($mname)) {
$error['ac']="Enter Firstname";
}
elseif (empty($moc)) {
$error['ac']="Confirm password must be same as password";
}
elseif (empty($in)) {
$error['ac']="Enter Course";
}
elseif (empty($cname)) {
$error['ac']="Enter place";
}
elseif (empty($addr)) {
$error['ac']="Enter place";
}
elseif (empty($app)) {
$error['ac']="Enter place";
}
elseif (empty($semfee)) {
$error['ac']="Enter place";
}
if(count($error)==0){ 
$query="INSERT INTO student_registration(SID,Name,Fathername 
,Occupation,Mothername,moccupation, 
annualincome,collegename,collegeaddr,applicationno,semfee) VALUES 
('".$id."','".$name."','".$fname."','".$foc."','".$mname."','".$moc."','".$in."','".$cname."','".$addr."','
".$app."','".$semfee."')";
$res=$con->query($query);
$sslc = basename($_FILES['sslc']['name']);
$sslcpath = $targetDir.$sslc;
$sslctype = pathinfo($sslcpath,PATHINFO_EXTENSION);
$hsc = basename($_FILES['hsc']['name']);
$hscpath = $targetDir.$hsc;
$hsctype = pathinfo($hscpath,PATHINFO_EXTENSION);
$fees = basename($_FILES['fees']['name']);
$feespath = $targetDir.$fees;
$feestype = pathinfo($feespath,PATHINFO_EXTENSION);
if(move_uploaded_file($_FILES['sslc']['tmp_name'],$sslcpath))
{
$up = $con->query("UPDATE student_registration SET sslcms = NOW() 
WHERE SID = '".$id."'");
}
if(move_uploaded_file($_FILES['hsc']['tmp_name'],$hscpath))
{
$up = $con->query("UPDATE student_registration SET hscms = NOW() 
WHERE SID = '".$id."'");
}
if(move_uploaded_file($_FILES['fees']['tmp_name'],$feespath))
{
$up = $con->query("UPDATE student_registration SET feesstructure = 
NOW() WHERE SID = '".$id."'");
}
if($res){
header('Location:../student/finddonor.php');
}
else{
$er = "Error: ".$query."<br>".$con->error;
echo $er;
}
}
}
?>
<html>
<head>
<title>Student Application</title>
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
<h5 class="text-center my-3">Application form</h5>
<form method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter Student Name">
</div>
<div class="form-group">
<label>Father Name</label>
<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Father Name">
</div>
<div class="form-group">
<label>Occupation</label>
<input type="text" name="foc" class="form-control" autocomplete="off" placeholder="Enter Fathers' Occupation">
</div>
<div class="form-group">
<label>Mother name</label>
<input type="text" name="mname" class="form-control" autocomplete="off" placeholder="Enter Your Mother's Name">
</div>
<div class="form-group">
<label>Occupation</label>
<input type="text" name="moc" class="form-control" autocomplete="off" placeholder="Enter Your Mother's Occupation">
</div>
<div class="form-group">
<label>Aunnal Income</label>
<input type="text" name="in" class="form-control"  
autocomplete="off" placeholder ="Enter your family's income">
</div>
<div class="form-group">
<label>SSLC PERCENTAGE</label>
<input type="text" name="sslc" class="form-control" autocomplete="off" placeholder="Enter Your SSLC Percentage">
</div>
<div class="form-group">
<label>HSC PERCENTAGE</label>
<input type="text" name="hsc" class="form-control" autocomplete="off" placeholder="Enter Your HSC Percentage">
</div>
<div class="form-group">
<label>College name</label>
<input type="text" name="cname" class="form-control" autocomplete="off" placeholder="Enter Your College Name">
</div>
<div class="form-group">
<label>College addr</label>
<input type="text" name="addr" class="form-control" autocomplete="off" placeholder="Enter Your College Address">
</div>
<div class="form-group">
<label>Application no</label>
<input type="text" name="app" class="form-control" autocomplete="off" placeholder="Enter Your College Application No">
</div>
<div class="form-group">
<label>Total Fees per year</label>
<input type="text" name="fees" class="form-control" autocomplete="off" placeholder="Enter Total fee per year">
</div>
<div class="form-group">
<label>Tution Fee per Semster</label>
<input type="text" name="semfee" class="form-control" autocomplete="off" placeholder="Enter Tution fee per Semester">
</div>
<input type="submit" name="create" class="btn btn-success my-3" value="Create Account">
</form>
 
</div>
<div class="col-md-3"></div>
</div>
</div>
</div>
</body>
</html>
