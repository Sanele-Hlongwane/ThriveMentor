

<?php        include'footer.php'   ?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk to one of our ChatBots</title>
    <link rel="icon" href="images/Creative-PhotoRoom.png-PhotoRoom.png" type="image/png">
    
</head>
<body>

<main>

      <section>
  <div class="chatarea">
    <h1>Our ChatBots</h1>
    <p>Chat with one of our ChatBots to receive help with issues relating to mental health and wellness</p>
  
    <div class="chat-container">
      <div class="chat">
        <img src="Images/chat1.jpg" alt="">
        <button id="thrivebot-btn" onclick="window.location.href='chat.php'"  class="redibtn"  >ThriveMentorBot</button>
      </div>
  
      <div class="chat">
        <img src="Images/chat2.jpg" alt="">
        <button id="thrivebot2-btn"   class="redibtn"  onclick="window.location.href='thrivebot.php'">ThriveMentorBot2</button>
      </div>
    </div>
  
    <div id="chatbot-container"></div>
  </div>
  

  </section>

 
  </main>

  




<!---

  <footer class="footer-distributed">




         













<div class="footer-left">
    <h3>Thrive <span>Mentor.io</span></h3>
    <p class="footer-icons">


<a href="https://www.linkedin.com/company/thrivementor/?viewAsMember=true"><i class="fa fa-linkedin"></i></a>    
<a href="https://twitter.com/ThriveMentor"><i class="gg-twitter"></i></a>

<a href="https://www.facebook.com/profile.php?id=100093026431060"><i class="fa fa-facebook"></i></a>



     
     

</p>
    <p class="footer-links">
        <a href="Home.php">Home</a>
        |
        <a href="About.php">About</a>
        |
        <a href="Services.php">Services</a>
        |
        <a href="Coaches.php">Coaches</a>
        |
        <a href="profile.php">Profile</a>
        
    </p>
   
    <p class="footer-company-name">Copyright <span> &copy;</span> 2023 <b>ThriveMentor.io</b> All rights
        reserved</p>
</div>
<div class="footer-center">
    <div>
        <i class="fa-solid fa-location-dot"></i>
        <p><span>UJ Bunting Road</span>Auckland  Park</p>
    </div>
    <div>
        <i class="fa fa-phone"></i>
        <p>011 559 4555</p>
    </div>
    <div>
        
        <i class="fa-regular fa-envelope" style="color: #ffff;"></i>

        <p> mentorthrive79@gmail.com</p>
    </div>
   

</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
        <b>ThriveMentor.io</b> is a website that is built for people in need of help and willing to be assisted dealing with their issues
    </p>
</div>





</footer>
--->
</body>
 <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap");

   body{
    background:#0F2D49;
    font-family: "Poppins", "sans-serif";
     
   }
.chatarea{
  margin: 20px 0;
}
.chatarea h1 {
  position: absolute;
  top: 70px;
  left: 610px;
  color: #b9b901;
}
.chatarea p{
  position: absolute;
  top:150px;
  left:350px;
  color: aliceblue;
}
.chat-container {
  display: flex;
  justify-content:center;
  gap: 200px;
  margin-top: 300px;
  margin-bottom: 500px;
}

.chat {
  display: flex;
  line-height: 20%;
  flex-direction: column;
  align-items: center;
  text-align: center;
  
}

.chat img {
  width: 250px;
  height: 250px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 10px;
}

.redibtn {
  width: 140px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 0px 15px;
  background-color: red;
  border-radius: 10px;
  border: none;
  color: white;
  position: relative;
  cursor: pointer;
  font-weight: 900;
  transition-duration: .2s;
  background: linear-gradient(0deg, #000, #272727);
}

.redibtn:before,
.redibtn:after {
  content: '';
  position: absolute;
  left: -2px;
  top: -2px;
  border-radius: 10px;
  background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000);
  background-size: 400%;
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  z-index: -1;
  animation: steam 20s linear infinite;
}

@keyframes steam {
  0% {
    background-position: 0 0;
  }

  50% {
    background-position: 400% 0;
  }

  100% {
    background-position: 0 0;
  }
}

.redibtn:after {
  filter: blur(50px);
}
 section{
  margin-bottom: 200px;
 }
 footer{
    position:fixed;
  bottom: 0%;
    width: 100%;
    height: 25%;
}
.footer-distributed{
    background-color: #292c2f;
    box-sizing: border-box;
    widows: 100%;
    text-align: left;
    font: bold 10px sans-serif;
    padding: 5px 5px 5px 5px;
    margin-top: 50px;
}
.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
    display: inline-block;
    vertical-align: top;
}
.footer-distributed .footer-left{
    width: 30%;
}
.footer-distributed h3{
    color: #ffff;
    font: normal 36px 'cookie',cursive;
    margin: 0;
}
.footer-distributed h3 span{
    color: #ccbf90;
    font: normal 36px 'cookie',cursive;
}
.footer-distributed .footer-links{
    color: #ffff;
    margin: 20px 0 12px;
}
.footer-distributed .footer-links a{
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}
.footer-distributed .footer-company-name{
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}
.footer-distributed .footer-center{
    width: 35%;
}
.footer-distributed .footer-center i{
    background-color: #33383b;
    color: #ffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}
.footer-distributed .footer-center i .fa-envelop{
    font-size: 10px;
    line-height: 38px;
}
.footer-distributed .footer-center p{
    display: inline-block;
    color: #ffff;
    vertical-align: middle;
    margin: 0;
}
.footer-distributed .footer-center p span{
    display:block;
    font-weight: normal;
    font-size:14px;
    line-height:2;
}
.footer-distributed .footer-center p a{
    color:  #5383d3;
    text-decoration: none;
}
.footer-distributed .footer-right{
    width: 30%;
}
.footer-distributed .footer-company-about{
    line-height: 20px;
    color: #ffff;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}
.footer-distributed .footer-company-about span{
    display: block;
    color:  #5383d3;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}
.footer-distributed .footer-icons{
    margin-top: 25px;
    display: block;
}
.footer-distributed .footer-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color:  #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}
.footer-distributed .footer-icons a:hover{
    background-color: #3f71ea;
}
.footer-links a:hover{
    color: #3f71ea;
}

   
 </style>
 
<script src="two.js"></script>
</html>
