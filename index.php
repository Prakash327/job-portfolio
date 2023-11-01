
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://kit.fontawesome.com/25ed9725b0.js" crossorigin="anonymous"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
   
        <?php
        include ("nav.html");
    ?>
    <script src="ajax.js"></script>
    
        <!--SEARCH SECTION SEARCH SECTION SEARCH SECTION ------> 
       <!--  <form id="searchForm" method="POST">
        <div class="width-100 banner-section">
            <div class="container">
                <h1 class="banner-heading">Find The Best Job For Your Future</h1>
                <p class="banner-para">its a long established fact that a reader will be distracted by the readable</p>
                <div class="search-sect">
                    <input type="text" class="search-textbox" id="searchInput" placeholder="Search Company" name="search">
                </div>
                <div class="search-sect">
                    <input type="text" class="search-textbox" placeholder="Select Location" name="searchlocation">
                    <i class="fa fa-life-ring icons" aria-hidden="true"></i>
                </div> 
                <div class="search-sect">
                    <input type="text" class="search-textbox" placeholder="All categories" name="searchall">
                    <i class="fa fa-caret-down icons" aria-hidden="true"></i>
                </div> 
                <div class="search-sect">
                    <button class="search-button" name="submit" id="searchButton" type="submit">
                        <i class="fa fa-search " aria-hidden="true"></i>
                        Search Here
                    </button>
                </div>
            </div>
        </div>
        </form> -->
        <form id="searchForm" method="POST">
  <div class="width-100 banner-section">
    <div class="container">
      <h1 class="banner-heading">Find The Best Job For Your Future</h1>
      <p class="banner-para">It's a long established fact that a reader will be distracted by the readable</p>
      <div class="pra">
        <div class="search-sect">
        <input type="text" class="search-textbox" id="searchInput" placeholder="Search Company" name="search" >
      </div>
      <div class="search-sect">
        <input type="text" class="search-textbox" id="searchLocation" placeholder="Select Location" name="searchlocation">
        <i class="fa fa-life-ring icons" aria-hidden="true"></i>
      </div> 
       <div class="search-sect">
        <input type="text" class="search-textbox" id="searchCategory" placeholder="All categories" name="searchall">
        <i class="fa fa-caret-down icons" aria-hidden="true"></i>
      </div>
      <div class="search-sect">
        <button class="search-button" name="submit" id="searchButton" type="submit">
          <i class="fa fa-search" aria-hidden="true"></i>
          Search Here
        </button>
</div>
      </div>
    </div>
  </div>
