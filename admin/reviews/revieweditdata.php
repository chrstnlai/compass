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

$reviewID = $_REQUEST['id']; // Get 'id' parameter from URL or form
$sql = "SELECT * FROM Reviews WHERE reviewID = $reviewID";
$results = $mysql->query($sql);

if (!$results) {
    echo "ERROR: " . $mysql->error;
    exit();
}

$data = $results->fetch_assoc();

if (!$data) {
    echo "No review found with ID: " . htmlspecialchars($reviewID);
    exit();
}

echo "<h1>Edit info for Review #" . htmlspecialchars($data["reviewID"]) . "</h1>";
?>

<form action="reviewupdate.php" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['reviewID']); ?>">

    <label for="reviewerID">Reviewer ID:</label>
    <input type="text" id="reviewerID" name="reviewerID" value="<?php echo htmlspecialchars($data['reviewerID']); ?>"><br>

    <label for="revieweeID">Reviewee ID:</label>
    <input type="text" id="revieweeID" name="revieweeID" value="<?php echo htmlspecialchars($data['revieweeID']); ?>"><br>

    <label for="reviewType">Review Type:</label>
    <input type="text" id="reviewType" name="reviewType" value="<?php echo htmlspecialchars($data['reviewType']); ?>"><br>

    <label for="rating">Rating (1-5):</label>
    <input type="number" id="rating" name="rating" min="1" max="5" value="<?php echo htmlspecialchars($data['rating']); ?>"><br>

    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment"><?php echo htmlspecialchars($data['comment']); ?></textarea><br>

    <label for="createdAt">Created At:</label>
    <input type="datetime-local" id="createdAt" name="createdAt"
           value="<?php echo date('Y-m-d\TH:i', strtotime($data['createdAt'])); ?>"><br>
    <br>
    <input type="submit" value="Update Review">
</form>
