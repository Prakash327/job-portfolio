<?php
    include ("connect.php");

        $Company_Name = $_POST['cname'];
        $Location = $_POST['location'];
        $Contact = $_POST['contact'];
        $Email = $_POST['email'];
        $Candidate_Required =$_POST['candidate'];
        $Skill = $_POST['jtype'];
        $Age = $_POST['age'];
        $Experience = $_POST['experience'];

        $sql = "INSERT INTO resume (company_name,location,contact,email, Required_Candidate_For,required_skill,age,experience) VALUES( 
            '$Company_Name',
            '$Location',
            '$Contact' ,
            '$Email',
            '$Candidate_Required',
            '$Skill',
            '$Age',
            '$Experience')";
        $result = mysqli_query($conn,$sql);
        if($result){
    
            header('location:index.php');
         }
        


?>