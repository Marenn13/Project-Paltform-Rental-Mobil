<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
      
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom, #87CEFA, #EAEAEA);
            font-family: Arial, sans-serif;
            flex-direction: column;
        }
        .logo {
            margin-bottom: 20px;
        }
        .login-container {
            background-color: #FBFBF9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .login-container input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #002060;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container button:hover {
            background-color: #003399;
        }
        .login-container .forgot-password {
            display: block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }
        .login-container .forgot-password:hover {
            text-decoration: underline;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
   
</head>
<body>
    <img src="../images/nologo.png" alt="logo" class="logo" style="width: 150px; height: auto;">
    <div class="login-container">
        <h1>LOGIN</h1>
        <form action="../Controller/LoginController.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <button type="submit">Login</button>
        </form>
        <a href="../Views/registrasiViews.php" class="forgot-password">Belum punya akun? Daftar disini</a>
        <?php if (isset($error)): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
