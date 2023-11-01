
<?php

include 'dbcon.php';

$username = $_POST["username"];
$email = $_POST['email'];
$password = $_POST["password"];
$Cpassword = $_POST["password2"];

$sql = "INSERT INTO entries(username , email, password,conformpassword) VALUES( '$username',
'$email',
'$password' ,
'$Cpassword')";
$result = mysqli_query($conn,$sql);
 
if($result){
    
    header('location:index.php');
 }


?>