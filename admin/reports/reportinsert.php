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
    $reporterUserID = trim($_POST['reporterUserID']);
    $reportedUserID = trim($_POST['reportedUserID']);
    $reportType = trim($_POST['reportType']);
    $description = trim($_POST['description']);
    $status = $_POST['status'];
    $createdAt = $_POST['createdAt'];  // Timestamp from the form

    // Check if any required field is empty
    if (empty($reporterUserID) || empty($reportedUserID) || empty($reportType) || empty($description) || empty($status) || empty($createdAt)) {
        echo "All fields are required. Please fill out all fields.";
        exit();
    }

    // Prepare the insert query
    $sql = "INSERT INTO Reports (reporterUserID, reportedUserID, reportType, description, status, createdAt) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $mysql->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $mysql->error;
        exit();
    }

    // Bind parameters
    $stmt->bind_param('iissss',
        $reporterUserID,
        $reportedUserID,
        $reportType,
        $description,
        $status,
        $createdAt
    );

    // Execute the query
    if ($stmt->execute()) {
        echo "Report added successfully!";
    } else {
        echo "Error inserting report: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$mysql->close();
?>
