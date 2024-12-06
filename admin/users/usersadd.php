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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $pw = $_POST['pw']; // Password should be hashed before storing in a real application
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $pronouns = $_POST['pronouns'];
    $DOB = $_POST['DOB'];
    $nationality = $_POST['nationality'];
    $loc = $_POST['loc'];
    $languages = $_POST['languages'];
    $bio = $_POST['bio'];
    $isVerified = isset($_POST['isVerified']) ? 1 : 0; // Checkbox for isVerified
    $guestRating = $_POST['guestRating'] ?? 0; // Default to 0 if empty
    $hostRating = $_POST['hostRating'] ?? 0; // Default to 0 if empty
    $numProperties = $_POST['numProperties'] ?? 0; // Default to 0 if empty
    $userimage = $_POST['userimage'] ?? NULL; // Default to NULL if empty
    $securityLevel = $_POST['securityLevel'] ?? 0; // Default to 0 if empty

    // Prepare the insert query
    $sql = "INSERT INTO Users (username, email, phoneNumber, pw, firstName, lastName, gender, pronouns, DOB, nationality, loc, languages, bio, isVerified, guestRating, hostRating, numProperties, userimage, securityLevel)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $mysql->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $mysql->error;
        exit();
    }

    // Bind parameters and execute the insert query
    $stmt->bind_param('ssssssssssssssiiiss',
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
        $securityLevel
    );

    if ($stmt->execute()) {
        echo "User has been added successfully.";
    } else {
        echo "Error inserting user: " . $stmt->error;
    }

    $stmt->close();
}

$mysql->close();
?>

<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 70%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        input, textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        textarea {
            resize: vertical;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .form-group input {
            width: 48%;
        }

        .form-group textarea {
            width: 100%;
        }

        .submit-btn {
            padding: 12px 20px;
            background-color: #1B5299; /* Change this to the desired blue color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin: 20px 0;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #174a7d; /* Optional: change the hover effect color */
        }

        .form-check {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="" method="post">
        <h2>Add a New User</h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>

        <label for="pw">Password:</label>
        <input type="password" id="pw" name="pw" required>

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required>

        <label for="pronouns">Pronouns:</label>
        <input type="text" id="pronouns" name="pronouns" required>

        <label for="DOB">Date of Birth:</label>
        <input type="date" id="DOB" name="DOB" required>

        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" required>

        <label for="loc">Location:</label>
        <input type="text" id="loc" name="loc" required>

        <label for="languages">Languages:</label>
        <input type="text" id="languages" name="languages" required>

        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio" required></textarea>

        <div class="form-check">
            <input type="checkbox" id="isVerified" name="isVerified">
            <label for="isVerified">Is Verified</label>
        </div>

        <div class="form-group">
            <div>
                <label for="guestRating">Guest Rating:</label>
                <input type="number" id="guestRating" name="guestRating" value="0" required>
            </div>
            <div>
                <label for="hostRating">Host Rating:</label>
                <input type="number" id="hostRating" name="hostRating" value="0" required>
            </div>
        </div>

        <div class="form-group">
            <div>
                <label for="numProperties">Number of Properties:</label>
                <input type="number" id="numProperties" name="numProperties" value="0" required>
            </div>
            <div>
                <label for="userimage">User Image URL:</label>
                <input type="text" id="userimage" name="userimage">
            </div>
        </div>

        <label for="securityLevel">Security Level:</label>
        <input type="number" id="securityLevel" name="securityLevel" value="0" required>

        <input type="submit" value="Add User" class="submit-btn">
    </form>
</div>

</body>
</html>
