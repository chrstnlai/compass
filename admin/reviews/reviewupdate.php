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

$mysql = new mysqli(
    $host,
    $userid,
    $userpw,
    $db
);

if ($mysql->connect_errno) {
    echo "db connection error: " . $mysql->connect_error;
    exit();
}

// Get 'id' parameter from form submission
if (isset($_POST['id'])) {
    $reviewID = $_POST['id'];
    $reviewerID = $_POST['reviewerID'];
    $revieweeID = $_POST['revieweeID'];
    $reviewType = $_POST['reviewType'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $createdAt = $_POST['createdAt']; // The 'createdAt' will be saved as a string in the correct datetime format

    // Prepare the update query
    $sql = "UPDATE Reviews SET 
                reviewerID = ?, 
                revieweeID = ?, 
                reviewType = ?, 
                rating = ?, 
                comment = ?, 
                createdAt = ? 
            WHERE reviewID = ?";

    $stmt = $mysql->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $mysql->error;
        exit();
    }

    // Bind parameters and execute the update query
    $stmt->bind_param('iisissi',
        $reviewerID,
        $revieweeID,
        $reviewType,
        $rating,
        $comment,
        $createdAt,
        $reviewID
    );

    if ($stmt->execute()) {
        echo "Review with ID $reviewID has been updated successfully.";
    } else {
        echo "Error updating review: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No review ID provided.";
}

$mysql->close();
?>
