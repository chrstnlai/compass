<?php
include 'nav.php';
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

$locationID = $_REQUEST['id']; // Get 'id' parameter from URL or form
$sql = "SELECT * FROM Locations WHERE locationID = $locationID";
$results = $mysql->query($sql);

if (!$results) {
    echo "ERROR: " . $mysql->error;
    exit();
}

$data = $results->fetch_assoc();

if (!$data) {
    echo "No location found with ID: " . htmlspecialchars($locationID);
    exit();
}

echo "<h1>Edit info for Location #" . htmlspecialchars($data["locationID"]) . "</h1>";
?>

<form action="locationupdate.php" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['locationID']); ?>">

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($data['title']); ?>"><br>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country" value="<?php echo htmlspecialchars($data['country']); ?>"><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($data['city']); ?>"><br>

    <label for="longitude">Longitude:</label>
    <input type="text" id="longitude" name="longitude" value="<?php echo htmlspecialchars($data['longitude']); ?>"><br>

    <label for="latitude">Latitude:</label>
    <input type="text" id="latitude" name="latitude" value="<?php echo htmlspecialchars($data['latitude']); ?>"><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($data['address']); ?>"><br>

    <label for="isAddressPublic">Is Address Public:</label>
    <select id="isAddressPublic" name="isAddressPublic">
        <option value="1" <?php echo $data['isAddressPublic'] == 1 ? 'selected' : ''; ?>>Yes</option>
        <option value="0" <?php echo $data['isAddressPublic'] == 0 ? 'selected' : ''; ?>>No</option>
    </select><br>

    <label for="maxGuests">Max Guests:</label>
    <input type="number" id="maxGuests" name="maxGuests" value="<?php echo htmlspecialchars($data['maxGuests']); ?>"><br>

    <label for="allowsPets">Allows Pets:</label>
    <select id="allowsPets" name="allowsPets">
        <option value="1" <?php echo $data['allowsPets'] == 1 ? 'selected' : ''; ?>>Yes</option>
        <option value="0" <?php echo $data['allowsPets'] == 0 ? 'selected' : ''; ?>>No</option>
    </select><br>

    <label for="isActive">Is Active:</label>
    <select id="isActive" name="isActive">
        <option value="1" <?php echo $data['isActive'] == 1 ? 'selected' : ''; ?>>Active</option>
        <option value="0" <?php echo $data['isActive'] == 0 ? 'selected' : ''; ?>>Inactive</option>
    </select><br>

    <label for="amenities">Amenities:</label>
    <textarea id="amenities" name="amenities"><?php echo htmlspecialchars($data['amenities']); ?></textarea><br>

    <label for="availabilityID">Availability ID:</label>
    <input type="number" id="availabilityID" name="availabilityID" value="<?php echo htmlspecialchars($data['availabilityID']); ?>"><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"><?php echo htmlspecialchars($data['description']); ?></textarea><br>

    <label for="locationimage">Location Image URL:</label>
    <input type="text" id="locationimage" name="locationimage" value="<?php echo htmlspecialchars($data['locationimage']); ?>"><br>

    <br>
    <input type="submit" value="Update Location">
</form>
