<?php
    // Improved error handling
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

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

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Collect form data
        $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];

        if ($email) {
            // Prepare the SQL query to fetch employer data
            $stmt = $connect->prepare("SELECT * FROM employer WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                // Employer exists, verify the password
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    // Password is correct, start the session and redirect to the employer dashboard
                    session_start();
                    $_SESSION['employer_id'] = $row['id'];
                    $_SESSION['company_name'] = $row['company_name'];
                    echo "<script>alert('Login successful! Redirecting to your dashboard.');</script>";
                    echo "<script>window.location.href = 'profile_employer.php';</script>";
                    exit();
                } else {
                    // Incorrect password
                    echo "<script>alert('Incorrect password. Please try again.');</script>";
                }
            } else {
                // Employer does not exist
                echo "<script>alert('No account found with this email. Please sign up.');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Invalid email format.');</script>";
        }
    }

    $connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UgPro - Employer Sign In</title>
    <!-- Bootstrap and Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Add your styles here */
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fafafa;
        }
        .container {
            display: flex;
            background-color: white;
            width: 80%;
            max-width: 900px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .left {
            background-color: #1f4a40;
            color: white;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }
        .left h1 {
            font-size: 3em;
            margin: 0;
        }
        .left p {
            font-size: 1.2em;
            margin-top: 10px;
        }
        .right {
            width: 60%;
            padding: 40px;
        }
        .right h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .signin-button {
            width: auto;
            padding: 12px 40px;
            font-size: 1.2em;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-top: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
        }
        .signup-link a {
            color: #57bef2;
            text-decoration: none;
        }
        .ugpro-logo {
            font-size: 40px;
        }

        @media (max-width: 1024px) {
            .container {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .left {
                width: 100%;
                padding: 20px 0;
            }
            .right {
                padding: 20px;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="left">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" width="200" height="200" alt="UgPro Logo">      
        </a>
        <strong class="ugpro-logo">UgPro</strong>
    </div>
    <div class="right">
        <h2>Sign in to UgPro as Employer</h2>
        <form method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="signin-button">Sign In</button>
        </form>

        <div class="signup-link">
            <p>Don't have an account? <a href="signup_employer.php">Sign up</a></p>
        </div>
    </div>
</div>

</body>
</html>
