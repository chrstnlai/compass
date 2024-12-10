<?php
include 'nav.php';
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
    $locationID = $_REQUEST['id'];

    // First, delete the records from the UsersxLocations table that reference the locationID
    $sqlDeleteUsersxLocations = "DELETE FROM UsersxLocations WHERE locationID = ?";
    $stmtDeleteUsersxLocations = $mysql->prepare($sqlDeleteUsersxLocations);

    if ($stmtDeleteUsersxLocations === false) {
        // If prepare fails, show the error
        echo "Error preparing SQL query: " . $mysql->error;
        exit();
    }

    $stmtDeleteUsersxLocations->bind_param('i', $locationID);

    if ($stmtDeleteUsersxLocations->execute()) {
        echo "Deleted associated UsersxLocations entries successfully.<br>";
    } else {
        echo "Error deleting associated UsersxLocations entries: " . $stmtDeleteUsersxLocations->error . "<br>";
    }

    // Now delete the location from the Locations table
    $sqlDeleteLocation = "DELETE FROM Locations WHERE locationID = ?";
    $stmtDeleteLocation = $mysql->prepare($sqlDeleteLocation);

    if ($stmtDeleteLocation === false) {
        // If prepare fails, show the error
        echo "Error preparing SQL query: " . $mysql->error;
        exit();
    }

    $stmtDeleteLocation->bind_param('i', $locationID);

    if ($stmtDeleteLocation->execute()) {
        echo "Location with ID $locationID has been deleted successfully.";
    } else {
        echo "Error deleting location: " . $stmtDeleteLocation->error;
    }

    $stmtDeleteUsersxLocations->close();
    $stmtDeleteLocation->close();
} else {
    echo "No location ID provided. Please try again.";
}

$mysql->close();
?>
