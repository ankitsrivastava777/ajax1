<?php
$conn = new mysqli('localhost','phpmyadmin','java@123','ankit_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM ankit_table ORDER BY id DESC LIMIT 5";

$run = mysqli_query($conn, $query);

while ($data = mysqli_fetch_assoc($run)) {

$d[] = $data;

}
$json = json_encode($d);

echo $json;





?>