

<?php include 'footer.php' ?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in touch wit us</title>
    <link rel="icon" href="images/Creative-PhotoRoom.png-PhotoRoom.png" type="image/png">
     <link href='https://unpkg.com/css.gg@2.0.0/icons/css/facebook.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/twitter.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b2e0a616b3.js" crossorigin="anonymous"></script>



</head>
<body>

      <h1><b>Get in touch with us</b></h1>


<div class="forrm">

    <form action="process.php" method="post">
        <div class="inputs">
        <label for="name"></label>
        <input type="text" class="actinput" name="name" required placeholder="Name">
      
        <label for="email"></label>
        <input type="email" class="actinput" name="email" required placeholder="Email">
      
        <label for="subject"></label>
        <input type="text" class="actinput" name="subject" required  placeholder="Subject">
      
        <label for="message"></label>
        <textarea class="actinput" name="message" required  placeholder="Message" ></textarea >
        </div>
       
        <button class="submitbtn"   name="submitbtn" >Submit</button >

     </form>

     </div>










<style>
    body {
  background-color: #0F2D49;
  color: #FFF; 
  font-family: Arial, sans-serif;
}

.forrm {
  max-width: 500px; 
  margin: 0 auto;
  padding: 20px;
  position: absolute;
  top: 20%;
  left: 30%;
  width: 500px;
}

.actinput {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: none;
  background-color: #FFF;
  color: #0F2D49;
}

.actinput:focus {
  outline: none;
  box-shadow: 0 0 5px #FFF; 
}

@keyframes fadeIn {
  0% {
      opacity: 0;
  }
  100% {
      opacity: 1;
  }
}

h1 {
  opacity: 0; 
  animation: fadeIn 9s ease-in-out forwards; 
}








  h1{
      color:rgb(202,216,3); 
      position: absolute;
      top: 10%;
      left: 35%;
      font: size 20px;

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
</style>







</body>
</html>
