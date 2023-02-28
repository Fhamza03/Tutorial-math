<?php
$conn=mysqli_connect('localhost','root','','contact'); /*or die(mysqli_error());*/
$Email=$_POST['email'];
$Message=$_POST['message'];
$req="INSERT INTO contactus (email,message) values ('$Email','$Message')";
$res=mysqli_query($conn,$req);
if( $req)  {
    header("Location:ContactUs.php");
    }
?>