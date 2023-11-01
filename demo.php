<?php
require_once 'connect.php';
$UP = "SELECT * FROM resume order by Required_Candidate_For asc";
$all_resume = $conn->query($UP);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jobs</title>

        <script src="https://kit.fontawesome.com/25ed9725b0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="demo.css">
    </head>
    <body>

        <?php
      while($row = mysqli_fetch_assoc($all_resume)){

        ?>

        <div class="width-50">
            <div class="recent-job-list">
                <div class="width-100">
                <h4 class="job-title"><i class="fa-solid fa-person"></i> <?php echo $row["Required_Candidate_For"];?></h4>
                    <p class="job-company">
                        <b><?php echo $row['company_name']; ?></b>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        | 234 Reviews
                    </p>
                </div>
                <div class="width-33">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <?php echo $row["experience"];?>
                </div>
                <div class="width-33">
                    <i class="fa fa-inr" aria-hidden="true"></i>
                    No disclosed
                </div>
                <div class="width-33">
                    <i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row ["location"];?>
                </div>
                <div class="width-100">
                    <p class="job-skill">
                        <b>Skills :
                        </b><?php echo $row["required_skill"];?>
                    </p>
                </div>
                <div class="width-100">
                    <a href="jobs.php" class="job-apply-button">Apply Now</a>
                </div>
            </div>
        </div>
    
    <?php
       }
      ?>

    <!-- <div class="width-50"> <div class="recent-job-list"> <div
    class="width-100"> <h4 class="job-title">HTML Designer</h4> <p
    class="job-company">classic tech org <i class="fa fa-star"
    aria-hidden="true"></i> | 234 Reviews </p> </div> <div class="width-33"> <i
    class="fa fa-briefcase" aria-hidden="true"></i> 1 to 4 Years </div> <div
    class="width-33"> <i class="fa fa-inr" aria-hidden="true"></i> No disclosed
    </div> <div class="width-33"> <i class="fa fa-map-marker"
    aria-hidden="true"></i> kathmandu </div> <div class="width-100"> <p
    class="job-skill"> <b>Skills : </b>HTML, CSS, JAVASCRIPT </p> </div> <div
    class="width-100"> <a href="jobs.php" class="job-apply-button">Apply Now</a>
    </div> </div> </div> -->
    <?php
    $conn->close();
    ?>
</body>
</html>