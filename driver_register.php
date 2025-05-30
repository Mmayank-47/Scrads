<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scrads";


$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("INSERT INTO drivers (full_name, email, phone, license_number, vehicle_type, experience, region, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssiss", $fullName, $email, $phone, $licenseNumber, $vehicleType, $experience, $region, $hashedPassword);


$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$licenseNumber = $_POST['licenseNumber'];
$vehicleType = $_POST['vehicleType'];
$experience = intval($_POST['experience']); 
$region = $_POST['region'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
