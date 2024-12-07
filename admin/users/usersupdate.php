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

if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}

$sql = "UPDATE Users
        SET
        username = '" . $mysql->real_escape_string($_REQUEST["username"]) . "' ,
        email = '" . $mysql->real_escape_string($_REQUEST["email"]) . "' ,
        phoneNumber = '" . $mysql->real_escape_string($_REQUEST["phoneNumber"]) . "' ,
        pw = '" . $mysql->real_escape_string($_REQUEST["pw"]) . "' ,
        firstName = '" . $mysql->real_escape_string($_REQUEST["firstName"]) . "' ,
        lastName = '" . $mysql->real_escape_string($_REQUEST["lastName"]) . "' ,
        gender = '" . $mysql->real_escape_string($_REQUEST["gender"]) . "' ,
        pronouns = '" . $mysql->real_escape_string($_REQUEST["pronouns"]) . "' ,
        DOB = '" . $mysql->real_escape_string($_REQUEST["DOB"]) . "' ,
        nationality = '" . $mysql->real_escape_string($_REQUEST["nationality"]) . "' ,
        loc = '" . $mysql->real_escape_string($_REQUEST["loc"]) . "' ,
        languages = '" . $mysql->real_escape_string($_REQUEST["languages"]) . "' ,
        bio = '" . $mysql->real_escape_string($_REQUEST["bio"]) . "' ,
        isVerified = " . (int)$_REQUEST["isVerified"] . " ,
        guestRating = " . (float)$_REQUEST["guestRating"] . " ,
        hostRating = " . (float)$_REQUEST["hostRating"] . " ,
        numProperties = " . (int)$_REQUEST["numProperties"] . " ,
        userimage = '" . $mysql->real_escape_string($_REQUEST["userimage"]) . "' ,
        securityLevel = " . (int)$_REQUEST["securityLevel"] . "
        WHERE userID = " . (int)$_REQUEST["id"];

echo "<hr>$sql<hr>";

$results = $mysql->query($sql);
if(!$results) {
    echo "ERROR: " . $mysql->error;
} else {
    echo "User with ID " . $_REQUEST["id"] . " has been updated successfully.";
}
?>
