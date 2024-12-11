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

    <form onsubmit="signinUndergraduate(event)">
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

    function signinUndergraduate(event) {
        event.preventDefault();
        
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        const users = [
            {
                email: 'undergraduate@gmail.com',
                password: '1234',
                name: 'John Doe',
                course: 'Computer Science',
                skills: 'JavaScript, Python, HTML/CSS',
                projects: 'Portfolio Website, Inventory Management System',
                github: 'https://github.com/johndoe',
                linkedin: 'https://linkedin.com/in/johndoe',
                profileImage: 'https://via.placeholder.com/150'
            },
            {
                email: 'jane.doe@gmail.com',
                password: 'abcd',
                name: 'Jane Smith',
                course: 'Software Engineering',
                skills: 'Java, C++, SQL',
                projects: 'Inventory Management, E-commerce Website',
                github: 'https://github.com/janedoe',
                linkedin: 'https://linkedin.com/in/janedoe',
                profileImage: 'https://via.placeholder.com/150'
            },
            {
                email: 'michael.smith@gmail.com',
                password: 'xyz123',
                name: 'Michael Smith',
                course: 'Information Technology',
                skills: 'PHP, MySQL, CSS',
                projects: 'Blog Platform, Task Management System',
                github: 'https://github.com/michaelsmith',
                linkedin: 'https://linkedin.com/in/michaelsmith',
                profileImage: 'https://via.placeholder.com/150'
            }
        ];

        const user = users.find(u => u.email === email && u.password === password);

        if (user) {
            localStorage.setItem('user', JSON.stringify(user));
            window.location.href = "profile_undergraduate.php";
        } else {
            alert("Invalid email or password.");
        }
    }
</script>

</body>
</html>