</form>

        <div id="searchResults" class="search-results">
        <!-- Search results will be displayed here -->
        </div>
        
        <!--CATEGORY SECTION CATEGORY SECTION CATEGORY SECTION -->
        <div class="width-100 skill-section">
            <div class="container">
                <div class="skill-list">
                    <div class="width-33">
                        <img class="skill-img" src="logo/skill-1.png">
                    </div>
                    <div class="width-66">
                        <h4>
                            Technlogy</h4>
                        <button class="view-button">5,000 jobs</button>
                    </div>
                </div>
                <div class="skill-list">
                    <div class="width-33">
                        <img class="skill-img" src="logo/skill-2.png">
                    </div>
                    <div class="width-66">
                        <h4>Driver
                        </h4>
                        <button class="view-button">2,000 jobs</button>
                    </div>
                </div>
                <div class="skill-list">
                    <div class="width-33">
                        <img class="skill-img" src="logo/skill-3.png">
                    </div>
                    <div class="width-66">
                        <h4>Beauti Parlor</h4>
                        <button class="view-button">1,000 jobs</button>
                    </div>
                </div>
                <div class="skill-list">
                    <div class="width-33">
                        <img class="skill-img" src="logo/skill-4.png">
                    </div>
                    <div class="width-66">
                        <h4>Marketing</h4>
                        <button class="view-button">4,000 jobs</button>
                    </div>
                </div>
            </div>
        </div>
        <!-----RECENT JOB SECTION RECENT JOB SECTION RECENT JOB SECTION ----->
        <div class="width-100 recent-job">
            <div class="container">
                <h2 class="recent-job-heading">RECENT JOB</h2>
                <p class="recent-job-sub-heading">Get the list of all recent jobs</p>
                <!-----JOB LIST----->
                <div class="width-50">
                    <div class="recent-job-list">
                        <div class="width-100">
                            <h4 class="job-title">HTML Designer</h4>
                            <p class="job-company">classic tech org
                                <i class="fa fa-star" aria-hidden="true"></i>
                                | 234 Reviews
                            </p>
                        </div>
                        <div class="width-33">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            1 to 4 Years
                        </div>
                        <div class="width-33">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                            No disclosed
                        </div>
                        <div class="width-33">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            kathmandu
                        </div>
                        <div class="width-100">
                            <p class="job-skill">
                                <b>Skills :
                                </b>HTML, CSS, JAVASCRIPT
                            </p>
                        </div>
                        <div class="width-100">
                            <a href="jobs.php" class="job-apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <!-----JOB LIST------>
                <div class="width-50">
                    <div class="recent-job-list">
                        <div class="width-100">
                            <h4 class="job-title">CSS Designer</h4>
                            <p class="job-company">Info Tech.org
                                <i class="fa fa-star" aria-hidden="true"></i>
                                | 234 Reviews
                            </p>
                        </div>
                        <div class="width-33">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            1 to 4 Years
                        </div>
                        <div class="width-33">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                            No disclosed
                        </div>
                        <div class="width-33">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Biratnagar
                        </div>
                        <div class="width-100">
                            <p class="job-skill">
                                <b>Skills :
                                </b>
                                CSS,BOOTSTRAP
                            </p>
                        </div>
                        <div class="width-100">
                            <a href="#" class="job-apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <!-----JOB LIST----->
                <div class="width-50">
                    <div class="recent-job-list">
                        <div class="width-100">
                            <h4 class="job-title">Bootstrap Developer</h4>
                            <p class="job-company">Apple corporation
                                <i class="fa fa-star" aria-hidden="true"></i>
                                | 234 Reviews
                            </p>
                        </div>
                        <div class="width-33">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            1 to 4 Years
                        </div>
                        <div class="width-33">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                            No disclosed
                        </div>
                        <div class="width-33">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Pathri
                        </div>
                        <div class="width-100">
                            <p class="job-skill">
                                <b>Skills :
                                </b>
                                CSS, BOOTSTRAP
                            </p>
                        </div>
                        <div class="width-100">
                            <a href="#" class="job-apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <!-----JOB LIST----->
                <div class="width-50">
                    <div class="recent-job-list">
                        <div class="width-100">
                            <h4 class="job-title">Javascript Developer</h4>
                            <p class="job-company">liverpool Software org
                                <i class="fa fa-star" aria-hidden="true"></i>
                                | 234 Reviews
                            </p>
                        </div>
                        <div class="width-33">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            1 to 4 Years
                        </div>
                        <div class="width-33">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                            No disclosed
                        </div>
                        <div class="width-33">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Pune
                        </div>
                        <div class="width-100">
                            <p class="job-skill">
                                <b>Skills :
                                </b>
                                JAVASCRIPT, JQUERY,React Js
                            </p>
                        </div>
                        <div class="width-100">
                            <a href="#" class="job-apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <!-----JOB LIST----->
                <div class="width-50">
                    <div class="recent-job-list">
                        <div class="width-100">
                            <h4 class="job-title">Graphic Designer</h4>
                            <p class="job-company">Microsoft org
                                <i class="fa fa-star" aria-hidden="true"></i>
                                | 234 Reviews
                            </p>
                        </div>
                        <div class="width-33">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            1 to 4 Years
                        </div>
                        <div class="width-33">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                            No disclosed
                        </div>
                        <div class="width-33">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Ithari
                        </div>
                        <div class="width-100">
                            <p class="job-skill">
                                <b>Skills :
                                </b>
                                PHOTOSHOP
                            </p>
                        </div>
                        <div class="width-100">
                            <a href="#" class="job-apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <!-----JOB LIST------>
                <div class="width-50">
                    <div class="recent-job-list">
                        <div class="width-100">
                            <h4 class="job-title">jQuery Developer</h4>
                            <p class="job-company">Google Corporation
                                <i class="fa fa-star" aria-hidden="true"></i>
                                | 234 Reviews
                            </p>
                        </div>
                        <div class="width-33">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            1 to 4 Years
                        </div>
                        <div class="width-33">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                            No disclosed
                        </div>
                        <div class="width-33">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Damak
                        </div>
                        <div class="width-100">
                            <p class="job-skill">
                                <b>Skills :
                                </b>
                                JAVASCRIPT, JQUERY,
                            </p>
                        </div>
                        <div class="width-100">
                            <a href="#" class="job-apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------TOP COMPANY SECTION TOP COMPANY SECTION TOP COMPANY SECTION----->
        <div class="width-100 top-company">
            <div class="container">
                <h2 class="top-company-heading">Top Company Hiring</h2>
                <p class="top-company-sub-heading">List of Top Company Hiring With Us</p>
                <!-----START COMPANY LIST----->
                <div class="width-25">
                    <div class=" company-list">
                        <div class="width-100">
                            <div class="width-25 company-image">
                                <img src="logo/google.png">
                            </div>
                            <div class="width-75">
                                <h4 class="company-name">Google Company</h4>
                                <p class="company-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star " aria-hidden="true"></i>
                                </p>
                                <p class="company-review">( 874 Reviews)</p>
                            </div>
                        </div>
                        <div class="width-50 company-address">New York, USA</div>
                        <div class="width-50 company-opening">25 Job Opening
                        </p>
                    </div>
                </div>
            </div>
            <!-----START COMPANY LIST----->
            <div class="width-25">
                <div class=" company-list">
                    <div class="width-100">
                        <div class="width-25 company-image">
                            <img src="logo/microsoft.png">
                        </div>
                        <div class="width-75">
                            <h4 class="company-name">Microsoft Company</h4>
                            <p class="company-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star " aria-hidden="true"></i>
                            </p>
                            <p class="company-review">( 874 Reviews)</p>
                        </div>
                    </div>
                    <div class="width-50 company-address">New York, USA</div>
                    <div class="width-50 company-opening">25 Job Opening
                    </p>
                </div>
            </div>
        </div>
        <!-----START COMPANY LIST----->
        <div class="width-25">
            <div class=" company-list">
                <div class="width-100">
                    <div class="width-25 company-image">
                        <img src="logo/ibm.png">
                    </div>
                    <div class="width-75">
                        <h4 class="company-name">IBM Company</h4>
                        <p class="company-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                        </p>
                        <p class="company-review">( 874 Reviews)</p>
                    </div>
                </div>
                <div class="width-50 company-address">New York, USA</div>
                <div class="width-50 company-opening">25 Job Opening
                </p>
            </div>
        </div>
    </div>
    <!-----START COMPANY LIST----->
    <div class="width-25">
        <div class=" company-list">
            <div class="width-100">
                <div class="width-25 company-image">
                    <img src="logo/apple.png">
                </div>
                <div class="width-75">
                    <h4 class="company-name">Apple Company</h4>
                    <p class="company-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star " aria-hidden="true"></i>
                    </p>
                    <p class="company-review">( 874 Reviews)</p>
                </div>
            </div>
            <div class="width-50 company-address">New York, USA</div>
            <div class="width-50 company-opening">25 Job Opening
            </p>
        </div>
    </div>
