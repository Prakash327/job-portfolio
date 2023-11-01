<?php
    include 'connect.php';

    if(isset($_POST['search'])){
        $search = $_POST['search'];

        $sql = "SELECT * FROM resume WHERE company_name LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);

        if($result && mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="width-50">
                    <div class="recent-job-list">
                        <div class="width-100">
                            <h4 class="job-title"><i class="fa-solid fa-person"></i><?php echo $row["Required_Candidate_For"]; ?></h4>
                            <p class="job-company">
                                <b><?php echo $row['company_name']; ?></b>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                | 234 Reviews
                            </p>
                        </div>
                        <div class="width-33">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <?php echo $row["experience"]; ?>
                        </div>
                        <div class="width-33">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                            No disclosed
                        </div>
                        <div class="width-33">
                            <i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row["location"]; ?>
                        </div>
                        <div class="width-100">
                            <p class="job-skill">
                                <b>Skills :</b><?php echo $row["required_skill"]; ?>
                            </p>
                        </div>
                        <div class="width-100">
                            <a href="jobs.php" class="job-apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo 'No records found.';
        }
    }
?>
