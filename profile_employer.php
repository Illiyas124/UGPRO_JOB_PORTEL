<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Basic styling for layout */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            background-color: #1f4a40;
            padding: 10px;
            color: white;
        }

        .profile-container {
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 15px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-10px);
        }

        .profile-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .btn-assign {
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 8px 20px;
        }

        .btn-assign:hover {
            background-color: #005bb5;
        }

        .social-media a {
            margin-right: 10px;
            text-decoration: none;
            color: #0073e6;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .profile-card {
                margin: 10px 0;
            }

            .btn-assign {
                width: 100%;
            }
        }

        /* For small screens */
        @media (max-width: 576px) {
            .navbar {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<!-- Navbar with Logout Button -->
<div class="navbar">
    <h3>Welcome, Employer</h3>
    <button onclick="logout()" class="btn btn-light">Logout</button>
</div>

<!-- Profile Container -->
<div class="container profile-container">
    <h2>Undergraduate Profiles</h2>
    <div class="row" id="profiles-list">
        <!-- Profiles will be rendered here via JavaScript -->
    </div>
</div>

<script>
    const undergraduates = [
        {
            name: "John Doe",
            course: "Computer Science",
            skills: "JavaScript, Python, HTML/CSS",
            projects: "Portfolio Website, Inventory Management System",
            email: "johndoe@example.com",
            github: "https://github.com/johndoe",
            linkedin: "https://linkedin.com/in/johndoe",
            profileImage: "../images/fl-2.png"
        },
        {
            name: "Jane Smith",
            course: "Software Engineering",
            skills: "Java, C++, SQL",
            projects: "Inventory Management, E-commerce Website",
            email: "janesmith@example.com",
            github: "https://github.com/janesmith",
            linkedin: "https://linkedin.com/in/janesmith",
            profileImage: "../images/fl-1.png"
        },
        {
            name: "Michael Johnson",
            course: "Information Technology",
            skills: "PHP, MySQL, CSS",
            projects: "Blog Platform, Task Management System",
            email: "michaeljohnson@example.com",
            github: "https://github.com/michaeljohnson",
            linkedin: "https://linkedin.com/in/michaeljohnson",
            profileImage: "../images/fl-4.png"
        }
    ];

    function renderProfiles() {
        const profilesList = document.getElementById("profiles-list");
        profilesList.innerHTML = "";
        undergraduates.forEach((student) => {
            profilesList.innerHTML += `
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="profile-card text-center">
                        <img src="${student.profileImage}" alt="${student.name}" class="profile-img">
                        <h5>${student.name}</h5>
                        <p><strong>Course:</strong> ${student.course}</p>
                        <p><strong>Skills:</strong> ${student.skills}</p>
                        <p><strong>Projects:</strong> ${student.projects}</p>
                        <div class="social-media">
                            <a href="${student.github}" target="_blank">GitHub</a>
                            <a href="${student.linkedin}" target="_blank">LinkedIn</a>
                        </div>
                        <button class="btn-assign" onclick="assignJob('${student.email}')">Assign Job</button>
                    </div>
                </div>
            `;
        });
    }

    function assignJob(email) {
        fetch('http://localhost:3000/assign-job', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: email, jobDetails: 'Software Developer' })
        })
        .then(response => response.text())
        .then(data => alert(data))
        .catch(error => alert("Failed to send email"));
    }

    function logout() {
        localStorage.removeItem("employer");
        window.location.href = "signin_employer.php";
    }

    window.onload = function() {
        const employerData = localStorage.getItem("employer");
        if (!employerData) {
            window.location.href = "signin_employer.php"; // Redirect if not signed in
        } else {
            renderProfiles();
        }
    };
</script>

</body>
</html>
