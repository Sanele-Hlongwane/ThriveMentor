<?php

  
    session_start();

    include("./configuration/config.php");
    include 'footer.php';

    if(!isset($_SESSION['valid'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">]
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://kit.fontawesome.com/b2e0a616b3.js" crossorigin="anonymous"></script>
    <title>Profile</title>
    <link rel="icon" href="images/Creative-PhotoRoom.png-PhotoRoom.png" type="image/png">
</head>

<body>
    <div class="nav">
        <img src="images/Creative-PhotoRoom.png-PhotoRoom.png " style="width: 120px;">
        <div class="logo">
           
        </div>
        <div class="right-links">
            <ul>
                <li><a href="Home.php">HOME</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Services.php">SERVICES</a></li>
                <li><a href="Coaches.php">COACHES</a></li>
                <?php

                $id = $_SESSION['id'];
                $query = mysqli_query($connection,"SELECT * FROM user WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_username = $result['username'];
                    $res_email = $result['email'];
                    $res_id = $result['id'];
                }

                echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
                echo "<a href='delete.php?Id=$res_id'><button class = 'btn-del'>Delete User</button></a>"
        ?>

                <a href="contact.php"><button class="btn">Contact Us</button></a>
                <a href="./configuration/logout.php"><button class="btn">Log Out</button></a>
            </ul>





        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_username?></b>, Welcome Your email is <b><?php echo $res_email?></b>.
                    </p>
                </div>

            </div>
        </div>
    </main>
    
    <style>

.right-links{
  background: #0f2d49;
  border-radius: 1.2em;
  height: 65px;
}

  </style>









</body>

</html>
