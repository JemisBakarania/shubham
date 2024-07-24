<?php
// Get the raw POST data
$data = json_decode(file_get_contents('php://input'), true);

// Define the file path
$file = 'data.txt';

// Convert the data array to a string
$dataString = "Name: " . $data['name'] . "\n" .
              "Email: " . $data['email'] . "\n" .
              "Subject: " . $data['subject'] . "\n" .
              "Message: " . $data['message'] . "\n\n";

// Write data to the file
file_put_contents($file, $dataString, FILE_APPEND);

// Return a response
echo "Data saved successfully.";
?>
