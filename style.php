
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $subject = "Student Registration";
    $from = "taiwoomosehin6@gmail.com";
    $to = "taiwoomosehin6@gmail.com";

    // Message body
    $message = "First Name: $fname\n";

    // Proper headers
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $to\r\n";
    #$headers .= "X-Mailer: PHP/" . phpversion();

    // Send mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Sent successfully";
    } else {
        echo "Not successfully sent";
    }
}
?>
