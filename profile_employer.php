<?php
    session_start();

    // Database connection
    define('SERVERNAME', '127.0.0.1');  // Or 'localhost'
    define('USERNAME', 'root');
    define('PASSWORD', 'mariadb');
    define('DBNAME', 'vavuniyauniversity');

    // Create database connection
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the employer is logged in
    if (!isset($_SESSION['employer_id'])) {
        // Redirect to login page if not logged in
        echo "<script>alert('Please login first.');</script>";
        echo "<script>window.location.href = 'signin_employer.php';</script>";
        exit();
    }

    // Fetch employer data from the database
    $employer_id = $_SESSION['employer_id'];
    $sql = "SELECT * FROM employer WHERE id = '$employer_id'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $company_name = $row['company_name'];
        $email = $row['email'];
    } else {
        echo "<script>alert('Employer data not found.');</script>";
        echo "<script>window.location.href = 'signin_employer.php';</script>";
        exit();
    }

    // Fetch all undergraduates' data
    $undergrad_sql = "SELECT * FROM undergraduate";
    $undergrad_result = mysqli_query($connect, $undergrad_sql);

    if (!$undergrad_result) {
        die("Error fetching undergraduate profiles: " . mysqli_error($connect));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UgPro - Employer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        padding-top: 60px; /* Adjusted padding for fixed navbar */
    }
    .navbar {
        background-color: #1f4a40;
        padding: 10px 20px;
        position: fixed; /* Fixed position */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000; /* Ensures it stays on top */
    }
    .navbar .welcome-message {
        font-size: 1em;
        color: white;
    }
    .navbar .logout-button {
        background-color: #d9534f;
        color: white;
        padding: 8px 15px;
        border: none;
        font-size: 0.9em;
        border-radius: 4px;
        cursor: pointer;
    }
    .container {
        width: 90%;
        max-width: 1000px;
        margin: 20px auto;
    }
    .card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    .card-header {
        background-color: #1f4a40;
        color: white;
        text-align: center;
        padding: 15px;
        border-radius: 8px 8px 0 0;
    }
    .card-body {
        padding: 20px;
        text-align: center; /* Center-align text */
    }
    .profile-info {
        margin-bottom: 10px;
        font-size: 1.1rem;
        color: #333;
        text-align: center; /* Center-align profile details */
    }
    .profile-info label {
        font-weight: bold;
    }
    .social-media a {
        margin-right: 15px;
        text-decoration: none;
        color: #0073e6;
        font-size: 1.1em;
    }
    .btn-primary {
        background-color: #0073e6;
        border-color: #0073e6;
        color: white;
    }
    .profile-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-left: auto;
        margin-right: auto;
    }
</style>

</head>
<body>

<!-- Navbar with welcome message and logout button -->
<div class="navbar">
    <span class="welcome-message">Welcome, <?php echo $company_name; ?></span>
    <form method="POST" action="index.php" style="margin: 0;">
        <button class="logout-button" type="submit">Logout</button>
    </form>
</div>

<div class="container">
    <h2>Undergraduate Profiles</h2>

    <?php
    // Loop through all undergraduates and display their profile cards
    while ($undergrad_row = mysqli_fetch_assoc($undergrad_result)) {
        $name = isset($undergrad_row['fullname']) ? htmlspecialchars($undergrad_row['fullname']) : 'N/A';
        $course = isset($undergrad_row['course']) ? htmlspecialchars($undergrad_row['course']) : 'Not specified';
        $skills = isset($undergrad_row['skills']) ? htmlspecialchars($undergrad_row['skills']) : 'No skills provided';
        $projects = isset($undergrad_row['projects']) ? htmlspecialchars($undergrad_row['projects']) : 'No projects added';
        $github = isset($undergrad_row['github']) ? htmlspecialchars($undergrad_row['github']) : '#';
        $linkedin = isset($undergrad_row['linkedin']) ? htmlspecialchars($undergrad_row['linkedin']) : '#';
    ?>
        <div class="card">
            <div class="card-header">
                <h3><?php echo $name; ?></h3>
            </div>
            <div class="card-body">
                <div class="profile-image">
                    <img src="" alt="Profile Image">
                </div>
                <div class="profile-info">
                    <label>Course:</label> <?php echo $course; ?>
                </div>
                <div class="profile-info">
                    <label>Skills:</label> <?php echo $skills; ?>
                </div>
                <div class="profile-info">
                    <label>Projects:</label> <?php echo $projects; ?>
                </div>
                <div class="social-media">
                    <a href="<?php echo $github; ?>" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                    <a href="<?php echo $linkedin; ?>" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</div>

<!-- Bootstrap JS (Optional, for interactive components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
