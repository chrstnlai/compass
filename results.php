<?php
// Database connection settings
$serverName = "webdev.iyaserver.com";
$username = "anikets";
$password = "AcadDev_Singh_6362298333";
$databaseName = "anikets_compass";

// Create a new MySQLi instance and establish a connection
$connection = new mysqli($serverName, $username, $password, $databaseName);

// Check for a connection error
if ($connection->connect_errno) {
    echo "Database connection error: " . $connection->connect_error;
    exit();
}

// Get search parameters from request, with fallback to empty strings if not provided
$searchDestination = isset($_REQUEST['destination']) ? $_REQUEST['destination'] : '';
$searchCheckinDate = isset($_REQUEST['checkin']) ? $_REQUEST['checkin'] : '';
$searchCheckoutDate = isset($_REQUEST['checkout']) ? $_REQUEST['checkout'] : '';

?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krona+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
          rel="stylesheet">

</head>
<body>
<div class="navbar">
    <div class="logo">
        <img src="images/CompassTransparent.png" alt="logoimage" style="width: 80px; height: auto;">
        <h2>COMPASS</h2>
    </div>
    <img src="images/Group 23.png" alt="login">
</div>
<nav>
    <div class=" title">
        Results
    </div>
    <div class="search">
        <form action="results.php">
            <input type="text" name="destination" placeholder="Where?">
            <input type="date" name="checkin" placeholder="Check In:">
            <input type="date" name="checkout" placeholder="Check Out:">
            <button type="submit">
                <img src="images/Group%2024.png" alt="Search">
            </button>
        </form>
    </div>
    <div class=centered>
        <h2>
            <?php
            if ($searchDestination && $searchCheckinDate && $searchCheckoutDate) {
                echo "You are seeing results for " . htmlspecialchars($searchDestination) . " from " . htmlspecialchars($searchCheckinDate) . " to " . htmlspecialchars($searchCheckoutDate);
            } else if ($searchDestination) {
                echo "You are seeing results for " . htmlspecialchars($searchDestination);
            } else {
                echo "No search criteria provided.";
            }
            ?>
        </h2>
    </div>
</nav>
<main>
    <div class=resultnumber>
        <div class="container">
            <?php
            // Query to fetch listings based on the destination and optional date range
            $query = "SELECT * FROM Locations WHERE country LIKE '%$searchDestination%' 
            OR city LIKE '%$searchDestination%' 
            OR address LIKE '%$searchDestination%'";

            //            if ($searchCheckinDate && $searchCheckoutDate) {
            //                $query .= " AND checkin >= '$searchCheckinDate' AND checkout <= '$searchCheckoutDate'";
            //            }

            // Execute the main query
            $result = $connection->query($query);

            if (!$result) {
                die("Query failed: " . $connection->error);
            }

            // Process each location record
            while ($location = $result->fetch_assoc()) {
                $locationID = $location['locationID'];

                // Query to find the user associated with the location
                $userLocationQuery = "SELECT userID FROM UsersxLocations WHERE locationID = '$locationID' LIMIT 1";
                $userLocationResult = $connection->query($userLocationQuery);

                if ($userLocationResult && $userRow = $userLocationResult->fetch_assoc()) {
                    $userID = $userRow['userID'];

                    // Fetch user details based on userID
                    $userInfoQuery = "SELECT * FROM Users WHERE userID = '$userID'";
                    $userInfoResult = $connection->query($userInfoQuery);

                    if ($userInfoRow = $userInfoResult->fetch_assoc()) {
                        echo '<div class="listing-card">
                            <div class="listing-header">
                                <div class="profile-section">
                                <div class="host-info">
                                    <h2 class="host-name">' . htmlspecialchars($userInfoRow['firstName'] . ' ' . $userInfoRow['lastName']) . '</h2>
                                    <p class="host-location">Hollywood, Los Angeles, CA, 90046</p>
                                    <div class="host-rating">
                                        <span class="star-icon">★</span>
                                        <span class="rating-text">' . htmlspecialchars($userInfoRow['hostRating']) . ' (124)</span>
                                    </div>
                                    <div class="profile-image-container">
                                      <img src="' . htmlspecialchars($userInfoRow["userimage"]) . '" alt="Profile Image" style="width:100px; height:auto;">
                                        <div class="verified-badge">✓</div>
                                    </div>
                                </div>
                            </div>
                            <p class="host-description">' . htmlspecialchars($userInfoRow['bio']) . '</p>
                        </div>
                        <img src="/api/placeholder/800/400" alt="Property image" class="property-image">
                    </div>';
                    }
                }
            }
            ?>
        </div>
    </div>
