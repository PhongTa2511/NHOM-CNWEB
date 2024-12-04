<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .login-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 350px;
            padding: 30px;
            text-align: center;
        }

        .login-container h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .login-container label {
            font-size: 14px;
            font-weight: 600;
            color: #555;
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        .login-container input:focus {
            outline: none;
            border-color: #6a11cb;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.2);
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background: #6a11cb;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .login-container button:hover {
            background: #2575fc;
            transform: scale(1.05);
        }

        .login-container .forgot-password {
            font-size: 12px;
            color: #6a11cb;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        .login-container .forgot-password:hover {
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 400px) {
            .login-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="dashboard.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit">Login</button>

            <a href="#" class="forgot-password">Forgot Password?</a>
        </form>
    </div>
</body>
</html>
