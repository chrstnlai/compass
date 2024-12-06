<?php
include 'nav.php';
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $address = $_POST['address'];
    $isAddressPublic = isset($_POST['isAddressPublic']) ? 1 : 0; // Checkbox for isAddressPublic
    $maxGuests = $_POST['maxGuests'];
    $allowsPets = isset($_POST['allowsPets']) ? 1 : 0; // Checkbox for allowsPets
    $isActive = isset($_POST['isActive']) ? 1 : 0; // Checkbox for isActive
    $amenities = $_POST['amenities'];
    $availabilityID = $_POST['availabilityID'];
    $description = $_POST['description'];
    $locationImage = $_POST['locationImage'];

    // Prepare the insert query
    $sql = "INSERT INTO Locations (title, country, city, longitude, latitude, address, isAddressPublic, maxGuests, allowsPets, isActive, amenities, availabilityID, description, locationImage)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $mysql->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $mysql->error;
        exit();
    }

    // Bind parameters and execute the insert query
    $stmt->bind_param('ssssssssssssss',
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
        $locationImage
    );

    if ($stmt->execute()) {
        echo "Location has been added successfully.";
    } else {
        echo "Error inserting location: " . $stmt->error;
    }

    $stmt->close();
}

$mysql->close();
?>

<html>
<head>
    <title>Add Location</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .form-container {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container input[type="checkbox"] {
            margin-top: 10px;
        }

        .form-container input[type="submit"] {
            background-color: #1B5299; /* Blue color */
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .form-container input[type="submit"]:hover {
            background-color: #174a7d; /* Darker blue when hovered */
        }

        .form-container textarea {
            height: 120px;
        }

        .form-container .checkbox-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-container .checkbox-group label {
            margin: 0;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Add a New Location</h2>
    <form action="" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="country">Country:</label>
        <input type="text" name="country" required>

        <label for="city">City:</label>
        <input type="text" name="city" required>

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" required>

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" required>

        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <div class="checkbox-group">
            <div>
                <label for="isAddressPublic">Is Address Public:</label>
                <input type="checkbox" name="isAddressPublic">
            </div>
            <div>
                <label for="allowsPets">Allows Pets:</label>
                <input type="checkbox" name="allowsPets">
            </div>
            <div>
                <label for="isActive">Is Active:</label>
                <input type="checkbox" name="isActive">
            </div>
        </div>

        <label for="maxGuests">Max Guests:</label>
        <input type="number" name="maxGuests" required>

        <label for="amenities">Amenities:</label>
        <textarea name="amenities" required></textarea>

        <label for="availabilityID">Availability ID:</label>
        <input type="number" name="availabilityID" required>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <label for="locationImage">Location Image URL:</label>
        <input type="text" name="locationImage" required>

        <input type="submit" value="Add Location">
    </form>
</div>
</body>
</html>
