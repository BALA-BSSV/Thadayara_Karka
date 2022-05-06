<?php
session_start();
include("../login/header.php");
include("../login/connE.php");
$id = $_SESSION['id'];
if(isset($_POST[$id.'submit']))
{
$sid = $_POST['sname'];
$did = $_POST['dname'];
$rid = $sid."".$did;
//$d = date("d-m-y");
$s = "Sent request";
$remar = "No data found";
$sql = "INSERT INTO srequest (reqid,SID,DID,status) VALUES 
('".$rid."','".$sid."','".$did."','".$s."')";
if($con->query($sql)===TRUE)
{
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
 header("Location:../student/finddonor.php");
echo '</script>';
}
else
{
$er = "Error: ".$sql."<br>".$con->error;
echo $er;
echo '<script language="javascript">';
echo "Request was not sent!! some error!!";
 //header("Location:../student/requestdonor.php");
echo '</script>';
}
}
?>