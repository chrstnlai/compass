<?php
// Database connection settings
$serverName = "webdev.iyaserver.com";
$username = "anikets";
$password = "AcadDev_Singh_6362298333";
$databaseName = "anikets_compass";

// Create a new MySQLi instance and establish a connection
$connection = new mysqli($serverName, $username, $password, $databaseName);
$connection->set_charset("utf8");

// Check for a connection error
if ($connection->connect_errno) {
    echo "Database connection error: " . $connection->connect_error;
    exit();
}

// Check if 'id' is provided in the URL and is valid
if (!isset($_GET['user_ID']) || !is_numeric($_GET['user_ID'])) {
    echo "Invalid or missing ID.";
    exit();
}

if (!isset($_GET['location_ID']) || !is_numeric($_GET['location_ID'])) {
    echo "Invalid or missing ID.";
    exit();
}

// Get the user ID from the URL
$userID = intval($_GET['user_ID']);
$locationID = intval($_GET['location_ID']);

// Query to fetch user details based on the user ID
$sql = "SELECT firstName, lastName, userImage, bio, hostRating,address, description,locationimage
        FROM Users, Locations
        WHERE userID = ? 
        AND locationID = " . $locationID;
$stmt = $connection->prepare($sql);
$stmt->bind_param('i', $userID);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows === 0) {
    echo "No user found with the given ID.";
    exit();


}

// Fetch user data
$user = $result->fetch_assoc();