</div>
<!-----START COMPANY LIST----->
<div class="width-25">
    <div class=" company-list">
        <div class="width-100">
            <div class="width-25 company-image">
                <img src="logo/company-5.png">
            </div>
            <div class="width-75">
                <h4 class="company-name">InfoSys Company</h4>
                <p class="company-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star " aria-hidden="true"></i>
                </p>
                <p class="company-review">( 874 Reviews)</p>
            </div>
        </div>
        <div class="width-50 company-address">New York, USA</div>
        <div class="width-50 company-opening">25 Job Opening
        </p>
    </div>
</div>
</div>
<!-----START COMPANY LIST------>
<div class="width-25">
<div class=" company-list">
    <div class="width-100">
        <div class="width-25 company-image">
            <img src="logo/wipro.png">
        </div>
        <div class="width-75">
            <h4 class="company-name">Wipro Company</h4>
            <p class="company-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star " aria-hidden="true"></i>
            </p>
            <p class="company-review">( 874 Reviews)</p>
        </div>
    </div>
    <div class="width-50 company-address">New York, USA</div>
    <div class="width-50 company-opening">25 Job Opening
    </p>
</div>
</div>
</div>
<!-----START COMPANY LIST------>
<div class="width-25">
<div class=" company-list">
<div class="width-100">
    <div class="width-25 company-image">
        <img src="logo/hcl.png">
    </div>
    <div class="width-75">
        <h4 class="company-name">HCL Company</h4>
        <p class="company-rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star " aria-hidden="true"></i>
        </p>
        <p class="company-review">( 874 Reviews)</p>
    </div>
