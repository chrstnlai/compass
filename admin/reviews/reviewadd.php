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

// Connect to the database
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
?>

<html>

<body>
<form action="reviewinsert.php" method="post">
    <h2>Add a New Review</h2>

    Reviewer ID: <input type="text" name="reviewerID" required><br>

    Reviewee ID: <input type="text" name="revieweeID" required><br>

    Review Type: <input type="text" name="reviewType" required><br>

    Rating (1-5): <input type="number" name="rating" min="1" max="5" required><br>

    Comment: <textarea name="comment" required></textarea><br>

    Created At: <input type="datetime-local" name="createdAt" required><br>

    <input type="submit" value="Submit Review">
</form>
</body>
</html>
