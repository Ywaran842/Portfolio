<?php
// Database connection parameters
$servername = "mysql.selfmade.ninja";
$username = "yokesh";
$password = "Ywaran842($)";
$database = "yokesh_auth";

// Establish database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Read the image file as binary data
$image_path = "/home/ywaran842/htdocs/portfolio/downloaded_file1.jpg";
$image_data = file_get_contents($image_path);

// Prepare SQL query
$sql = "INSERT INTO images (name, image_data) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters and execute query
mysqli_stmt_bind_param($stmt, "ss", $name, $image_data);

$name = "photogram"; // Set the image name
mysqli_stmt_execute($stmt);

echo "Image inserted successfully";

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
