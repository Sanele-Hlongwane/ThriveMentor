<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['book-now-btn'])) {
    
    $professionalId = 1;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $time = $_POST['time'];

    $professionals = [
        1 => 'samzampudi@gmail.com',
        2 => 'hlengiwezwane@gmail.com',
        3 => 'andiswao@gmail.com',
        4 => 'Lindiwenhlapo@gmail.com',
        5 => 'mpendulo@gmail.com',
        6 => 'livashmimoodely@gmail.com',
        7 => 'mpudisam@gmail.com',
        8 => 'kayleejulian@gmail.com',
    ];

   
    if (isset($professionals[$professionalId])) {
        $to = $professionals[$professionalId];
    } else {
      
      
        $to = 'mpudisam@gmail.com';
    }

    
    $subject = 'Booking Request';
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Preferred Time: $time\n";


    $headers = "From: $email\r\n";
    $headers .= "Reply-To:mentorthrive79@gmail.com  \r\n";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";
    mail("mentorthrive79@gmail.com ", $subject, $message, $headers);
    header("Location: redirect.php");
           exit;

}
    

?>
