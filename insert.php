<?php

// $con = "mysqli_connect()";
// if ($con) {
// 	echo "connect";
// }

$name = $_POST['name'];

$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];

// Create connection
$conn = new mysqli('localhost','phpmyadmin','java@123','ankit_db');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql =  "INSERT INTO ankit_table (name, email, message, date)
VALUES ('$name', '$email', '$message', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// // $query = "INSERT INTO `ankit_table`(`name`, `email`, `message`, `date`) VALUES ('ankit','csdf@g.com','fvgverg','dvsvd')";

// $run = mysqli_query($con, $query);

// if ($run) {
// 	echo "run";
// }else
// {
// 	echo "stop";
// }
?>