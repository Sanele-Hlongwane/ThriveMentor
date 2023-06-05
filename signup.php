<?php
    session_start();
    include("./configuration/config.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if ($password != $password2) {
            echo "<div class='message'>
                       <p>Passwords do not match, please try again.</p>
                    </div><br>";
        } else {
            $verify_query = mysqli_query($connection, "SELECT email FROM user WHERE email='$email'");
            if(mysqli_num_rows($verify_query) != 0){
                echo "<div class='message'>
                    <p>This email is already registered, please use another one.</p>
                </div><br>";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                mysqli_query($connection, "INSERT INTO user(username,email,password) VALUES ('$username','$email','$hashed_password')") or die("Error Occurred");
                header("Location: login.php");
                exit;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up</title>
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

    .box {
        width: 400px;
        padding: 40px;
        background-color:#0F2D49;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        color: #fff;
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

    .box .field a:hover {
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
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="password2" id="password2" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" required>
                    <p id="terms-message" class="message" style="display: none;">Please accept the Terms and Conditions to continue.</p>
                </div>

                <div class="field checkbox">
                    <label for="terms">I agree to the <a href="terms-and-conditions.html" target="_blank">Terms and Conditions</a>  :  <input type="checkbox" id="terms" name="terms" required> </label>
                </div>

                <div class="links">
                    Already have an account? <a href="login.php">Sign In Here</a>
                </div>

            </form>
        </div>
    </div>

    <script>
        var termsCheckbox = document.getElementById('terms');
        var messageElement = document.getElementById('terms-message');
        function handleCheckboxChange() {
            if (termsCheckbox.checked) {
                messageElement.style.display = 'none';
            } else {
                messageElement.style.display = 'block';
            }
        }
        termsCheckbox.addEventListener('change', handleCheckboxChange);
</script>
    
</body>
</html> 
