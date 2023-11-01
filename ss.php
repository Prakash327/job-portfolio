<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post">
            <div class="width-100 banner-section">
                <div class="container">
                    <h1 class="banner-heading">Find The Best Job For Your Future</h1>
                    <p class="banner-para">its a long established fact that a reader will be distracted by the readable</p>
                    <div class="search-sect">
                        <input
                            type="text"
                            class="search-textbox"
                            placeholder="Search Company"
                            name="search">
                    </div>

                    <div class="search-sect">
                        <button class="search-button" name="submit">

                            Search
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="gd">
          <table>
                <?php
                if(isset($_POST['submit'])){
                    $search = $_POST['search'];

                    $sql = "SELECT * FROM resume WHERE    company_name like '%$search%'";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                        echo '<thead>
                        <tr>
                        <th>Id</th>
                        <th>company_name</th>
                        <th>location</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>Required_Candidate_For</th>
                        <th>age</th>
                        <th>experience</th>
                        </tr>
                        </thead>
                        ';
                       while( $row = mysqli_fetch_assoc($result)){
                        echo '<tbody>
                        <tr>
                        <th><a href="">'.$row['Id'].'</a></th>
                        <th>'.$row['company_name'].'</th>
                        <th>'.$row['location'].'</th>
                        <th>'.$row['contact'].'</th>
                        <th>'.$row['email'].'</th>
                        <th>'.$row['Required_Candidate_For'].'</th>
                        <th>'.$row['age'].'</th>
                        <th>'.$row['experience'].'</th>
                        </tr>
                        </tbody>
                        ';}
                            
                    }
                    else{
                        echo 'no records found';
                    }
                }
                }
            
      
    ?>
          
          </table>
        </div>
        
    </body>
</html>