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
    echo "db connection error : " . $mysql->connect_error;
    exit();
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $mysql->real_escape_string($_POST['username']);
    $email = $mysql->real_escape_string(string: $_POST['email']);
    $phone = $mysql->real_escape_string($_POST['phone']);
    $password = $mysql->real_escape_string($_POST['password']);
    $firstName = $mysql->real_escape_string($_POST['first_name']);
    $lastName = $mysql->real_escape_string($_POST['last_name']);
    $gender = $mysql->real_escape_string($_POST['gender']);
    $pronouns = $mysql->real_escape_string($_POST['pronouns']);
    $dob = trim($_POST['dob']);
    $nationality = $mysql->real_escape_string($_POST['nationality']);
    $location = $mysql->real_escape_string($_POST['location']);
    $bio = $mysql->real_escape_string($_POST['bio']);


    $userQuery = "INSERT INTO Users (username, email, phoneNumber, password, firstName, lastName, gender, pronouns, DOB, nationality, location, languages, bio) 
              VALUES ('$username', '$email', '$phoneNumber', '$password', '$firstName', '$lastName', '$gender', '$pronouns', '$DOB', '$nationality', '$location', '$languages', '$bio')";
    
    if (!$mysql->query($userQuery)) {
        die("Error creating account: " . $mysql->error);
    }

    echo "Account Created!";

} else {
    echo "Invalid request method.";
}

// Close the database connection
$mysql->close();
?>