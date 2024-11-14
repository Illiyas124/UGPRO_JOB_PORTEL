


const express = require('express');
const nodemailer = require('nodemailer');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Body parser middleware to parse incoming JSON data
app.use(bodyParser.json());

// Nodemailer transporter setup (using Gmail here, but other services can be used)
const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: 'your-email@gmail.com', // replace with your email
        pass: 'your-email-password' // replace with your email password (use OAuth2 for production)
    }
});

// API endpoint to handle the job assignment and email sending
app.post('/assign-job', (req, res) => {
    const { email, jobDetails, subject, message } = req.body;

    const mailOptions = {
        from: 'your-email@gmail.com', // sender address
        to: email, // recipient's email
        subject: subject, // email subject
        text: message + `\nJob Details: ${jobDetails}` // email body
    };

    // Send email using the Nodemailer transporter
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            console.log(error);
            return res.status(500).send("Failed to send email");
        }
        console.log('Email sent: ' + info.response);
        res.send("Email sent successfully!");
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
