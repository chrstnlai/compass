<?php
$host = "webdev.iyaserver.com";
$userid = "anikets";
$userpw = "AcadDev_Singh_6362298333";
$db = "anikets_compass";

// Include login variables if needed
//$mysql = new mysqli($host, $userid, $userpw, $db);

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
<form action="reportinsert.php" method="post">
    <h2>Add a New Report</h2>

    Reporter User ID: <input type="text" name="reporterUserID" required><br>

    Reported User ID: <input type="text" name="reportedUserID" required><br>

    Report Type: <input type="text" name="reportType" required><br>

    Description: <textarea name="description" required></textarea><br>

    Status:
    <select name="status">
        <option value="Complete">Complete</option>
        <option value="Pending">Pending</option>
        <option value="Denied">Denied</option>
    </select><br>

    Created At: <input type="datetime-local" name="createdAt" required><br>

    <input type="submit" value="Submit Report">
</form>
</body>
</html>
