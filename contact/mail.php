<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$connection = mysqli_connect("localhost", "root", "", "") or die("Connection failed");
$sql = "INSERT INTO user_info(Name,Email,Subject,Message) VALUES('{$name}','{$email}','{$subject}','{$message}')";
$result = mysqli_query($connection, $sql) or die("Query failed");
mysqli_close($connection);
echo'

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
        <h1>Thank you for contacting us. We will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="https://hitin.tech">homepage</a>.</p>
        
    </div>
</body>
</html>



';


?>
