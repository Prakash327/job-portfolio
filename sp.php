<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/25ed9725b0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="demo.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div class="width-100 banner-section">
            <div class="container">
                <h1 class="banner-heading">Find The Best Job For Your Future</h1>
                <p class="banner-para">its a long established fact that a reader will be distracted by the readable</p>
                <div class="search-sect">
                    <input type="text" class="search-textbox" placeholder="Search Company" name="search">
                </div>

                <div class="search-sect">
                    <button class="search-button" name="submit">Search</button>
                </div>
            </div>
        </div>
    </form>

    <div class="gd">
        <table>
            <?php
            if(isset($_POST['submit'])){
                $search = $_POST['search'];

                $sql = "SELECT * FROM resume WHERE company_name like '%$search%'";
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
        </table>
    </div>
</body>
</html>
