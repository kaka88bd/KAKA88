<?php
session_start();
include 'db.php';
include 'config.php';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password']; // Don't escape password to keep hash intact
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<html>
<head><!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BF6KFMQHLG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BF6KFMQHLG');
</script><title>Login - KAKA88 Casino</title>
<meta name="description" content="Login to your KAKA88 Casino account to play and win real cash.">
<meta name="robots" content="index, follow">
    <title>Login - KAKA88</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: #111;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 0;
            margin: 0;
        }
        .banner {
            width: 100%;
            height: 150px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url('images/banner.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .logo {
            text-align: center;
        }
        .logo img {
            max-height: 80px;
        }
        form {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.4);
            margin-top: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: #333;
            color: #fff;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #ff4500, #ff6a00);
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: linear-gradient(45deg, #e03e00, #ff5500);
        }
        .register-link, .forgot-password-link {
            margin-top: 15px;
            font-size: 14px;
            color: #ccc;
            text-align: center;
        }
        .register-link a, .forgot-password-link a {
            color: #00bfff;
            text-decoration: none;
        }
        .register-link a:hover, .forgot-password-link a:hover {
            text-decoration: underline;
        }
        .error {
            background: #ff4d4d;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            color: #fff;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="banner">
    <div class="logo">
        <img src="images/logo.png" alt="KAKA88 Logo">
    </div>
</div>

<h2>Login</h2>

<?php if (!empty($error)) { echo "<div class='error'>$error</div>"; } ?>

<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
<div class="register-link">
    Don't have an account? <a href="register.php">Register</a>
</div>

<div class="forgot-password-link">
    <a href="forgot_password.php">Forgot Password?</a>
</div>
<?php
if (!empty($error)) {
    echo "<p style='color: red;'>$error</p>";
}
?>
</body>
</html>