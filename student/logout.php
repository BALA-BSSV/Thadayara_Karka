<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php 
session_start();
// include("../login/index.php");
if(isset($_SESSION['student'])){
unset($_SESSION['student']);
session_destroy();
header("Location:../login/index.php");
}
?>
</body>
</html>