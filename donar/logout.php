<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php 
session_start();
include("../login/header.php");
if(isset($_SESSION['donar'])){
unset($_SESSION['donar']);
session_destroy();
header("Location:../login/index.php");
}
?>

</body>
</html>