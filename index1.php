<?php
$servername = "localhost";
$database = "exam";
$username = "root";
$password = "";

$plateNo = $_POST["PlateNo"];
$current = $_POST["Current"];
$target = $_POST["Target"];
$action = "To do";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "INSERT INTO car VALUES ('', '$plateNo', '$current', '$target', '$action')";
if (mysqli_query($conn, $sql)) {
    header("location: paint.php"); 
    
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>