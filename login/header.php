<!DOCTYPE html>
<html>
<head>
<title>Thadayara Karkka</title>
<link rel="stylesheet" type="text/css" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-
DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" 
crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
<h5 class="text-warning navbar-brand" style="font-size: 40px"><kbd style="color: 
orange;">Thadayara Karkka</kbd></h5>
<div class="mr-auto"></div>
<ul class="navbar-nav">
<?php 
if(isset($_SESSION['student'])){
$user=$_SESSION['student'];
echo '<li class="nav-item"><a href="../student/index.php" class="nav-link text-white">'.$user.'</a></li>
<li class="nav-item"><a href="../student/logout.php" class="nav-link text-white">Logout</a></li>';
}else if (isset($_SESSION['donar'])) {
$user=$_SESSION['donar'];
echo '<li class="nav-item"><a href="../donar/index.php" class="nav-link 
text-white">'.$user.'</a></li>
<li class="nav-item"><a href="../donar/logout.php" class="nav-link text-white">Logout</a></li>';
}
else{
echo '
<li class="nav-item"><a href="../login/index.php" class="nav-link text-warning">Home</a></li>
<li class="nav-item"><a href="../donar/login.php" class="nav-link text-warning">Donar</a></li>
<li class="nav-item"><a href="../student/login.php" class="nav-link text-warning">Student</a></li>
';
}
?>
</ul>
</nav>
</body>
</html>