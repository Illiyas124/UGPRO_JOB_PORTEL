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

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            .profile-card {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<!-- Navbar with welcome message and logout button -->
<div class="navbar">
    <span class="welcome-message">Welcome, <span id="student-welcome-name">Loading...</span></span>
    <button class="logout-button" onclick="logout()">Logout</button>
</div>

<div class="container">
    <h2>Undergraduate Profiles</h2>
    <div id="profiles-container" class="row"></div>
</div>

<script>
    // Users array (mock data)
    const users = [
        {
            name: "John Doe",
            course: "Computer Science",
            skills: "JavaScript, Python, HTML/CSS",
            projects: "Portfolio Website, Inventory Management System",
            github: "https://github.com/johndoe",
            linkedin: "https://linkedin.com/in/johndoe",
            profileImage: "../images/fl-2.png"
        },
        {
            name: "Jane Smith",
            course: "Software Engineering",
            skills: "Java, C++, SQL",
            projects: "Inventory Management, E-commerce Website",
            github: "https://github.com/janedoe",
            linkedin: "https://linkedin.com/in/janedoe",
            profileImage: "../images/fl-1.png"
        },
        {
            name: "Michael Smith",
            course: "Information Technology",
            skills: "PHP, MySQL, CSS",
            projects: "Blog Platform, Task Management System",
            github: "https://github.com/michaelsmith",
            linkedin: "https://linkedin.com/in/michaelsmith",
            profileImage: "../images/fl-4.png"
        }
    ];

    // Function to shuffle an array (randomize the order)
    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]]; // Swap elements
        }
        return array;
    }

    // Check if user is logged in and fetch user data
    const loggedInUser = JSON.parse(localStorage.getItem('user'));
    if (loggedInUser) {
        document.getElementById('student-welcome-name').textContent = loggedInUser.name;

        // Shuffle profiles before displaying
        const shuffledUsers = shuffleArray(users);

        // Create profile cards for all users
        shuffledUsers.forEach((user, index) => {
            const profileCard = document.createElement('div');
            profileCard.classList.add('col-md-4');
            profileCard.innerHTML = `
                <div class="profile-card">
                    <img src="${user.profileImage}" alt="${user.name}" class="profile-image">
                    <h3>${user.name}</h3>
                    <div class="profile-info">
                        <label>Course:</label> ${user.course}
                    </div>
                    <div class="profile-info">
                        <label>Skills:</label> ${user.skills}
                    </div>
                    <div class="profile-info">
                        <label>Projects:</label> ${user.projects}
                    </div>
                    <div class="social-media">
                        <a href="${user.github}" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                        <a href="${user.linkedin}" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
                    </div>
                </div>
            `;
            document.getElementById('profiles-container').appendChild(profileCard);
        });
    } else {
        alert("You are not logged in.");
        window.location.href = "signin_undergraduate.php"; // Redirect to sign-in page
    }

    // Logout function
    function logout() {
        localStorage.removeItem('user');
        window.location.href = "signin_undergraduate.php"; // Redirect to sign-in page
    }
</script>

</body>
</html>