// Close the statement and connection
$stmt->close();
$connection->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host Details</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .profile {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .profile h1 {
            margin: 0;
            font-size: 24px;
        }
        .profile p {
            font-size: 16px;
            color: #666;
        }
        .profile .rating {
            font-size: 20px;
            color: #ffbf00;
            margin-top: 10px;
        }
        body {
            font-family: lato;
            margin: 0;
            padding: 0;
            justify-content: center;
        }
        nav {
            background-color: #1B5299;
            margin: 0;
            padding: 0 0 0px 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1B5299;
            color: black;

        }

        .navbar .logo {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .navbar .logo img {
            width: 72px;
            height: 72px;
        }


        .login-icon {
            width: 75px;
        }

        .navbar h2 {
            color: white;
            font-family: Inter;
            font-size: 16px;
            font-style: italic;
            font-weight: 900;
            line-height: normal;
        }

        .title h2 {
            color:white;
            text-align: center;
            font-family: lato;
            font-size: 25px;
            font-style: italic;
            font-weight: 300;
            line-height: normal;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            margin: 0 auto;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .image-container {
            position: relative;
            flex: 1 1 300px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .see-more {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .info {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .info h2 {
            font-size: 24px;
            margin: 0 0 10px;
        }

        .info .location {
            color: #666;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .info .description {
            font-size: 14px;
            line-height: 1.5;
            color: #333;
        }

        .reserve-btn {
            background-color: #678ac8;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            align-self: flex-start;
        }

        .reserve-btn:hover {
            background-color: #5675a8;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            max-width: 1050px;
            margin: 0 auto;
            margin-top: 50px;
        }

        .profile {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            margin-right: 20px;
        }

        .profile-info {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .avatar {
            width: 100px;
            height: 100px;
            background-color: #ddd;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .avatar img {
            width: 100%;
            height: 100%;
        }

        .details h2 {
            margin: 0;
            font-size: 1.5rem;
        }

        .rating {
            font-weight: bold;
            color: #ffa500;
        }

        blockquote {
            font-style: italic;
            color: #555;
            margin: 10px 0;
        }

        .suggested-locations h3 {
            padding-left: 70px;
        }
        .suggested-locations ol {
            padding-left: 85px;
        }

        .calendar {
            flex: 1;
            margin: 20px;
            background-color: #fff;
        }

        .month-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .month-header span {
            font-size: 1.5rem;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            padding: 10px;
            width: 40px;
            height: 40px;
        }

        .inactive {
            color: #ccc;
        }

        .highlight {
            background-color: #000;
            color: #fff;
            border-radius: 50%;
        }

        .itinerary {
            max-width: 1000px;
            margin: 20px auto;
            background-color: #fff;
            margin-bottom: 10px;
        }

        h1 {
            font-size:25px;
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 44px;
            margin-bottom: 10px;
        }

        .review-grid {
            display:flex;
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
            margin-bottom: 50px;
            gap: 10px;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
        .review-card {
            width: 329.916px;
            height: 204.568px;
            flex-shrink: 1;
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
        @media (max-width: 768px) {
            .card {
                flex-direction: column; /* Stack elements */
                padding: 30px;
            }

            .info {
                padding: 15px;
            }

            .container {
                flex-direction: column; /* Stack sections vertically */
                align-items: center;
            }

            .review-text {
                font-size: 60%;
            }

            .calendar {
                margin: 0 auto;
            }

            .review-card {
                padding: 10px;
            }

            .itinerary {
                padding: 30px;
            }

            .reviews {
                padding: 30px;
                width: 90%;
            }
        }

    </style>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="card">



    <div class="image-container">
        <img src="<?= htmlspecialchars($user['locationimage']) ?>" alt="User Image">
        <button class="see-more">See More Photos</button>
    </div>
    <div class="info">
        <h2>Guest House</h2>
        <p><?= htmlspecialchars($user['address']) ?></p>
        <p class="description">
        <p><?= htmlspecialchars($user['description']) ?></p>
        </p>
        <button class="reserve-btn">Reserve</button>
    </div>
</div>

<div class="container">
    <div class="profile">
        <div class="profile-info">
            <div class="avatar">
                <img src="<?= htmlspecialchars($user['userImage']) ?>" alt="User Image">
            </div>
            <div class="details">
                <h1><?= htmlspecialchars($user['firstName'] . ' ' . $user['lastName']) ?></h1>
                <p><span class="rating">
                       <p class="rating">Rating: <?= htmlspecialchars($user['hostRating']) ?> ★</p>
                <blockquote>
                    <p><?= htmlspecialchars($user['bio']) ?></p>

                </blockquote>
            </div>
        </div>
        <div class="suggested-locations">
            <h3>Host Suggested Locations:</h3>
            <ol>
                <li>The Getty Villa</li>
                <li>Los Angeles Crest Viewpoint</li>
                <li>The Laugh Factory</li>
            </ol>
        </div>
    </div>
    <div class="calendar">
        <div class="month-header">
            <span class="prev">&lt;</span>
            <h3 class="month-year"></h3>
            <span class="next">&gt;</span>
        </div>
        <table>
            <thead>
            <tr>
                <th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
            </tr>
            </thead>
            <tbody class="calendar-body">
            <!-- Days will be dynamically generated -->
            </tbody>
        </table>
    </div>

</div>
<div class="itinerary">
    <h3>Itinerary:</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
</div>
<div class="reviews">
    <h1>Reviews</h1>
    <div class="review-grid">
        <div class="review-card">
            <p class="reviewer-name">Sarah</p>
            <p class="review-destination">to Emily in Copenhagen</p>
            <div class="stars">
                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
            </div>
            <p class="review-text">“Emily was the perfect host for a solo traveler.
                Emily was so nice and welcoming to her house.
                She had amazing itineraries that I personally enjoyed.”</p>
        </div>
        <div class="review-card">
            <p class="reviewer-name">Ashley</p>
            <p class="review-destination">to Tiffany in San Diego</p>
            <div class="stars">
                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
            </div>
            <p class="review-text">“Tiffany’s place was as described.
                Very cute house, neighborhood and yard.
                You can tell she cares about the details and plants. ”</p>
        </div>
        <div class="review-card">
            <p class="reviewer-name">Kevin</p>
            <p class="review-destination">to Angelica in Paris</p>
            <div class="stars">
                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
            </div>
            <p class="review-text">Amazing place, great spot in the city.
                Pictures don’t do it Justice especially around sunset.
                Angelica was incredibly responsive, would love to come back again!</p>
        </div>
    </div>
</div>
</body>
</html>
