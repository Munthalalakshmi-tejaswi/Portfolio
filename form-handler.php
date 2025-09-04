<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mltejaswi1@gmail.com";
    $subject = "Portfolio Contact Message";

    // Sanitize inputs
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message_content = htmlspecialchars(strip_tags(trim($_POST['message'])));

    $message = "Name: ".$name."\n";
    $message .= "Email: ".$email."\n";
    $message .= "Message: ".$message_content;

    $headers = "From: ".$email."\r\n";
    $headers .= "Reply-To: ".$email."\r\n";

    if(mail($to, $subject, $message, $headers)){
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again.'); window.location.href='index.html';</script>";
    }
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit;
}
?>
