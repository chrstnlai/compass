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
    echo "Database connection error: " . $mysql->connect_error;
    exit();
}

// Query to fetch reviews
$sql = "SELECT * FROM Reviews";

$results = $mysql->query($sql);

if (!$results) {
    echo "Error fetching reviews: " . $mysql->error;
    exit();
}

// Start HTML table
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Review ID</th>
        <th>Reviewer ID</th>
        <th>Reviewee ID</th>
        <th>Review Type</th>
        <th>Rating</th>
        <th>Comment</th>
        <th>Created At</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>";

// Fetch and display results in the table
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['reviewID']) . "</td>";
    echo "<td>" . htmlspecialchars($row['reviewerID']) . "</td>";
    echo "<td>" . htmlspecialchars($row['revieweeID']) . "</td>";
    echo "<td>" . htmlspecialchars($row['reviewType']) . "</td>";
    echo "<td>" . htmlspecialchars($row['rating']) . "</td>";
    echo "<td>" . htmlspecialchars($row['comment']) . "</td>";
    echo "<td>" . htmlspecialchars($row['createdAt']) . "</td>";

    echo "<td><a href='revieweditdata.php?id="
        . urlencode($row["reviewID"]) . "'>Edit</a></td>";

    echo "<td><a href='reviewdeletedata.php?id="
        . urlencode($row["reviewID"]) . "'>Delete</a></td>";

    echo "</tr>";
}

// End table
echo "</table>";
?>

<html>
<head>
    <title>Review List Page</title>
</head>
</html>
