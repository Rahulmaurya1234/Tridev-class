<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // ईमेल भेजने की सुविधा (Optional)
    $to = "your-email@example.com"; // अपना ईमेल डालें
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);

    echo "आपका संदेश सफलतापूर्वक भेज दिया गया!";
}
?>
