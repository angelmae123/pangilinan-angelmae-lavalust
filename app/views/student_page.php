<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home Page</title>

    <style>
  body {
            margin: 20px;
            padding: 10rem 2rem 5rem 2rem;
            justify-content: center;
            text-align: center;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background-image: url('https://i.pinimg.com/736x/ca/86/e3/ca86e35d780c07cbebcde2f74f7c84ce.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.6;
            z-index: -1;
        }

        h1 {
            font-family: "Times New Roman", sans-serif;
            font-size: 3.5rem;
            color: #060606;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.2rem;
            color: #181212;
            margin-bottom: 2rem;
        }

        a {
            font-size: 1.2rem;
            margin: 0 10px;
            text-decoration: none;
            color: #f9fbfd;
            border: 1px solid #210874;
            background-color: #210874;
            padding: 5px 10px;
            border-radius: 5px;
        }
        a:hover {
            box-shadow: 0 0 10px #210874;
        }
    </style>
</head>

<body>

    <h1>Student Home Page</h1>

    <p>Hi there! Welcome to student home page.</p>

    <a href="<?= site_url('student'); ?>"
    style="font-size: 1.1rem; color: #ffffff; text-decoration: none;border: 1px solid #1c2c3c; padding: 5px 10px; border-radius: 5px;background-color: #172b3e;">Go to Home</a>
    |
    <a href="<?= site_url('student/profile'); ?>" style="font-size: 1.1rem; color: #ffffff; text-decoration: none;border: 1px solid #210874; padding: 5px 10px; border-radius: 5px;background-color: #210874;">Student Profile</a>

</body>
</html>