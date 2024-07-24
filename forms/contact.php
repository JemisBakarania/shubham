<?php
  $receiving_email_address = 'aeroastro.ssoni.95@gmail.com';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Subject and Headers
    $to = $receiving_email_address;
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
      echo json_encode(['success' => true, 'message' => 'Your message has been sent. Thank you!']);
    } else {
      echo json_encode(['success' => false, 'message' => 'There was a problem sending your message.']);
    }
  }
?>
