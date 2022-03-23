<?php
$email = $_POST['email'];

// $to_email = 'emilijab10@gmail.com';
$subject = 'CHROMAS - keisti slaptazodi';
$body = 'Spauskite nuoroda: http://www.chromas.com/keisti_slaptazodi';
$headers = 'From:chromas.info@gmail.com';

if (mail($email, $subject, $body, $headers)) {
    echo "Email successfully sent to $email...";
} else {
    echo "Email sending failed...";
}
?>