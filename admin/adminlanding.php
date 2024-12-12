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

?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krona+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
<nav>
    <div class="navbar">
        <div class="logo">
            <a href="../search.php" style="text-decoration: none; display: flex; align-items: center; gap: 5px;">
                <img src="../images/CompassTransparent.png" alt="logoimage" style="width: 80px; height: auto;">
                <h2>COMPASS</h2>
            </a>
        </div>
        <img src="../images/Login.png" alt="login" class="login-icon">
    </div>
    <div class=" title">
        <div id="bigtitle"> ADMIN PAGE</div>
    </div>
</nav>
<main>
    <div id="container">
        <div id="users">
            <h2>Users</h2>
            <a href="https://anikets.webdev.iyaserver.com/compass/admin/users/usersadd.php" style="text-decoration: none;">
                <button>Add</button>
            </a>
            <a href="https://anikets.webdev.iyaserver.com/compass/admin/users/userseditdelete.php" style="text-decoration: none;">
                <button>Edit/Delete</button>
            </a>
        </div>

        <div id="locations">
            <h2>Locations</h2>
            <a href="https://anikets.webdev.iyaserver.com/compass/admin/locations/locationadd.php" style="text-decoration: none;">
                <button>Add</button>
            </a>
            <a href="https://anikets.webdev.iyaserver.com/compass/admin/locations/locationeditdelete.php" style="text-decoration: none;">
                <button>Edit/Delete</button>
            </a>
        </div>

        <div id="documents">
            <h2>Documents</h2>
            <button>Add</button>
            <button>Edit/Delete</button>
        </div>

        <div id="reviews">
            <h2>Reviews</h2>
            <button>Add</button>
            <button>Edit/Delete</button>
        </div>

        <div id="reports">
            <h2>Reports</h2>
            <a href="https://anikets.webdev.iyaserver.com/compass/admin/reports/reportadd.php" style="text-decoration: none;">
                <button>Add</button>
            </a>
            <a href="https://anikets.webdev.iyaserver.com/compass/admin/reports/reporteditdelete.php" style="text-decoration: none;">
                <button>Edit/Delete</button>
            </a>
        </div>
    </div>
</main>
<footer>
    <p>&copy; 2024 Compass. All rights reserved.</p>
    <a href="admin/adminlanding.php"> Admin Page</a>
</footer>
</body>
</html>

<style>

    #container h2 {
        font-size: 30px; /* Adjust size as needed */
        font-weight: 700; /* Optional: Make it bold */
        color: #000; /* Optional: Customize the color */
    }

    #container button {
        height: 50px;
        background-color: #7EA8CD;
        border-color: white;
        border-radius: 20px;
        padding-left: 20px;
        padding-right: 20px;
        color: white;
        font-size: 18px;
    }

    #container {
        padding-top: 30px;
        display: flex;
        flex-wrap: wrap; /* Allows wrapping to new rows */
        gap: 20px; /* Adjust the gap between elements */
        justify-content: center; /* Center the rows */
    }

    #container > div {
        flex: 1 1 calc(33.333% - 40px); /* Takes up 1/3 of the container width minus gap adjustment */
        max-width: calc(33.333% - 40px); /* Ensures consistent max-width */
        box-sizing: border-box; /* Includes padding and border in width calculation */
        text-align: center;
        background-color: #f5f5f5; /* Optional: Add a background for clarity */
        padding: 20px;
        border: 1px solid #ddd; /* Optional: Add a border */
        border-radius: 10px; /* Optional: Add rounded corners */
    }

    body {
        font-family: lato;
        margin: 0;
        padding: 0;
    }

    #bigtitle {
        font-size: 72.702px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        color:white;
        font-family: "Krona One";
        margin-top: 20px;
        text-align: center;
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
        background-color: #1B5299;
        color: #3b1b06;
        padding: 25px 93.26px 45.63px 93.26px;
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

    nav .title {
        text-align: center;
    }

    h1 {
        font-size:25px;
        padding: 0px 93.26px;
        margin-top: 44px;
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
        font-size: 36px;
        font-style: italic;
        font-weight: 300;
        line-height: normal;
    }
    main {
        align-items: center;
    }

    .login-icon {
        width: 75px;
    }
    footer {
        padding-top: 50px;
        padding-left: 100px;
        margin-bottom: 30px;
    }

</style>