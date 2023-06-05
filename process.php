<?php







if (isset($_POST['submitbtn'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    if (empty($message)) {
        $errors[] = "Message is required";
    }

   
    if (!empty($errors)) {
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
    } else {
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To:mentorthrive79@gmail.com  \r\n";
          $message = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";
         mail("mentorthrive79@gmail.com ", $subject, $message, $headers);
         header("Location: redirect.php");
           exit;

    }
}
