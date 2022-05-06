<!DOCTYPE html>
<?php 
session_start();
include("../login/connE.php");
$sql = "SELECT * FROM donor_details";
$res = $con->query($sql);
$num = mysqli_num_rows($res)+1;
if(isset($_POST['create'])){
$id="D".$num;
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
$phone=$_POST['phone'];
$state =$_POST['st'];
$district=$_POST['dis'];
$city=$_POST['city'];
$pincode=$_POST['pin'];
$addr=$_POST['add'];
$occu=$_POST['occ'];
$anualin=$_POST['in'];
$company=$_POST['w'];
$offaddr=$_POST['waddr'];
$sti=$_POST['amt'];
$info=$_POST['info'];
$error=array();
if(empty($fname)){
$error['ac']="Enter Firstname";
}
elseif (empty($lname)) {
$error['ac']="Enter Surname";
}
elseif (empty($email)) {
$error['ac']="Enter email";
}
elseif (empty($password)) {
$error['ac']="Enter Username";
}
elseif (empty($cpassword)) {
$error['ac']="Enter Username";
}
elseif (empty($phone)) {
$error['ac']="Enter Phone";
}
elseif (empty($state)) {
$error['ac']="Select gender";
}
elseif (empty($district)) {
$error['ac']="Select country";
}
elseif (empty($city)) {
$error['ac']="Enter Username";
}
elseif (empty($pincode)) {
$error['ac']="Enter Username";
}
elseif (empty($addr)) {
$error['ac']="Enter Password";
}
elseif (empty($occu)) {
$error['ac']="Enter Conform Password";
}
elseif (empty($anualin)) {
$error['ac']="Enter Username";
}
elseif (empty($company)) {
$error['ac']="Enter Username";
}
elseif (empty($offaddr)) {
$error['ac']="Enter Username";
}
elseif (empty($sti)) {
$error['ac']="Enter Username";
}
elseif (empty($info)) {
$error['ac']="Enter Username";
}
elseif ($cpassword!=$password) {
$error['ac']="Both password do not match";
}
if(count($error)==0){
$query="INSERT INTO donor_details(DID, firstname, lastname, email, 
password, state, district, city, pincode, address, contact, occupation, annualincome, company, 
offaddr, stipend, info) VALUES ('".$id."','".$fname."','".$lname."','".$email."','".$password."','".$state."','".$district."','".$city."','".$pincode."','".$addr."','".$phone."','".$occu."','".$anualin."','".$company."','".$offaddr."','".$sti."','".
$info."');";
$res=mysqli_query($con,$query);
if($res){
header('Location:../donar/login.php');
}
else{
echo "Error: ".$query."<br>".$con->error;
}
}
$error = array();
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
<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter First Name">
</div>
<div class="form-group">
<label>Last Name</label>
<input type="text" name="lname" class="form-control" autocomplete="off" placeholder="Enter Last Name">
</div>
<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter E-mail Address">
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
<label>Address</label>
<input type="text" name="add" class="form-control" autocomplete="off" placeholder="Enter Your Address">
</div>
<div class="form-group">
<label>City</label>
<input type="text" name="city" class="form-control" autocomplete="off" placeholder="Enter Your City">
</div>
<div class="form-group">
<label>District</label>
<input type="text" name="dis" class="form-control" autocomplete="off" placeholder="Enter Your District">
</div>
<div class="form-group">
<label>State</label>
<input type="text" name="st" class="form-control" 
autocomplete="off" placeholder="Enter Your State">
</div>
<div class="form-group">
<label>Pincode</label>
<input type="text" name="pin" class="form-control" autocomplete="off" placeholder="Enter Your Pincode">
</div>
<div class="form-group">
<label>Phone</label>
<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
</div>
<div class="form-group">
<label>Occupation</label>
<input type="text" name="occ" class="form-control" autocomplete="off" placeholder="Enter Occupation">
</div>
<div class="form-group">
<label>Annual Income</label>
<input type="text" name="in" class="form-control" 
autocomplete="off" placeholder="Enter Annual Income">
</div>
<div class="form-group">
<label>Work Place name</label>
<input type="text" name="w" class="form-control" 
autocomplete="off" placeholder="Enter Your Work place name">
</div>
<div class="form-group">
<label>Work Place Address with contact</label>
<input type="text" name="waddr" class="form-control" autocomplete="off" placeholder="Enter Your Work place address">
</div><div class="form-group">
<label>Stipend per year</label>
<input type="text" name="amt" class="form-control" autocomplete="off" placeholder="How much you can contribute per year">
</div>
<div class="form-group">
<label>Do you want to specify your candidate list? 
if yes, Mention the critiria!!</label>
<input type="text" name="info" class="form-control" autocomplete="off" placeholder="Enter Critria">
</div>
<input type="submit" name="create" class="btn btn-success my-3" value="Create Account">
<p style="font-size:20px"><b >I already have an 
account</b><a href="../donar/login.php" ><kbd class="text text-info">Click 
here.</kbd></a></p>
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