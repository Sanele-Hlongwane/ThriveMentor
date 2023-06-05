<?php
session_start();

include("./configuration/config.php");
//include 'footer.php';

$id = $_SESSION['id'];
                $query = mysqli_query($connection,"SELECT * FROM user WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_username = $result['username'];
                    $res_email = $result['email'];
                    $res_id = $result['id'];
                }


if(!isset($_SESSION['valid'])){
    header("Location: login.php");
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $blogContent = $_POST['blog'];

   
    $currentDateTime = date('Y-m-d H:i:s');

    
    $insertQuery = "INSERT INTO blogs (author, content, created_at) VALUES ('$res_username', '$blogContent', '$currentDateTime')";
    
    
    if(mysqli_query($connection, $insertQuery)){
        
        header("Location: news.php");
        exit();
    } else {
        
        echo "Error: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="icon" href="images/Creative-PhotoRoom.png-PhotoRoom.png" type="image/png">
 
    
</head>

<body>

    <h1>Post a Blog</h1>
    <form method="POST" action="">
        <textarea name="blog" rows="10" cols="50"></textarea>
        <br>
        <button class="submitbtn"   name="search" >Publish</button >
    </form>




</body>
 <style>

body{
  height: 1000px;
}
body {
        background-color: #0F2D49;
        color: #FFF;
        font-family: Arial, sans-serif;
        padding: 20px;
        flex-direction: column;
        height: 100vh;
    }

    h1 {
        font-size: 36px;
        margin-bottom: 20px;
        text-align: center;
        animation: slideInTop 1s ease-out;
        color: rgb(206, 200, 3);
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        animation: fadeIn 1s ease-in-out;
    }

    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        background-color:white;
        color:black;
        resize: none;

        font-size: 18px;
    }
  
button {
  --border-radius: 15px;
  --border-width: 4px;
  appearance: none;
  position: relative;
  padding: 1em 2em;
  border: 0;
  background-color:#0F2D49;
  font-family: "Roboto", Arial, "Segoe UI", sans-serif;
  font-size: 18px;
  font-weight: 500;
  color: #fff;
  z-index: 2;
  margin-top: 12px;
  overflow: hidden;
  cursor: pointer;
 }
 
 button::after {
  --m-i: linear-gradient(#000, #000);
  --m-o: content-box, padding-box;
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  padding: var(--border-width);
  border-radius: var(--border-radius);
  background-image: conic-gradient(
     #488cfb,
     #29dbbc,
     #ddf505,
     #ff9f0e,
     #e440bb,
     #655adc,
     #488cfb
   );
  -webkit-mask-image: var(--m-i), var(--m-i);
  mask-image: var(--m-i), var(--m-i);
  -webkit-mask-origin: var(--m-o);
  mask-origin: var(--m-o);
  -webkit-mask-clip: var(--m-o);
  mask-composite: exclude;
  -webkit-mask-composite: destination-out;
  filter: hue-rotate(0);
  animation: rotate-hue linear 500ms infinite;
  animation-play-state: paused;
 }
 
 button:hover::after {
  animation-play-state: running;
 }
 
 @keyframes rotate-hue {
  to {
   filter: hue-rotate(1turn);
  }
 }
 
 button,
 button::after {
  box-sizing: border-box;
 }
 
 button:active {
  --border-width: 5px;
 }










 @keyframes rotate-hue {
  to {
   filter: hue-rotate(1turn);
  }
 }
       
    

   
    @keyframes slideInTop {
        0% {
            transform: translateY(-100%);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
 </style>

</html>
