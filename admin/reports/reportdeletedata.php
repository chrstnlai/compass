<?php
$host = "webdev.iyaserver.com";
$userid = "anikets";
$userpw = "AcadDev_Singh_6362298333";
$db = "anikets_compass";

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
    $reportID = $_REQUEST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM Reports WHERE reportID = ?";
    $stmt = $mysql->prepare($sql);
    $stmt->bind_param('i', $reportID);

    if ($stmt->execute()) {
        echo "Report with ID $reportID has been deleted successfully.";
    } else {
        echo "Error deleting report: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No report ID provided. Please try again.";
}

$mysql->close();
?>
