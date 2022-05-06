<?php
session_start();
include("../login/header.php");
include("../login/connE.php");
if(isset($_POST['Accept']))
{
$id = $_SESSION['id'];
$sql = "UPDATE srequest SET status='ACCEPTED' WHERE DID = '".$id."';";
if($con->query($sql)===TRUE)
{
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
header("Location:../donar/index.php");
 echo '</script>';
}
else
{
$er = "Error: ".$sql."<br>".$con->error;
echo $er;
echo '<script language="javascript">';
echo "Request was not sent!! some error!!";
}
}
if(isset($_POST['Reject']))
{
$id = $_SESSION['id'];
$sql = "UPDATE srequest SET status='REJECTED' WHERE DID = '".$id."';";
if($con->query($sql)===TRUE)
{
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
header("Location:../donar/index.php");
 echo '</script>';
}
else
{
$er = "Error: ".$sql."<br>".$con->error;
echo '<script language="javascript">';
echo "Request was not sent!! some error!!";
echo '</script>';
}
}
?>