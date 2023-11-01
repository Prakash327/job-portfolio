
<?php

include 'connect.php';

$first_name = $_POST['fname'];
$last_name = $_POST['lname']; 
$contact_no = $_POST['contact'];
$email = $_POST['email'];
$info = $_POST['info'];
$description = $_POST['description'];

$sql = "INSERT INTO application (firstname ,lastname, contact, email, jobtype, qualification) VALUES( 
    '$first_name',
    '$last_name',
    '$contact_no' ,
    '$email',
    '$info',
    '$description')";
$result = mysqli_query($conn,$sql);
 
if($result){
    
    header('location:index.php');
 }


?>