</div>
<div class="width-50 company-address">New York, USA</div>
<div class="width-50 company-opening">25 Job Opening
</p>
</div>
</div>
</div>
<!-----START COMPANY LIST----->
<div class="width-25">
<div class=" company-list">
<div class="width-100">
<div class="width-25 company-image">
    <img src="logo/linked in.png">
</div>
<div class="width-75">
    <h4 class="company-name">Linkedin Company</h4>
    <p class="company-rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star " aria-hidden="true"></i>
    </p>
    <p class="company-review">( 874 Reviews)</p>
</div>
</div>
<div class="width-50 company-address">New York, USA</div>
<div class="width-50 company-opening">25 Job Opening
</p>
</div>
</div>
</div>
</div>
</div>
<!-------FEATURE SECTION FEATURE SECTION FEATURE SECTION------->
<div class="width-100 feature-sect">
<div class="container">
<div class="width-50">
<div class="feature-panel">
<img src="logo/feature-1.png" class="feature-img">
<h4 class="feature-title">DO YOU WANT TO FIND A JOB ?</h4>
<p class="feature-desc">It look like readable English. Many desktop publishing
packagesand web page editors now use Lorem Ipsum as their default model text</p>
<a href="jobs.php">
<button class="feature-btn">Find Job</button>
</a>
</div>
</div>
<div class="width-50">
<div class="feature-panel">
<img src="logo/feature-2.png" class="feature-img">
<h4 class="feature-title">
ARE YOU LOOKING FOR A CANDIDATE ?</h4>
<p class="feature-desc">It look like readable English. Many desktop publishing
packagesand web page editors now use Lorem Ipsum as their default model text</p>
<a href="">
<button class="feature-btn">Find Candidates</button>
</a>
</div>
</div>
</div>
</div>
<!------FOOTER SECTION FOOTER SECTION FOOTER SECTION ------->
<footer>
<div class="width-100 footer-background">
<div class="container">
<div class="width-25">
<h4>QUICK LINKS</h4>
<ul class="footer-list">
<li>
<a href="">php job in pathri</a>
</li>
<li>
<a href="">html & css jobs in pathri</a>
</li>
<li>
<a href="">mobile app development in biratnaagar</a>
</li>
<li>
<a href="">python developer in kathmandu</a>
</li>
</ul>
</div>
<div class="width-25">
<h4>JOB TYPE</h4>
<ul class="footer-list">
<li>
<a href="">JAVASCRIPT DEVELOPER IN BIRATNAGAR
</a>
</li>
<li>
<a href="">FULLSTACK DEVELOPER</a>
</li>
<li>
<a href="">NETWORKING SPECIALIST IN PATHRI</a>
</li>
<li>
<a href="">PHOTOSHOP EXPERT IN URLABARI</a>
</li>
</ul>
</div>
<div class="width-25">
<h4>RESOURCES</h4>
<ul class="footer-list">
<li>
<a href="index.php">Home</a>
</li>
<li>
<a href="">Post Free Job</a>
</li>
<li>
<a href="">Recruiter Login</a>
</li>
<li>
<a href="">Contact us</a>
</li>
</ul>
</div>
<div class="width-25">
<h4>GET IN TOUCH</h4>
<ul class="get-in-touch">
<li>
<i class="fa fa-envelope-o" aria-hidden="true"></i>
<p>E-MAIL: pb52673@gmail.com</p>
</li>
<li>
<i class="fa fa-headphones" aria-hidden="true"></i>
<p>WHATS-APP: +977 9825399349
</p>
</li>
<li>
<i class="fa fa-fax" aria-hidden="true"></i>
<p>CONTACT NO.: +977 9825399349</p>
</li>
<li>
<i class="fa fa-globe" aria-hidden="true"></i>
<p>WEBSITE: https://www.prak@22.com</p>
</li>
<li>
<img src="logo/icon-facebook.png">
</li>
<li>
<img src="logo/icon-instagram.png">
</li>
<li>
<img src="logo/icon-twitter.png">
</li>
<li>
<img src="logo/icon-linkedin.png">
</li>
</ul>
</div>
</div>
</div>
</footer>
<!------FOOTER SECTION FOOTER SECTION FOOTER SECTION ------>
</body>
</html>