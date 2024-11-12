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
<div class="navbar">
    <div class="logo">
        <img src="images/compasslogo_db-04%201.png" alt="logoimage">
        <h2>COMPASS</h2>
    </div>
    <img src="images/Group%2023.png" alt="login">
</div>
<nav>
    <div class=" title">
        <marquee scrollamount="20" loop="10">Results</marquee>
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
    <div class = centered>
        <h2>
            <?php
            echo "You are seeing results from " . $_REQUEST["destination"];
            echo " for properties available from " .$_REQUEST["checkin"]. "to ". $_REQUEST["checkout"]; ;
            ?>
        </h2>
    </div>
</nav>
<main>
    <div class = resultnumber>
        <p>Showcasing 100 out of 13,570 results </p>
    </div>
    <div class="results">
        <div class="results-grid">
            <div class="review-card">
                <p class="reviewer-name">Sarah Wood</p>
                <p class="review-destination">Hollywood, Los Angeles, CA, 90046</p>
                <p class="review-text">“Emily was the perfect host for a solo traveler.
                    Emily was so nice and welcoming to her house.
                    She had amazing itineraries that I personally enjoyed.”</p>
            </div>
            <div class="review-card">
                <p class="reviewer-name">Sarah</p>
                <p class="review-destination">to Emily in Denmark</p>
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="review-text">“Emily was the perfect host for a solo traveler.
                    Emily was so nice and welcoming to her house.
                    She had amazing itineraries that I personally enjoyed.”</p>
            </div>
            <div class="review-card">
                <p class="reviewer-name">Sarah</p>
                <p class="review-destination">to Emily in Denmark</p>
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="review-text">“Emily was the perfect host for a solo traveler.
                    Emily was so nice and welcoming to her house.
                    She had amazing itineraries that I personally enjoyed.”</p>
            </div>
        </div>
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

    marquee {
        font-size: 72.702px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        color:white;
        font-family: "Krona One";
        margin-bottom: 20px;
        margin-top: 110px;
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

    .profilepic {
        position:absolute;
    }

    .results-grid {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin: 10px auto;
        width: 100%;
        padding: 0 20px;
    }

    .results-card {
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

    .result-destination {
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

    .centered{
        text-align: center;
        color:white;
    }

    .resultnumber{
        text-align:center;

    }
</style>