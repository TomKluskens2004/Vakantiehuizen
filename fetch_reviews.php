<?php
// Assuming you have a database connection established
$db_host = 'localhost';
$db_name = 'db_vakantiehuizen';
$db_user = 'root';
$db_pass = '';

// Create a PDO connection to the database
$db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch the reviews from the database
$query = $db->prepare("SELECT * FROM tbl_review");
$query->execute();
$reviews = $query->fetchAll(PDO::FETCH_ASSOC);

// Close the database connection
$db = null;

// Return the reviews as JSON
header('Content-Type: application/json');
echo json_encode($reviews);
exit;
?>
