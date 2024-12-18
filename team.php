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
        Meet the Team
    </div>


</nav>
<main>
    <div class = resultnumber>
        <br><br>
    </div>
</main>
<div class="team-section">
    <h1>Meet the COMPASS Team</h1>
    <div class="team-grid">
        <div class="team-member">
            <img src="images/team/chang.jpg" alt="Asia Chang">
            <h3>Asia Chang</h3>
            <p>Product Manager</p>
            <br>
            <p>Has driven too many miles, and dreams about flying miles.</p>
        </div>
        <div class="team-member">
            <img src="images/team/compassteam1.jpg" alt="Christine Lai">
            <h3>Christine Lai</h3>
            <p>Front and Backend Developer</p>
            <br>
            <p>Catches up on her sleep during her travels.</p>
        </div>
        <div class="team-member">
            <img src="images/team/compassteam2.jpg" alt="Carter Kawaguchi">
            <h3>Carter Kawaguchi</h3>
            <p>Full Stack Developer</p>
            <br>
            <p>Multilingual king by day, full stack developer and travel agent by night.</p>
        </div>
        <div class="team-member">
            <img src="images/team/compassteam3.jpg" alt="Senah Kim">
            <h3>Senah Kim</h3>
            <p>UI/UX Designer</p>
            <br>
            <p>Finds comfort in traveling, almost as if it was her hoodie.</p>
        </div>
        <div class="team-member">
            <img src="images/team/singh.jpg" alt="Aniket Singh">
            <h3>Aniket Singh</h3>
            <p>Backend Developer</p>
            <br>
            <p>Spiderman??? No. Loves climbing walls as much as he loves traveling.</p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Compass. All rights reserved.</p>
</footer>

</body>
</html>

<style>
    body {
        font-family: Lato;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
        color: #333;
    }
    .team-section {
        text-align: center;
        padding: 20px 20px;
    }
    .team-section h1 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #222;
    }
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 100px;
        margin: 0 auto;
        max-width: 2200px;
        padding: 0 20px;
    }
    .team-member {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        padding: 20px;
    }
    .team-member img {
        width: 150px;
        height: 170px;
        border-radius: 50%;
        margin-bottom: 15px;
    }
    .team-member h3 {
        font-size: 20px;
        margin-bottom: 5px;
        color: #444;
    }
    .team-member p {
        font-size: 16px;
        color: #777;
    }


    .title {
        font-size: 72.702px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        color:white;
        position: relative;
        font-family: "Krona One";
        padding-top: 110px;
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

    nav {
        background-color: #1B5299;
        margin: 0;
        padding: 0 0 100px 0px;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: white;
        color: #3b1b06;
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
        margin-top: 30px;
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
        color:white;
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
    /* Container for the flip card */
    .flip-card {
        width: 300px; /* Adjust to your image size */
        height: 200px; /* Adjust to your image size */
        perspective: 1000px; /* Enable 3D effect */
    }

    /* Inner container for the front and back */
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d; /* Enable 3D transformation */
        transition: transform 0.6s; /* Smooth flipping animation */
    }

    /* Flip card effect on hover */
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg); /* Rotate the card */
    }

    /* Front and back faces of the card */
    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden; /* Hide the back face when not flipped */
    }

    /* Front face styling */
    .flip-card-front img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure image fits card */
    }

    /* Back face styling */
    .flip-card-back {
        transform: rotateY(180deg); /* Back face rotates to be visible when flipped */
    }

    .flip-card-back img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure image fits card */
    }

</style>
