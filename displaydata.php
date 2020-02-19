<?php
$conn = new mysqli('localhost','phpmyadmin','java@123','ankit_db');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM ankit_table ORDER BY id DESC LIMIT 5";
$run = mysqli_query($conn, $query);

while ($data = mysqli_fetch_assoc($run)) {
	?>
	<tr>
<td><?php echo $data['id'];?></td>
<td> <?php echo $data['name'];?></td>
<td><?php echo $data['email'];?> </td>
<td> <?php echo $data['message'];?></td>
<td> <?php echo $data['date'];?></td>
   </tr>
<?php
}



?>