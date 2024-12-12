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

$mysql = new mysqli($host, $userid, $userpw, $db);

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

$sql = "SELECT * FROM Locations";  // Ensure this table name is correct
$results = $mysql->query($sql);

// Check if the query was successful
if (!$results) {
    // Display error message if query fails
    die("Error executing query: " . $mysql->error);
}

// Start HTML output
echo "<html><head>";
echo "<title>Location Results Page</title>";

// CSS for styling
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
        background-color: #fff;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #1B5299;
        color: white;
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

    h2 {
        text-align: center;
        color: #333;
        padding-top: 20px;
    }

    .table-container {
        width: 90%;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
</style>";

echo "</head><body>";

echo "<div class='table-container'>";
echo "<h2>Location Data</h2>";

// Start table
echo "<table>";
echo "<tr>
        <th>Location ID</th>
        <th>Title</th>
        <th>Country</th>
        <th>City</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Address</th>
        <th>Is Address Public</th>
        <th>Max Guests</th>
        <th>Allows Pets</th>
        <th>Is Active</th>
        <th>Amenities</th>
        <th>Availability ID</th>
        <th>Description</th>
        <th>Location Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>"; // Table headers

// Fetch and display results in a table
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['locationID']) . "</td>";
    echo "<td>" . htmlspecialchars($row['title']) . "</td>";
    echo "<td>" . htmlspecialchars($row['country']) . "</td>";
    echo "<td>" . htmlspecialchars($row['city']) . "</td>";
    echo "<td>" . htmlspecialchars($row['longitude']) . "</td>";
    echo "<td>" . htmlspecialchars($row['latitude']) . "</td>";
    echo "<td>" . htmlspecialchars($row['address']) . "</td>";
    echo "<td>" . htmlspecialchars($row['isAddressPublic']) . "</td>";
    echo "<td>" . htmlspecialchars($row['maxGuests']) . "</td>";
    echo "<td>" . htmlspecialchars($row['allowsPets']) . "</td>";
    echo "<td>" . htmlspecialchars($row['isActive']) . "</td>";
    echo "<td>" . htmlspecialchars($row['amenities']) . "</td>";
    echo "<td>" . htmlspecialchars($row['availabilityID']) . "</td>";
    echo "<td>" . htmlspecialchars($row['description']) . "</td>";
    echo "<td>" . htmlspecialchars($row['locationimage']) . "</td>";

    // Edit and delete links
    echo "<td><a href='locationeditdata.php?id=" . htmlspecialchars($row["locationID"]) . "'>Edit</a></td>";
    echo "<td><a href='locationdeletedata.php?id=" . htmlspecialchars($row["locationID"]) . "'>Delete</a></td>";

    echo "</tr>";
}

// End table
echo "</table>";
echo "</div>"; // Close table container

// Close the connection
$mysql->close();

echo "</body></html>";
?>
