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

if (isset($_REQUEST['id'])) {
    $reviewID = $_REQUEST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM Reviews WHERE reviewID = ?";
    $stmt = $mysql->prepare($sql);
    $stmt->bind_param('i', $reviewID);

    if ($stmt->execute()) {
        echo "Review with ID $reviewID has been deleted successfully.";
    } else {
        echo "Error deleting review: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No review ID provided. Please try again.";
}

$mysql->close();
?>
