<?php
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $msg = $_POST['message'];
    
    // Validate the form data (you can add more validation as needed)
    if (empty($service) || empty($email) || empty($phone)) {
        // Handle the case when required fields are missing
        echo "Please fill in all the required fields.";
        exit;
    }
    
    // Set up the email details
    $to = "ivandiazmtz@gmail.com";
    $subject = "Tienes una nueva forma enviada";
    $message = "Nombre: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Teléfono: " . $phone . "\n";
    $message .= "Comentarios: " . $msg . "\n";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
?>
