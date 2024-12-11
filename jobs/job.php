<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive UgPro - Jobs_Portal</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    </head>

    <body>
        

        <!-- Header  Section-->

        <header>
            <div id="navbar" class="obj-width" >
                <a href="../index.php" ><img class="logo" src="../images/logo.png"></a>

                <i id="bar" class='bx bx-menu '></i>
                <ul id="menu">
                    <li><a href="../index.php">Home</a></li>
                    
                    <li><a href="../contact.php">Contact Us</a></li>
                    <button id="w-btn">Register</button>
                </ul>

                
            </div>
        </header>

        <!-- Job Listing  Section-->

        <section class="jobs sec-space obj-width extra-space" id="jobs">
            <h2>Jobs in demand</h2>
            <p>Most viewed and all-time top-selling services</p>

            <form >
                <i class="bx bx-search-alt-2"></i>
                <input type="text" placeholder="Search Jobs" id="searchBar">
            </form>

            

            <div class="jobs-container" id="root">
                <li data-item="fullTime" class="jList">
                    <img src="images/google.png" alt="">
                    <h3>Web Developer</h3>
                    <p>$900-1200/m</p>
                    <span id="key">Full Time</span>
                </li>
            </div>
        </section>
      


<footer class="footer">
    <div class="obj-width">
        <div class="top">
            <div>
                <img class="logo" 
                src="../images/logo.png" alt="">
                <p>University-powered job portal,Showcasing top telants to lead...</p>
            </div>
            <div>
                <a href="#" title="LinkedIn"><i class='bx bxl-linkedin'></i></a>
                <a href="#" title="GitHub"><i class='bx bxl-github'></i></a>
                <a href="#" title="Twitter"><i class='bx bxl-twitter'></i></a>
            </div>
        </div>
        <div class="bottom">
            <div>
                <h3>Project</h3>
                <a href="#">Changelog</a>
                <a href="#">Status</a>
                <a href="#">Licence</a>
                <a href="#">All version</a>
            </div>
            <div>
                <h3>Community</h3>
                <a href="#">Github</a>
                <a href="#">Issues</a>
                <a href="#">Licence</a>
                <a href="#">All version</a>
            </div>
            <div>
                <h3>Help</h3>
                <a href="#">Support</a>
                <a href="#">Troubleshooting</a>
                <a href="#">Contact Us</a>
                
            </div>
            <div>
                <h3>Others</h3>
                <a href="#">Teerms of Service</a>
                <a href="#">Privacy</a>
                <a href="#">Licence</a>
                
            </div>
        </div>
    </div>
</footer>

        <script src="job-list.js"></script>
        <script src="../toggle.js"></script>
        <script src="jobSearch.js"></script>

        
    </body>

</html>