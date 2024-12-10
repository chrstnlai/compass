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

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krona+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
<?php include 'nav.php'; ?>
<nav>
    <div class=" title">
        About Us
        <div class="subtitle">
            Learn more about our commitment to your best travel experience.
        </div>
    </div>


</nav>
<main>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us - Compass</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
                color: #333;
            }
            .about-section {
                padding: 50px 20px;
                text-align: center;
                background-color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin: 20px auto;
                max-width: 900px;
                border-radius: 10px;
            }
            .about-section h1 {
                font-size: 36px;
                margin-bottom: 15px;
                color: #222;
            }
            .about-section p {
                font-size: 18px;
                line-height: 1.6;
                color: #555;
                margin: 10px 0;
            }
            .about-section .mission-statement {
                margin: 20px 0;
                font-size: 20px;
                font-style: italic;
                color: #444;
            }
            .features-list {
                text-align: left;
                margin: 30px auto;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                max-width: 800px;
            }
            .features-list h2 {
                font-size: 28px;
                margin-bottom: 15px;
                color: #333;
            }
            .features-list ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }
            .features-list li {
                font-size: 18px;
                margin: 10px 0;
                padding: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 5px;
                color: #555;
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .features-list li::before {
                content: "✔";
                color: #27ae60;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <div class="about-section">
        <h1>Welcome to <strong>Compass</strong>, the innovative platform <i>revolutionizing and personalizing</i> the way you travel.</h1>

        <div class="section">
            <h2 style="text-align: center">Our Mission</h2>
            <br>
            Compass provides solo travelers with an exceptional, immersive, and memorable experience in your travel destination. Hosts not only provide a comfortable space to sleep within close proximity of your city of choice but also act as your <strong>local tour guide</strong> and cultural insider.
        </div>
        <div class="features-list">
            <h2>What We Offer</h2>
            <ul>
                <li><strong>Unique Travel Community:</strong>Compass is an online social network and marketplace that connects people looking for accommodations with people who want to rent out their property and share their culture.</li>
                <li><strong>Ratings and reviews:</strong> Users can share their experiences through ratings and reviews. We support and promote transparency between our users and hosts for all parties' safety . </li>
                <li><strong>Booking details:</strong> Users can book accommodations, including the date, check-in time, and other details. Compass also offers many filters to help users find properties that meet their needs, such as pet-friendly, longer than a month, or with a pool.</li>
                <li><strong>Host Details:</strong> Hosts share what their ideal itinerary will look like, share their favorite locations, and showcase their home photos. Compass hosts are able to connect with their guests on a personal level prior to their guests visits.</li>
            </ul>
        </div>
    </div>
    </body>
    </html>

</main>

<footer>
    <p>&copy; 2024 Compass. All rights reserved.</p>
</footer>

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
        color:transparent;
        -webkit-text-stroke: 3px white;
        position: relative;
        font-family: "Krona One";
        padding-top: 110px;
    }
    .subtitle {

        color:transparent;
        font-size: 24pt;
        -webkit-text-stroke: 1px white;
    }

    ul {
        margin: 10px 0;
        padding-left: 20px;
        text-align: left;
    }
    li {
        margin: 5px 0;
        text-align: left;
    }
    .section {
        text-align: left;
        margin-bottom: 20px;
        padding: 50pt;
        border-radius: 15px;
        font-size: 15pt;

    }
    .section:hover {
        color: white;
        background-color: #1B5299;
        transition: 1s;
    }

    /* Style the container */
    .containermini {
        display: flex;          /* Enables Flexbox */
        justify-content: space-around; /* Adds space between cards */
        align-items: center;    /* Align items vertically */
        flex-wrap: wrap;        /* Allows wrapping if the container width is small */
        padding: 20px;
        gap: 20px;              /* Space between cards */
        background-color: #f0f0f0; /* Optional background for the container */
    }

    /* Style individual cards */
    .cardmini {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        width: 200px; /* Fixed width */
        height: 200px; /* Fixed height */
        display: flex;
        align-items: center;
        float: right;
        justify-content: center;
    }
    .cardmini-set.back{
        position: absolute; /* Position this layer behind the front cards */
        z-index: 1;
        transform: translateY(20px) scale(0.95); /* Add subtle offset and scale for effect */
        opacity: 0.8; /* Slightly transparent for visual distinction */

    }
    .cardmini:hover {
        color: transparent;
        background-color: transparent;
        transition: 1s;
    }


    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: white;
        color: #3b1b06;
        padding: 0px 93.26px 0px 93.26px;
    }

    .navbar .logo {
        display: flex;
        align-items: center;
        gap: 5px;
        color:white;
    }
    .navbar img logoimage{
        width: 72px;
        height: 72px;
        flex-shrink: 0;
    }
    nav .title {
        text-align: center;
    }

    h1 {
        font-size:25px;
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
    .title {
        font-size: 72.702px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        color:transparent;
        -webkit-text-stroke: 3px white;
        position: relative;
        font-family: "Krona One";
        padding-top: 110px;
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
        height:242.173px;
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
        height:353.48187px;
        width: 276.2674px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .featured-card img {
        display: block;
    }



    .resultnumber{
        text-align: center;
        padding:20px;
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
    }
</style>