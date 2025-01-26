<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1c1e3a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }
        .login-container {
            text-align: center;
            background-color: #2b2e5d;
            border-radius: 10px;
            padding: 40px;
            width: 350px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }
        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
        }
        .login-container input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        .login-container input[type="nama"],
        .login-container input[type="password"] {
            background-color: #44476d;
            color: white;
        }
        .login-container input[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Welcome!</h1>
        <form action="tugasportofoliohasil.php" method="get">
            <input type="nama" name="nama" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Log In">
        </form>
        <a href="#">Forgot your password?</a>
    </div>
</body>
</html>
