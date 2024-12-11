<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UgPro Employer Sign Up</title>
    <!-- Bootstrap and Bootstrap Icons CDN -->
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
            display: flex;
            background-color: white;
            width: 60%;
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
            margin: 10px;
        }
        .right {
            width: 60%;
            padding: 40px;
        }
        .right h2 {
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
        .form-group input[type="text"],
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
        .signup-button {
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
        .signup-button:disabled {
            background-color: #e0e0e0;
            cursor: not-allowed;
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
        .divider {
            margin: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .divider span {
            background-color: white;
            padding: 0 10px;
            font-weight: bold;
        }
        .divider::before,
        .divider::after {
            content: "";
            flex-grow: 1;
            border-top: 2px solid #ccc;
        }
        @media (max-width: 1024px) {
            .container {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .left {
                width: 100%;
                max-width: 100%;
                padding: 20px 0;
            }
            .right {
                padding: 20px;
                text-align: center;
            }
        }
        @media (max-width: 768px) {
            .signup-button {
                padding: 12px;
                font-size: 1em;
            }
        }
        @media (max-width: 480px) {
            .left h1 {
                font-size: 2em;
            }
            .right h2 {
                font-size: 1.5em;
            }
            .form-group input {
                padding: 8px;
                font-size: 0.9em;
            }
            .signup-button {
                padding: 10px;
                font-size: 0.9em;
            }
            .signup-link {
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="left">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/logo.png" width="200" height="200" alt="UgPro Logo" class="me-2">
        </a>
        <strong class="ugpro-logo">UgPro</strong>
    </div>
    <div class="right">
        <h2>Sign up as an Employer</h2>

        <form onsubmit="registerEmployer(event)">
            <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" id="company-name" placeholder="Enter your company name" required>
            </div>
            <div class="form-group">
                <label for="contact-email">Email Address</label>
                <input type="email" id="contact-email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Create a password" required>
                <i class="fas fa-eye show-password" onclick="togglePassword()"></i>
            </div>
            <button type="submit" class="signup-button" disabled>Sign up</button>
        </form>

        <div class="signup-link">
            <p>Already have an account? <a href="signin_employer.php">Sign in</a></p>

        </div>
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

    document.getElementById('contact-email').addEventListener('input', toggleButton);
    document.getElementById('password').addEventListener('input', toggleButton);
    document.getElementById('company-name').addEventListener('input', toggleButton);

    function toggleButton() {
        const email = document.getElementById('contact-email').value;
        const password = document.getElementById('password').value;
        const companyName = document.getElementById('company-name').value;
        document.querySelector('.signup-button').disabled = !(email && password && companyName);
    }

    function registerEmployer(event) {
        event.preventDefault();
        // Your form submission logic for employer sign-up goes here.
        alert("Employer registered successfully!");
    }
</script>

</body>
</html>
