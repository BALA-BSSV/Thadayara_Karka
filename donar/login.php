<?php 
session_start();
?>
<?php 
include("../login/header.php");
?>
<?php 
include("../login/connE.php");
?>
<!DOCTYPE html>
<?php 
if(isset($_POST['login'])){
$uname=$_POST['uname'];
$password=$_POST['pass'];
if (empty($uname)) {
echo "<script>alert('Enter Username')</script>";
echo '<style><div class="alert alert-success ">you successfully loged 
in</div></style>';
}
elseif (empty($password)) {
echo "<script>alert('Enter password')</script>";
}
else if(!empty($uname) && !empty($password)){
$query="SELECT * FROM donor_details WHERE email='".$uname."' AND password='".$password."'";
$res=$con->query($query);
if(mysqli_num_rows($res)>0){
while($r=$res->fetch_assoc())
{
$id = $r['DID'];
}
$_SESSION['donar']=$uname;
$_SESSION['id'] = $id;
echo "<script>alert('hi you login as donar')</script>";
header("Location:../donar/index.php");
exit(); 
}else{
echo "<script>alert('Invalid credintials')</script>";
}
}
}
?>
<html>
<head>
<title>Donar Login Page</title>
</head>
<body>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 my-5 jumbotron">
<h5 class="text-center my-3">Donar Login</h5>
<form action="" method="POST">
<div class="form-group">
<label>Username</label>
<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
</div>
<input type="submit" name="login" class="btn btn-success 
my-3" value="Login">
<a href="../student/index.php">.</a>
<p><b>I dont have an account </b><a href="account.php" 
><kbd class="text text-info">Click here.</kbd></a></p>
</form>
<code>&it;&gt;By clicking Next give your 
details&it;&gt;</code>
</div>
<div class="col-md-3">
</div>
</div>
</div>
</div>
</body>
</html>