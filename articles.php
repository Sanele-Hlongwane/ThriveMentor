<?php
session_start();

if (isset($_POST['submit'])) {
    include("./configuration/config.php");

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = $_POST['password'];

    $result = mysqli_query($connection, "SELECT * FROM user WHERE email='$email'") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if (is_array($row) && !empty($row)) {
        $hashed_password = $row['password'];

        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['valid'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            mysqli_close($connection);
            header("Location: Home.php"); 
            exit;
        } else {
            echo "<div class='message'>
                    <p>Wrong Password. Try again</p>
                </div>";
        }
    } else {
        echo "<div class='message'>
                <p>Email not registered</p>
            </div>";
    }

    mysqli_close($connection);
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel="icon" href="images/Creative-PhotoRoom.png-PhotoRoom.png" type="image/png">
    <style>
       body {
            background-image: url("./Images/spiral.webp");
            background-size: cover;
            background-position: center;
            animation: movingBackground 20s linear infinite;
        }

        @keyframes movingBackground {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            
        }
        
        .box {
            width: 400px;
            padding: 40px;
            background-color: #000;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8); 
            background: #0F2D49;
        }
        
        .box header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .box .field {
            margin-bottom: 20px;
        }
        
        .box label {
            display: block;
            margin-bottom: 5px;
        }
        
        .box input[type="text"],
        .box input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
        }
        
        .box .btn {
            width: 25%;
            padding: 10px;
            font-size: 18px;
            background-color: #fff;
            color: #000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            position: center;
        }
        
        .box .btn:hover {
            background-color: lawngreen;
            color: #fff;
        }
        
        .box .links {
            margin-top: 20px;
        }
        
        .box .links a {
            color: orange;
        }
        
        .box .links a:hover {
            color: lawngreen;
            
        }

        .message {
        background-color: darkgray;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #FF9999;
        border-radius: 4px;
        color: black; 
        font-weight: bold;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required >
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have an account? <a href="signin.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
