<?php
include 'nav.php';
$host = "webdev.iyaserver.com";
$userid = "anikets";
$userpw = "AcadDev_Singh_6362298333";
$db = "anikets_compass";

// Create connection
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

$userID = $_REQUEST['id']; // Get 'id' parameter from URL or form
$sql = "SELECT * FROM Users WHERE userID = $userID";  // Adjust query for Users table
$results = $mysql->query($sql);

if (!$results) {
    echo "ERROR: " . $mysql->error;
    exit();
}

$data = $results->fetch_assoc();

if (!$data) {
    echo "No user found with ID: " . htmlspecialchars($userID);
    exit();
}

echo "<h1>Edit info for User #" . htmlspecialchars($data["userID"]) . "</h1>";
?>

<form action="usersupdate.php" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['userID']); ?>">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($data['username']); ?>"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>"><br>

    <label for="phoneNumber">Phone Number:</label>
    <input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo htmlspecialchars($data['phoneNumber']); ?>"><br>

    <label for="pw">Password:</label>
    <input type="password" id="pw" name="pw" value="<?php echo htmlspecialchars($data['pw']); ?>"><br>

    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" value="<?php echo htmlspecialchars($data['firstName']); ?>"><br>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" value="<?php echo htmlspecialchars($data['lastName']); ?>"><br>

    <label for="gender">Gender:</label>
    <input type="text" id="gender" name="gender" value="<?php echo htmlspecialchars($data['gender']); ?>"><br>

    <label for="pronouns">Pronouns:</label>
    <input type="text" id="pronouns" name="pronouns" value="<?php echo htmlspecialchars($data['pronouns']); ?>"><br>

    <label for="DOB">Date of Birth:</label>
    <input type="date" id="DOB" name="DOB" value="<?php echo htmlspecialchars($data['DOB']); ?>"><br>

    <label for="nationality">Nationality:</label>
    <input type="text" id="nationality" name="nationality" value="<?php echo htmlspecialchars($data['nationality']); ?>"><br>

    <label for="loc">Location:</label>
    <input type="text" id="loc" name="loc" value="<?php echo htmlspecialchars($data['loc']); ?>"><br>

    <label for="languages">Languages:</label>
    <input type="text" id="languages" name="languages" value="<?php echo htmlspecialchars($data['languages']); ?>"><br>

    <label for="bio">Bio:</label>
    <input type="text" id="bio" name="bio" value="<?php echo htmlspecialchars($data['bio']); ?>"><br>

    <label for="isVerified">Is Verified:</label>
    <select id="isVerified" name="isVerified">
        <option value="1" <?php echo $data['isVerified'] == 1 ? 'selected' : ''; ?>>Yes</option>
        <option value="0" <?php echo $data['isVerified'] == 0 ? 'selected' : ''; ?>>No</option>
    </select><br>

    <label for="guestRating">Guest Rating:</label>
    <input type="number" id="guestRating" name="guestRating" value="<?php echo htmlspecialchars($data['guestRating']); ?>"><br>

    <label for="hostRating">Host Rating:</label>
    <input type="number" id="hostRating" name="hostRating" value="<?php echo htmlspecialchars($data['hostRating']); ?>"><br>

    <label for="numProperties">Number of Properties:</label>
    <input type="number" id="numProperties" name="numProperties" value="<?php echo htmlspecialchars($data['numProperties']); ?>"><br>

    <label for="securityLevel">Security Level:</label>
    <input type="text" id="securityLevel" name="securityLevel" value="<?php echo htmlspecialchars($data['securityLevel']); ?>"><br>

    <label for="userimage">Profile Image URL:</label>
    <input type="text" id="userimage" name="userimage" value="<?php echo htmlspecialchars($data['userimage']); ?>"><br>

    <br>
    <input type="submit" value="Update User">
</form>
