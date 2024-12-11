<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive UgPro - Jobs_Portal</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    </head>

    <body>
        

        <!-- Header  Section-->

        
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php"; include_once($IPATH."header.html"); ?>



        <!-- Register Options Modal -->
<div id="registerModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span onclick="closeModal()" class="close">&times;</span>
        <h3>Select Your Role</h3>
        <button onclick="redirectTo('undergraduate')" class="modal-button">I am an Undergraduate</button>
        <button onclick="redirectTo('employer')" class="modal-button">I am an Employer</button>
    </div>
</div>


  
        


        <!-- Hero  Section-->
         <section class="hero" id="home">
            <div class="hero-box obj-width">
                <div class="h-left">
                    <h1>Connecting Students with Employers Effortlessly</h1>
                    <p>University-powered job portal,Showcasing top telants to lead...</p>
                    <div class="search ">
                        <input type="text" placeholder="Are you looking for...">
                        <a id="g-btn" href="#">Search</a>
                    </div>
                </div>

                <div class="h-right">
                    <img src="images/hero1.PNG" alt="">
                </div>
            </div>
         </section>

         


        <!-- Features  Section-->



        


        <!-- Job Listing  Section-->

        <section class="jobs sec-space obj-width" id="jobs">
            <h2>Jobs in demand</h2>
            <p>Most viewed and all-time top-selling services</p>

            <ul class="job-id">
                <li data-target="all" class="active">Recent Jobs</li>
                <li data-target="freelancer">Freelancer</li>
                <li data-target="fullTime">Full Time</li>
                <li data-target="partTime">Part Time</li>
            </ul>

            <div class="jobs-container">
                <li data-item="fullTime" class="jList">
                    <img src="images/google.png" alt="">
                    <h3>Web Developer</h3>
                    <p>$900-1200/m</p>
                    <span id="key">Full Time</span>
                </li>

                <li data-item="freelancer" class="jList">
                    <img src="images/uber.png" alt="">
                    <h3>Freelancer</h3>
                    <p>$700-1100/m</p>
                    <span id="key">Freelancer</span>
                </li>

                <li data-item="partTime" class="jList">
                    <img src="images/linkedin.png" alt="">
                    <h3>Business Associate</h3>
                    <p>$900-1500/m</p>
                    <span id="key">Part Time</span>
                </li>

                <li data-item="fullTime" class="jList">
                    <img src="images/facebook.png" alt="">
                    <h3>Digital Marketing</h3>
                    <p>$900-1200/m</p>
                    <span id="key">Full Time</span>
                </li>

                <li data-item="partTime" class="jList">
                    <img src="images/yahoo.png" alt="">
                    <h3>User Experience</h3>
                    <p>$900-1200/m</p>
                    <span id="key">Part Time</span>
                </li>

            </div>
        </section>

       


        <!-- Team  Section-->


        <!-- Footer  Section-->
        
        
    <section class="features sec-space" id="whyChooseUs">
        <div class="obj-width " >
            <h2>Why Choose Us?</h2>
            <div class="feature-items">
                <div class="feature">
                    <i class="bi bi-briefcase"></i>
                    <h3>Verified Jobs</h3>
                    <p>All jobs listed are verified by the university for authenticity.</p>
                </div>
                <div class="feature">
                    <i class="bi bi-lightbulb"></i>
                    <h3>Skill-Based Search</h3>
                    <p>Easily find jobs that match your skills and qualifications.</p>
                </div>
                <div class="feature">
                    <i class="bi bi-hand-thumbs-up"></i>
                    <h3>University Support</h3>
                    <p>Get assistance from the university for career guidance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Listing Section -->
    <section class="jobs sec-space extra-space" id="latestJobListings">
        <div class="obj-width">
            <h2>Latest Job Listings</h2>
            <div class="job-list">
                <div class="job-item">
                    <h3>Web Developer</h3>
                    <p>XYZ Tech Inc. | Colombo, Sri Lanka</p>
                    <a href="#" class="g-btn">Apply Now</a>
                </div>
                <div class="job-item">
                    <h3>Graphic Designer</h3>
                    <p>DesignPro Ltd. | Jaffna, Sri Lanka</p>
                    <a href="#" class="g-btn">Apply Now</a>
                </div>
                <!-- More Job Listings -->
            </div>
        </div>
    </section>




     <!-- Brand  Section-->
<!--
     <section class="trust sec-space obj-width">

        <h2>Trusted by the world's best</h2>
        <p>Most viewed and all-time top-selling services</p>

        <div class="t-box">
            
        </div>
    </section>


    <section class="team sec-space obj-width">

        <h2>Highest Rated Freelancers</h2>
        <p>Most viewed and all-time top-selling services</p>

        <div class="team-container">
            <div class="f1-box">
                <img src="images/t1.png" alt="">
            <img src="images/t2.png" alt="">
            <img src="images/t3.png" alt="">
            <img src="images/t4.png" alt="">
            <img src="images/t5.png" alt="">
            <img src="images/t6.png" alt="">

                <a href=""></a>
            </div>
        </div>
    </section>-->

    <!-- Brand Section -->
    <section class="brands sec-space" id="ourPartnerCompanies">
        <div class="obj-width">
            <h2>Our Partner Companies</h2>
            <div class="brand-logos">
                <img src="images/t1.png" alt="Brand 1">
                <img src="images/t2.png" alt="Brand 2">
                <img src="images/t3.png" alt="Brand 3">
                <img src="images/t5.png" alt="Brand 3">
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team sec-space" id="meetTheTeam">
        <div class="obj-width">
            <h2>Meet the Team</h2>
            <div class="team-members">
                <div class="member">
                    <img src="images/fl-3.png" alt="Team Member 1">
                    <h3>John Doe</h3>
                    <p>Lead Developer</p>
                </div>
                <div class="member">
                    <img src="images/fl-3.png" alt="Team Member 2">
                    <h3>Jane Smith</h3>
                    <p>UI/UX Designer</p>
                </div>
                <!-- More Team Members -->
            </div>
        </div>
    </section>



    <!-- contact us-->



    <!-- Footer Section 
   <footer>
    
        <div class="obj-width">
            <p>&copy; 2024 UgPro. All Rights Reserved.</p>
        </div>
    </footer>
-->
    <!--

    <footer class="footer">
        <div class="social">
           

                <a href="#" title="LinkedIn"><i class='bx bxl-linkedin'></i></a>
                <a href="#" title="GitHub"><i class='bx bxl-github'></i></a>
                <a href="#" title="Twitter"><i class='bx bxl-twitter'></i></a>

        </div>

        <ul class="list">
            <li>
                <a href="#">FAQ</a>
            </li>

            <li>
                <a href="#">Services</a>
            </li>

            <li>
                <a href="#education">About Me</a>
            </li>

            <li>
                <a href="#contact">Contact</a>
            </li>

            <li>
                <a href="#testimonials">Testimonials</a>
            </li>


        </ul>
        <p class="copyright">
            &#169 University of Vavuniya UgPro. All Rights Reserved.
        </p>
    </footer>

-->

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php"; include($IPATH."footer.html"); ?>


    
        <script src="script.js"></script>
        <script src="toggle.js"></script>

        
    </body>

</html>