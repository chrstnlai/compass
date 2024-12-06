<?php
include 'nav.php';

$host = "webdev.iyaserver.com";
$userid = "anikets";
$userpw = "AcadDev_Singh_6362298333";
$db = "anikets_compass";

// Create connection
$mysql = new mysqli($host, $userid, $userpw, $db);

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

$sql = "SELECT * FROM Users";  // Ensure this table name is correct
$results = $mysql->query($sql);

// Check if the query was successful
if (!$results) {
    // Display error message if query fails
    die("Error executing query: " . $mysql->error);
}

// Start HTML output
echo "<html><head>";
echo "<title>User Results Page</title>";

// CSS for styling
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-top: 30px;
    }

    .table-container {
        width: 90%;
        margin: 30px auto;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #1B5299;
        color: white;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    a {
        color: #007BFF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .action-links {
        display: flex;
        justify-content: space-around;
    }

    .action-links a {
        margin: 0 5px;
    }

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>";

echo "</head><body>";

echo "<div class='table-container'>";
echo "<h2>User Data</h2>";

// Start table
echo "<table>";
echo "<tr>
        <th>User ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Password</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Pronouns</th>
        <th>Date of Birth</th>
        <th>Nationality</th>
        <th>Location</th>
        <th>Languages</th>
        <th>Bio</th>
        <th>Is Verified</th>
        <th>Guest Rating</th>
        <th>Host Rating</th>
        <th>Number of Properties</th>
        <th>Security Level</th>
        <th>Profile Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>"; // Table headers

// Fetch and display results in a table
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['userID']) . "</td>";
    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['phoneNumber']) . "</td>";
    echo "<td>" . htmlspecialchars($row['pw']) . "</td>";
    echo "<td>" . htmlspecialchars($row['firstName']) . "</td>";
    echo "<td>" . htmlspecialchars($row['lastName']) . "</td>";
    echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
    echo "<td>" . htmlspecialchars($row['pronouns']) . "</td>";
    echo "<td>" . htmlspecialchars($row['DOB']) . "</td>";
    echo "<td>" . htmlspecialchars($row['nationality']) . "</td>";
    echo "<td>" . htmlspecialchars($row['loc']) . "</td>";
    echo "<td>" . htmlspecialchars($row['languages']) . "</td>";
    echo "<td>" . htmlspecialchars($row['bio']) . "</td>";
    echo "<td>" . htmlspecialchars($row['isVerified']) . "</td>";
    echo "<td>" . htmlspecialchars($row['guestRating']) . "</td>";
    echo "<td>" . htmlspecialchars($row['hostRating']) . "</td>";
    echo "<td>" . htmlspecialchars($row['numProperties']) . "</td>";
    echo "<td>" . htmlspecialchars($row['securityLevel']) . "</td>";
    echo "<td>" . htmlspecialchars($row['userimage']) . "</td>";

    // Edit and delete links
    echo "<td><a href='userseditdata.php?id=" . htmlspecialchars($row["userID"]) . "'>Edit</a></td>";
    echo "<td><a href='usersdeletedata.php?id=" . htmlspecialchars($row["userID"]) . "'>Delete</a></td>";

    echo "</tr>";
}

// End table
echo "</table>";
echo "</div>"; // Close table container

// Close the connection
$mysql->close();

echo "</body></html>";
?>
