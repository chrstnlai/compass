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

$reportID = $_REQUEST['id']; // Get 'id' parameter from URL or form
$sql = "SELECT * FROM Reports WHERE reportID = $reportID";
$results = $mysql->query($sql);

if (!$results) {
    echo "ERROR: " . $mysql->error;
    exit();
}

$data = $results->fetch_assoc();

if (!$data) {
    echo "No report found with ID: " . htmlspecialchars($reportID);
    exit();
}

echo "<h1>Edit info for Report #" . htmlspecialchars($data["reportID"]) . "</h1>";
?>

<form action="reportupdate.php" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['reportID']); ?>">

    <label for="reporterUserID">Reporter User ID:</label>
    <input type="text" id="reporterUserID" name="reporterUserID" value="<?php echo htmlspecialchars($data['reporterUserID']); ?>"><br>

    <label for="reportedUserID">Reported User ID:</label>
    <input type="text" id="reportedUserID" name="reportedUserID" value="<?php echo htmlspecialchars($data['reportedUserID']); ?>"><br>

    <label for="reportType">Report Type:</label>
    <input type="text" id="reportType" name="reportType" value="<?php echo htmlspecialchars($data['reportType']); ?>"><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"><?php echo htmlspecialchars($data['description']); ?></textarea><br>

    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="Pending" <?php echo $data['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
        <option value="Under Review" <?php echo $data['status'] == 'Under Review' ? 'selected' : ''; ?>>Under Review</option>
        <option value="Complete" <?php echo $data['status'] == 'Complete' ? 'selected' : ''; ?>>Complete</option>
    </select><br>

    <label for="createdAt">Created At:</label>
    <input type="datetime-local" id="createdAt" name="createdAt"
           value="<?php echo date('Y-m-d\TH:i', strtotime($data['createdAt'])); ?>"><br>
    <br>
    <input type="submit" value="Update Report">
</form>
