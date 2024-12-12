<?php
//var_dump($_REQUEST);
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

$mysql = new mysqli($host, $userid, $userpw, $db);

$sql = "SELECT * FROM Reports";

$results = $mysql->query($sql);

// Start table
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Report ID</th><th>Reporter User ID</th><th>Reported User ID</th><th>Report Type</th><th>Description</th><th>Status</th><th>Created At</th><th>Edit</th><th>Delete</th>"; // Table headers

// Fetch and display results in a table
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['reportID'] . "</td>";
    echo "<td>" . $row['reporterUserID'] . "</td>";
    echo "<td>" . $row['reportedUserID'] . "</td>";
    echo "<td>" . $row['reportType'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['createdAt'] . "</td>";

    echo "<td>" . "<a href='revieweditdata.php?id="
        . $row["reportID"] . "'>"
        . 'Click to edit'
        . "</a></strong>" . "</td>";

    echo "<td>" . "<a href='reviewdeletedata.php?id="
        . $row["reportID"] . "'>"
        . 'Click to delete'
        . "</a></strong>" . "</td>";

    echo "</tr>";
}

// End table
echo "</table>";
?>

<html>
<head>
    <title>Class Results Page</title>
</head>
</html>
