<?php
include 'nav.php';
$host = "webdev.iyaserver.com";
$userid = "anikets";
$userpw = "AcadDev_Singh_6362298333";
$db = "anikets_compass";

// Create MySQL connection
$mysql = new mysqli($host, $userid, $userpw, $db);

// Check if connection is successful
if ($mysql->connect_errno) {
    echo "Database connection error: " . $mysql->connect_error;
    exit();
}

// Get 'id' parameter from form submission
if (isset($_POST['id'])) {
    // Sanitize inputs
    $userID = (int)$_POST['id']; // Cast to integer to ensure correct data type
    $username = $mysql->real_escape_string($_POST['username']);
    $email = $mysql->real_escape_string($_POST['email']);
    $phoneNumber = $mysql->real_escape_string($_POST['phoneNumber']);
    $pw = $mysql->real_escape_string($_POST['pw']);
    $firstName = $mysql->real_escape_string($_POST['firstName']);
    $lastName = $mysql->real_escape_string($_POST['lastName']);
    $gender = $mysql->real_escape_string($_POST['gender']);
    $pronouns = $mysql->real_escape_string($_POST['pronouns']);
    $DOB = $mysql->real_escape_string($_POST['DOB']);
    $nationality = $mysql->real_escape_string($_POST['nationality']);
    $loc = $mysql->real_escape_string($_POST['loc']);
    $languages = $mysql->real_escape_string($_POST['languages']);
    $bio = $mysql->real_escape_string($_POST['bio']);
    $isVerified = (int)$_POST['isVerified']; // Cast to integer (0 or 1)
    $guestRating = (float)$_POST['guestRating']; // Cast to float
    $hostRating = (float)$_POST['hostRating']; // Cast to float
    $numProperties = (int)$_POST['numProperties']; // Cast to integer
    $userimage = $mysql->real_escape_string($_POST['userimage']);
    $securityLevel = (int)$_POST['securityLevel']; // Cast to integer

    // Prepare the update query for the Users table
    $sql = "UPDATE Users SET 
                username = ?, 
                email = ?, 
                phoneNumber = ?, 
                pw = ?, 
                firstName = ?, 
                lastName = ?, 
                gender = ?, 
                pronouns = ?, 
                DOB = ?, 
                nationality = ?, 
                loc = ?, 
                languages = ?, 
                bio = ?, 
                isVerified = ?, 
                guestRating = ?, 
                hostRating = ?, 
                numProperties = ?, 
                userimage = ?, 
                securityLevel = ? 
            WHERE userID = ?";

    // Prepare the SQL statement
    $stmt = $mysql->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $mysql->error;
        exit();
    }

    // Bind the parameters (make sure the number of parameters matches the placeholder count)
    $stmt->bind_param('ssssssssssssiiiiissi',
        $username,
        $email,
        $phoneNumber,
        $pw,
        $firstName,
        $lastName,
        $gender,
        $pronouns,
        $DOB,
        $nationality,
        $loc,
        $languages,
        $bio,
        $isVerified,
        $guestRating,
        $hostRating,
        $numProperties,
        $userimage,
        $securityLevel,
        $userID
    );

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        echo "User with ID $userID has been updated successfully.";
    } else {
        echo "Error updating user: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "No user ID provided.";
}

// Close MySQL connection
$mysql->close();
?>