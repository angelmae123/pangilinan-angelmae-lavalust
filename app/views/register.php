<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .register-container {
        background: white;
        width: 100%;
        max-width: 400px;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    }

    h1 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    label {
        display: block;
        text-align: left;
        margin-bottom: 6px;
        font-weight: bold;
        color: #444;
    }

    input {
        width: 100%;
        padding: 12px;
        margin-bottom: 18px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        outline: none;
    }

    input:focus {
        border-color: #555;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #333;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #555;
    }

    .message {
        text-align: center;
        margin-bottom: 15px;
    }

    .error {
        color: red;
    }

    .success {
        color: green;
    }

    .login-link {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #333;
        text-decoration: none;
    }

    .login-link:hover {
        text-decoration: underline;
    }
</style>
<body>
    <div class="register-container">
        <h1>Create Account</h1>
        <?php if (isset($error)): ?>
            <p class="message error">
                <?= $error ?>
            </p>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <p class="message success">
                <?= $success ?>
            </p>
        <?php endif; ?>

        <form action="<?= site_url('register') ?>" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <label for="passconfirm">Confirm Password:</label>
            <input type="password" name="passconfirm" id="passconfirm" required>
            <button type="submit">Register</button>
        </form>
        <a class="login-link" href="<?= site_url('login') ?>">Already have an account? Login</a>
    </div>
</body>
</html>