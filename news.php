<?php
    session_start();

    include("./configuration/config.php");
    include 'footer.php'; 

    if (!isset($_SESSION['valid'])) {
        header("Location: login.php");
    }

    $query = "SELECT * FROM blogs ORDER BY created_at DESC";
    $result = mysqli_query($connection, $query);

    $articles = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $articles[] = $row;
        }
    }

    if (isset($_GET['search'])) {
        $searchTerm = $_GET['search'];
        $searchQuery = "SELECT * FROM blogs WHERE content LIKE '%$searchTerm%'";
        $searchResult = mysqli_query($connection, $searchQuery);

        $searchArticles = [];
        if ($searchResult && mysqli_num_rows($searchResult) > 0) {
            while ($row = mysqli_fetch_assoc($searchResult)) {
                $searchArticles[] = $row;
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
    <title>Articles</title>
    <link rel="icon" href="images/Creative-PhotoRoom.png-PhotoRoom.png" type="image/png">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .search-form {
            position: relative;
            display: inline-block;
        }

        .search-input {
            padding-right: 40px;
        }

        .search-button {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            transition: transform 0.3s ease;
        }

        .search-button:hover {
            transform: translateY(-50%) rotate(360deg);
        
        }
    </style>
</head>

<body>
<div class="nav">
        <img src="images/Creative-PhotoRoom.png-PhotoRoom.png">
        <div class="logo">
            <p><a href="Home.php">ThriveMentor</a></p>
        </div>
        <div class="right-links">
            <ul>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Services.php">SERVICES</a></li>
                <li><a href="Coaches.php">COACHES</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="blogs.php">Add Blog</a></li>
                <li><a href="articles.php">View Blogs</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="./configuration/logout.php"></a></li>
            </ul>

        </div>
    </div>
    <form class="search-form" method="GET" action="">
    <input class="search-input" type="text" name="search" placeholder="Search">
    <button class="search-button" type="submit">
        <i class="fas fa-search"></i>
    </button>
</form>
    <?php if (empty($searchArticles)) {
            echo "<p class= 'message'>No blog matches your search.</p>";
        }
    
    if (isset($_GET['search']) && !empty($searchArticles)): ?>
        <h2>Search Results for '<?php echo $searchTerm; ?>'</h2>
        <?php foreach ($searchArticles as $article): ?>
            <div class="article">
                <h2>Author: <?php echo $article['author']; ?></h2>
                <p class="article-content"><?php echo $article['content']; ?></p>
                <p class="article-date">Published on: <?php echo $article['created_at']; ?></p>
                <hr>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!isset($_GET['search']) || empty($searchArticles)): ?>
        <h2>All Blogs</h2>
        <?php foreach ($articles as $article): ?>
            <div class="article">
                <h2>Author: <?php echo $article['author']; ?></h2>
                <p class="article-content"><?php echo $article['content']; ?></p>
                <p class="article-date">Published on: <?php echo $article['created_at']; ?></p>
                <hr>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    
    
</body>
 <style>
    body{
        height: 1300px;
    
    }
  .nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:white;
    padding: 10px;
    height: 200px;
}

.nav img {
   width: 150px;
}

.logo {
    color: white;
    font-size: 24px;
}

.logo a {
    text-decoration: none;
    color: white;
}
.right-links{
    background: #0F2D49;
    border-radius: 1.2em;
    margin: 40px;
    margin-right: 80px;
    height:65px;
    overflow: hidden;
}
.right-links ul {
    list-style: none;
    display: flex;
    flex-wrap: nowrap;
}

.right-links ul li {
    margin-right: 15px;
    white-space: nowrap;
}

.right-links ul li a {
    text-decoration: none;
    color: white;
    display: inline-block;
}

.right-links ul li a:hover {
    color: blue;
}


.right-links .btn {
    margin-left: 15px;
    padding: 8px 16px;
    background-color: white;
    color: #0F2D49;
    border: none;
    cursor: pointer;
}

.right-links .btn:hover {
    background-color: blue;
    color: white;
}
form{
    margin:50px;
}
.article {
        background-color:#0F2D49;
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        align-items: center;
        display:block;
    }

    .article h2 {
        font-size: 24px;
        margin-bottom: 10px;
        color: blue;
    }

    .article-content {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
        text-align: center;
    }

    .article-date {
        font-size: 14px;
        font-style: italic;
    }

    hr {
        border: none;
        border-top: 1px solid white;
        margin-top: 20px;
        margin-bottom: 10px;
        width: 100%;
    }
 </style>
</html>
