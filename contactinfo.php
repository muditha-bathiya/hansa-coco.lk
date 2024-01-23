<?php
require_once('inc/connection.php');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "INSERT INTO `registration`(`r_name`, `r_username`, `r_password`) VALUES ('{$name}', '{$username}', '{$password}')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo '<script>alert("Successfully Registered");</script>';
        header('Location: contactus.php'); // Use Location to redirect to another page
    } else {
        echo '<script>alert("Error: ' . mysqli_error($connection) . '");</script>';
        echo 'Query: ' . $query;  // Add this line to display the actual query being executed
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HansaCoco/Registration</title>
    <link rel="stylesheet" href="./css/contactinfo.css">
</head>
<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="contactinfo.php" method="post">

            <div class="input-box">
                <input type="text" placeholder="Enter your name" required name="name">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your username" required name="username">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Create password" required name="password">
            </div>
            <div class="policy">
                <input type="checkbox">
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Register Now" name="submit">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="login.php">Login now</a></h3>
            </div>
        </form>
    </div>
</body>
</html>
