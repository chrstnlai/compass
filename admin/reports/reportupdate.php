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

// Get 'id' parameter from form submission
if (isset($_POST['id'])) {
    $reportID = $_POST['id'];
    $reporterUserID = $_POST['reporterUserID'];
    $reportedUserID = $_POST['reportedUserID'];
    $reportType = $_POST['reportType'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $createdAt = $_POST['createdAt']; // The 'createdAt' will be saved as a string in the correct datetime format

    // Prepare the update query
    $sql = "UPDATE Reports SET 
                reporterUserID = ?, 
                reportedUserID = ?, 
                reportType = ?, 
                description = ?, 
                status = ?, 
                createdAt = ? 
            WHERE reportID = ?";

    $stmt = $mysql->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $mysql->error;
        exit();
    }

    // Bind parameters and execute the update query
    $stmt->bind_param('iissssi',
        $reporterUserID,
        $reportedUserID,
        $reportType,
        $description,
        $status,
        $createdAt,
        $reportID
    );

    if ($stmt->execute()) {
        echo "Report with ID $reportID has been updated successfully.";
    } else {
        echo "Error updating report: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No report ID provided.";
}

$mysql->close();
?>
