<?php
require_once 'conf/dbconf.php';
session_start();
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Prepare the SQL query to fetch user details
    $sql = "SELECT full_name, email, password, course, skills, projects FROM undergraduate WHERE email='$email'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            $_SESSION["fullname"] = $row["full_name"];
            $_SESSION["course"] = $row["course"];
            $_SESSION["skills"] = $row["skills"];
            $_SESSION["projects"] = $row["projects"];
            header("Location: profile_undergraduate.php");
            exit(); // Ensure no further code runs after redirection
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $connect->close(); // Close the database connection
    header("Location: signin_undergraduate.php?error=" . urlencode($error));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UgPro Undergraduate Sign In</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #1f4a40;
        }
        .container {
            width: 50%;
            max-width: 500px;
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .container h2 {
            text-align: center;
            margin: 0;
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
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .signin-button {
            width: 100%;
            padding: 12px;
            font-size: 1.2em;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-top: 10px;
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
    </style>
</head>
<body>

<div class="container">
    <h2>Sign in as an Undergraduate</h2>

    <form method="POST" action="signin_undergraduate.php">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="signin-button" name='login'>Sign in</button>
    </form>

    <?php
    // Display any error message
    if (isset($error)) {
        echo "<p style='color: red; text-align: center;'>$error</p>";
    }
    ?>

    <div class="signup-link">
        <p>Don't have an account? <a href="signup_undergraduate.php">Sign up as an Undergraduate</a></p>
    </div>
</div>

</body>
</html>
