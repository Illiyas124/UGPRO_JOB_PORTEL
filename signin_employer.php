<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UgPro Employer Sign In</title>
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
    <h2>Sign in as an Employer</h2>

    <!-- Corrected form onsubmit to call loginEmployer function -->
    <form onsubmit="loginEmployer(event)">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Enter your email address" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password" required>
            <i class="fas fa-eye show-password" onclick="togglePassword()"></i>
        </div>
        <button type="submit" class="signin-button">Sign in</button>
    </form>

    <div class="signup-link">
        <p>Don't have an account? <a href="signup_employer.php">Sign up as an Employer</a></p>
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

    function loginEmployer(event) {
        event.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Replace this with real authentication logic
        if (email === "employer@gmail.com" && password === "1234") {
            // Store employer data in localStorage for session management
            localStorage.setItem('employer', JSON.stringify({ email: email }));
            // Redirect to profile_employer.html after successful login
            window.location.href = "profile_employer.php";
        } else {
            alert("Incorrect email or password. Please try again.");
        }
    }
</script>

</body>
</html>
