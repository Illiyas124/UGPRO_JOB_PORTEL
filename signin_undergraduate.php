<?php
// Start the session at the very top to avoid headers already being sent error
session_start(); 

// Include the database configuration
include('conf/dbconf.php'); // Ensure the path to dbconf.php is correct

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = $_POST['password']; // Plain password, will be verified against the hashed password in the database

    // Query to check if the email exists in the database
    $sql = "SELECT * FROM undergraduate WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Fetch user data from the database
        $user = mysqli_fetch_assoc($result);

        // Verify the password against the hashed password stored in the database
        if (password_verify($password, $user['password'])) {
            // Store user data in session
            $_SESSION['user'] = $user;

            // Redirect to the profile page
            header("Location: profile_undergraduate.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "No account found with that email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UgPro Undergraduate Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
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
        .form-group .show-password {
            float: right;
            font-size: 0.9em;
            cursor: pointer;
            color: #888;
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

    <form method="POST">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <i class="fas fa-eye show-password" onclick="togglePassword()"></i>
        </div>
        <button type="submit" class="signin-button">Sign in</button>
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

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const showPasswordText = document.querySelector('.show-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            showPasswordText.textContent = 'Hide';
        } else {
            passwordField.type = 'password';
            showPasswordText.textContent = 'Show';
        }
    }
</script>

</body>
</html>
