 var thrivebotBtn = document.getElementById("thrivebot-btn");
    var thrivebot2Btn = document.getElementById("thrivebot2-btn");
    var chatbotContainer = document.getElementById("chatbot-container");
    
   
    function redirectToChat() {
      window.location.href = "chat.php";
    }
    
    
    function redirectToExample() {
      window.alert("Are you sure you wanna leave?");  

      window.location.href = "thrivebot.php";
    }
    
   
    function loadThriveBot() {
      
      chatbotContainer.innerHTML = "";
      
      
      
      chatbotContainer.innerHTML = "Loading....";
    }
    
   
    function loadThriveBot2() {
      
      chatbotContainer.innerHTML = "";
  
      
      chatbotContainer.innerHTML = "Loading....";
    }
    
    
    thrivebotBtn.addEventListener("click", redirectToChat);
    thrivebot2Btn.addEventListener("click", redirectToExample);

