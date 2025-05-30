<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scrads";

$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("INSERT INTO advertisers (brand_name, product_name, username, password, duration, region, charges) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssiss", $brandName, $productName, $username, $hashedPassword, $duration, $region, $charges);

$brandName = $_POST['brandName'];
$productName = $_POST['productName'];
$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$duration = intval($_POST['duration']);
$region = $_POST['region'];
$charges = $_POST['charges'];

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
