<?php
include 'dbConnect.php';

// Krijo objektin e klasës dbConnect
$dbConnection = new dbConnect();
$conn = $dbConnection->connectDB(); // Lidhu me bazën e të dhënave duke përdorur metodën connectDB()

// Kontrollo nëse forma është dërguar
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Përgatitni dhe ekzekutoni query-in për të shtuar të dhënat në bazën e të dhënave
    $sql = "INSERT INTO contact_us (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    if ($stmt->execute()) {
        echo "Të dhënat u ruajtën me sukses.";
    } else {
        echo "Gabim gjatë ruajtjes së të dhënave: " . $stmt->errorInfo()[2];
    }
}

// Mbylli lidhjen me bazën e të dhënave
$conn = null;
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Contact Me</h1>
        <p>Feel free to contact us and we will get back to you as soon as we can.</p>
        <form action="mail.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
