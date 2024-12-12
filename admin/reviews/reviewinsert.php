<?php
$host = "webdev.iyaserver.com";
$userid = "anikets";
$userpw = "AcadDev_Singh_6362298333";
$db = "anikets_compass";

// Check if the user is logged in and has a valid security level
if (!isset($_SESSION['securityLevel']) || $_SESSION['securityLevel'] != 2) {
    // If the user is not authorized, redirect them to a login page or show an error
    header("Location: signin.php"); // Redirect to login page
    exit(); // Stop further execution of the script
}

// Database connection
$mysql = new mysqli($host, $userid, $userpw, $db);

if ($mysql->connect_errno) {
    echo "db connection error: " . $mysql->connect_error;
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $reviewerID = trim($_POST['reviewerID']);
    $revieweeID = trim($_POST['revieweeID']);
    $reviewType = trim($_POST['reviewType']);
    $rating = trim($_POST['rating']);
    $comment = trim($_POST['comment']);
    $createdAt = trim($_POST['createdAt']);  // Value from the form

    // Convert createdAt to MySQL DATETIME format
    $createdAt = str_replace('T', ' ', $createdAt); // Replace 'T' with space

    // Validate required fields
    if (empty($reviewerID) || empty($revieweeID) || empty($reviewType) || empty($rating) || empty($comment) || empty($createdAt)) {
        echo "All fields are required. Please fill out all fields.";
        exit();
    }

    // Prepare the SQL query
    $sql = "INSERT INTO Reviews (reviewerID, revieweeID, reviewType, rating, comment, createdAt) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $mysql->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $mysql->error;
        exit();
    }

    // Bind parameters
    $stmt->bind_param('iisiss',
        $reviewerID,
        $revieweeID,
        $reviewType,
        $rating,
        $comment,
        $createdAt
    );

    // Execute the query
    if ($stmt->execute()) {
        echo "Review added successfully!";
    } else {
        echo "Error inserting review: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$mysql->close();
?>
