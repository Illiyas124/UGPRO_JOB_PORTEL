<?php
session_start();

// Redirect to login if the user is not logged in
if (!isset($_SESSION['fullname'])) {
    header("Location: signin_undergraduate.php");
    exit();
}

// Fetch user data from the session securely
$full_name = htmlspecialchars($_SESSION['fullname']);
$course = isset($_SESSION['course']) ? htmlspecialchars($_SESSION['course']) : 'Not specified';
$skills = isset($_SESSION['skills']) ? htmlspecialchars($_SESSION['skills']) : 'No skills provided';
$projects = isset($_SESSION['projects']) ? htmlspecialchars($_SESSION['projects']) : 'No projects added';
$github = isset($_SESSION['github']) ? htmlspecialchars($_SESSION['github']) : '#';
$linkedin = isset($_SESSION['linkedin']) ? htmlspecialchars($_SESSION['linkedin']) : '#';
$profile_image = isset($_SESSION['profile_image']) ? htmlspecialchars($_SESSION['profile_image']) : 'uploads/default_profile_image.jpg'; // Default image

// Logout functionality
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_unset();
    session_destroy();
    header("Location: signin_undergraduate.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UgPro Undergraduate Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #1f4a40;
            color: white;
        }

        .navbar .welcome-message {
            font-size: 1em;
        }

        .navbar .logout-button {
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 8px 15px;
            font-size: 0.9em;
            border-radius: 4px;
            cursor: pointer;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card:hover {
            transform: translateY(-10px);
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            margin-bottom: 10px;
            text-align: left;
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

        .social-media a:hover {
            color: #0056b3;
        }

        @media (max-width: 768px) {
            .profile-image {
                width: 120px;
                height: 120px;
            }

            .profile-card {
                padding: 15px;
            }

            .profile-info {
                font-size: 0.9em;
            }

            .social-media a {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar with welcome message and logout button -->
    <div class="navbar">
        <span class="welcome-message">Welcome, <?php echo $full_name; ?></span>
        <form method="POST" action="" style="margin: 0;">
            <button class="logout-button" type="submit">Logout</button>
        </form>
    </div>

    <div class="container">
        <h2>Your Profile</h2>
        <div class="profile-card">
            <img src="<?php echo $profile_image; ?>" alt="Profile Image" class="profile-image">
            <h3><?php echo $full_name; ?></h3>
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

</body>
</html>
