<?php
include 'nav.php';
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

// Get 'id' parameter from form submission
if (isset($_POST['id'])) {
    $locationID = $_POST['id'];
    $title = $_POST['title'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $address = $_POST['address'];
    $isAddressPublic = $_POST['isAddressPublic'];
    $maxGuests = $_POST['maxGuests'];
    $allowsPets = $_POST['allowsPets'];
    $isActive = $_POST['isActive'];
    $amenities = $_POST['amenities'];
    $availabilityID = $_POST['availabilityID'];
    $description = $_POST['description'];
    $locationImage = $_POST['locationimage'];

    // Prepare the update query for the Locations table
    $sql = "UPDATE Locations SET 
                title = ?, 
                country = ?, 
                city = ?, 
                longitude = ?, 
                latitude = ?, 
                address = ?, 
                isAddressPublic = ?, 
                maxGuests = ?, 
                allowsPets = ?, 
                isActive = ?, 
                amenities = ?, 
                availabilityID = ?, 
                description = ?, 
                locationimage = ? 
            WHERE locationID = ?";

    $stmt = $mysql->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $mysql->error;
        exit();
    }

    // Bind parameters and execute the update query
    $stmt->bind_param('ssssssssiiisssi',
        $title,
        $country,
        $city,
        $longitude,
        $latitude,
        $address,
        $isAddressPublic,
        $maxGuests,
        $allowsPets,
        $isActive,
        $amenities,
        $availabilityID,
        $description,
        $locationImage,
        $locationID
    );

    if ($stmt->execute()) {
        echo "Location with ID $locationID has been updated successfully.";
    } else {
        echo "Error updating location: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No location ID provided.";
}

$mysql->close();
?>
