<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $msg = $_POST['message'];

    echo "Form submitted successfully!";
    
    // Validate the form data
//     if (empty($service) || empty($email) || empty($phone)) {
//         // Handle the case when required fields are missing
//         echo "Please fill in all the required fields.";
//         exit;
//     }
    
//     // Set up the email details
//     $to = "ivandiazmtz@gmail.com";
//     $subject = "Tienes una nueva forma enviada";
//     $message = "Nombre: " . $name . "\n";
//     $message .= "Email: " . $email . "\n";
//     $message .= "Teléfono: " . $phone . "\n";
//     $message .= "Comentarios: " . $msg . "\n";
//     $headers = "From: " . $email . "\r\n" .
//                "Reply-To: " . $email . "\r\n" .
//                "X-Mailer: PHP/" . phpversion();
    
//     // Send the email
//     if (mail($to, $subject, $message, $headers)) {
//         echo "Thank you! Your message has been sent.";
//     } else {
//         echo "Oops! Something went wrong. Please try again later.";
//     }
} else {
    // Handle the case when the form is not submitted
    echo "Form submission error.";
}
?>