</main>
</body>
</html>

<style>
    body {
        font-family: lato;
        margin: 0;
    }

    .title {
        font-size: 72.702px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        color: white;
        font-family: "Krona One";
        padding-top: 110px;
    }

    nav {
        background-color: #1B5299;
        margin: 0;
        padding: 0 0 100px 0;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: white;
        color: #3b1b06;
        padding: 25px 93.26px 45.63px 93.26px;
    }

    .navbar .logo {
        display: flex;
        align-items: center;
        gap: 5px;
        color: white;
    }

    .navbar img logoimage {
        width: 72px;
        height: 72px;
        flex-shrink: 0;
    }

    nav .title {
        text-align: center;
    }

    h1 {
        font-size: 25px;
        padding: 0px 93.26px;
        margin-top: 44px;
    }

    .navbar h2 {
        color: black;
        font-family: Inter;
        font-size: 16px;
        font-style: italic;
        font-weight: 900;
        line-height: normal;
    }

    .title h2 {
        color: white;
        text-align: center;
        font-family: lato;
        font-size: 25px;
        font-style: italic;
        font-weight: 300;
        line-height: normal;
    }

    main {
        align-items: center;
    }

    .search {
        gap: 10px;
        text-align: center;
        margin-top: 75px;
    }

    .search img {
        width: 35px;
        height: 35px;
        flex-shrink: 0;
        position: relative;
        top: 12px;
        padding-left: 10px;
    }

    .explore h1 {
        margin-top: 44px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16.04px;
        padding: 0px 93.26px;
    }

    .card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        width: 407.131px;
        height: 242.173px;
    }

    .card img {
        width: 100%;
        height: 100%;
        display: block;
        transition: transform 0.3s;
        opacity: 80%;

    }


    .card .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        font-weight: bold;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .card:hover .overlay {
        opacity: 1;
    }

    .featured-grid {
        display: flex;
        gap: 10px;
        overflow-x: auto;
        padding: 10px 93.26px 0px 93.26px;
        white-space: nowrap;
    }

    .featured-card {
        flex: 0 0 auto;
        height: 353.48187px;
        width: 276.2674px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .featured-card img {
        display: block;
    }

    .profilepic {
        position: absolute;
    }

    .review-grid {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin: 10px auto;
        width: 100%;
        padding: 0 20px;
    }

    .review-card {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        border-radius: 13.538px;
        border: 0.501px solid #000;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px 15.5px;
    }

    .reviewer-name {
        font-weight: bold;
        font-size: 1.2em;
        margin: 0;
    }

    .review-destination {
        font-size: 0.9em;
        color: #888;
        margin-top: 5px;
    }

    .stars {
        color: #FFD700;
        font-size: 1.2em;
        margin: 10px 0;
    }

    .review-text {
        font-style: italic;
        color: #333;
        line-height: 1.4;
    }

    .centered {
        text-align: center;
        color: white;
        padding-top: 20px;
        font-size: 0.7em;
    }

    .resultnumber {
        text-align: center;
        padding: 20px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    }

    body {
        background-color: #f5f5f5;
        padding: 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .listing-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
    }

    .listing-header {
        background-color: #f0f7ff;
        padding: 20px;
        flex: 1;
    }

    .profile-section {
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .profile-image-container {
        position: relative;
        width: 64px;
        height: 64px;
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .verified-badge {
        position: absolute;
        bottom: -4px;
        right: -4px;
        background-color: #0066ff;
        color: white;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        border: 2px solid white;
    }

    .host-info {
        flex-grow: 1;
    }

    .host-name {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 4px;
        text-align: left;
    }

    .host-location {
        color: #666;
        font-size: 14px;
        margin-bottom: 4px;
        text-align: left;
    }

    .host-rating {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .star-icon {
        color: #ffd700;
        font-size: 16px;
    }

    .rating-text {
        font-size: 14px;
        color: #666;
    }

    .host-description {
        margin-top: 12px;
        font-style: italic;
        color: #444;
        font-size: 14px;
    }

    .property-image {
        width: 400px;
        height: 200px;
        object-fit: cover;
    }

    @media (max-width: 800px) {
        .listing-card {
            flex-direction: column;
        }

        .property-image {
            width: 100%;
            height: 240px;
        }

        .container {
            padding: 10px;
        }

        .listing-header {
            padding: 15px;
        }

        .logo{
            width:20px;
            height:20px;
        }
    }
</style>