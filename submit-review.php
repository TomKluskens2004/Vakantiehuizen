<?php
// Assuming you have a database connection established
$db_host = 'localhost';
$db_name = 'db_vakantiehuizen';
$db_user = 'root';
$db_pass = '';

// Create a PDO connection to the database
$db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Get the form data
$name = $_POST['name'];
$review = $_POST['review'];
$rating = $_POST['rating'];

// Prepare and execute the database query
$query = $db->prepare("INSERT INTO tbl_review (name, review, rating) VALUES (:name, :review, :rating)");
$query->bindParam(':name', $name);
$query->bindParam(':review', $review);
$query->bindParam(':rating', $rating);
$query->execute();

// Close the database connection
$db = null;


// Display a pop-up message after redirection
echo '<script>alert("Submitted Successfully!");</script>';
header('Location: house1.php');
exit;

?>
