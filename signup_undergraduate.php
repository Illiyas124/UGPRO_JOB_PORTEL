<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UgPro - Sign Up</title>
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
            background-color: #fafafa; /* UgPro theme background color */
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
            background-color: #1f4a40; /* Logo background color */
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
        .signup-button {
            width: auto;
            padding: 12px 40px;
            font-size: 1.2em;
            background-color: #0073e6; /* Primary theme color */
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-top: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .social-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .social-buttons button {
            flex: 1;
            padding: 10px;
            font-size: 1em;
            margin: 0 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }
        .linkedin {
            background-color: #0077b5;
        }
        .google {
            background-color: #db4437;
        }
        .signin-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
        }
        .signin-link a {
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
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/logo.png" width="200" height="200" alt="UgPro Logo" class="me-2">      
        </a>
        <strong class="ugpro-logo">UgPro</strong>
    </div>
    <div class="right">
        <h2>Sign up to UgPro</h2>
        <form>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Create a password" required>
            </div>
            <button type="submit" class="signup-button">Sign Up</button>
        </form>

        <div class="divider">
            <span>OR</span>
        </div>

        <div class="social-buttons">
            <button class="linkedin"><i class="bi bi-linkedin"></i> LinkedIn</button>
            <button class="google"><i class="bi bi-google"></i> Google</button>
        </div>

        <div class="signin-link">
            <p>Already have an account? <a href="signin_undergraduate.php">Sign in</a></p>

        </div>
    </div>
</div>

</body>
</html>