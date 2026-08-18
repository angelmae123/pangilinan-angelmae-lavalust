<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        body {
            margin: 0.6rem;
            padding: 2rem;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background-image: url('https://i.pinimg.com/736x/e7/f2/57/e7f2570ce85049bcc7de8012cae4cff2.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.7;
            z-index: -1;
        }
        h1 {
            font-family: "Times New Roman", sans-serif;
            margin-bottom: 1rem;
            margin-top: 1rem;
            font-size: 2.9rem;
            color: #333;


        }

        h3 {
            font-family: Arial, sans-serif;
            font-size: 1.1rem;
            color: #333;
            padding-bottom: 10px;
        }

        p {
            font-size: 1.3em;
            color: #472c2c;
            padding: 3px;
            margin: 10px 0;
        }

    </style>
</head>

<body>
    <a href="<?= site_url('student'); ?>" style="margin-top: 0.6rem; font-size: 1.1rem; color: #ffffff; text-decoration: none;border: 1px solid #1c2c3c; padding: 5px 10px; border-radius: 5px;background-color: #172b3e;">Go to Home</a>
    <h1>Student Information</h1>

    <h3>This is the student profile page. 
    Below are the student's personal and academic information.</h3>
<div style="border: 1px solid #210874; margin-left: 70px; margin-right: 70px; padding: 12px; border-radius: 5px; background-color: #f9fbfd; box-shadow: 0 0 10px #210874;">
    <p><strong>Student ID:</strong> <?= $student['student_id']; ?></p>
    <p><strong>Name:</strong> <?= $student['name']; ?></p>
    <p><strong>School:</strong> <?= $student['school']; ?></p>
    <p><strong>Course:</strong> <?= $student['course']; ?></p>
    <p><strong>Year:</strong> <?= $student['year']; ?></p>
    <p><strong>Section:</strong> <?= $student['section']; ?></p>
    <p><strong>Contact Number:</strong> <?= $student['contact']; ?></p>
    <p><strong>Email:</strong> <?= $student['email']; ?></p>
    <p><strong>Address:</strong> <?= $student['address']; ?></p>
    <p><strong>Hobby:</strong> <?= $student['hobby']; ?></p>
    <p>
        <strong>Social Media:</strong>
        <a href="<?= $student['socmed']; ?>" 
        target="_blank"
        style="color: #000000; 
                text-decoration: none; 
                border: 1px solid #1c2c3c; 
                border-radius: 5px;
                padding: 5px 10px;">
            Facebook
        </a>
    </p>
</div>
</body>
</html>