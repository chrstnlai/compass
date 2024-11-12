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
            <img src="images/compasslogo_db-04%201.png" alt="logoimage">
            <h2>COMPASS</h2>
        </div>
        <img src="images/Group%2023.png" alt="login">
    </div>
    <div class=" title">
        <marquee scrollamount="20" loop="2">Where Are You Traveling?</marquee>
        <h2> For solo travelers that want a personal experience. </h2>
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
</nav>
<main>
    <section>
        <div class="explore">
            <h1>Explore Regions</h1>
            <div class="grid">
                <div class="card">
                    <img src="images/regions/asia.jpg" alt="Asia">
                    <div class="overlay">Asia</div>
                </div>
                <div class="card">
                    <img src="images/regions/europe.jpg" alt="Europe">
                    <div class="overlay">Europe</div>
                </div>
                <div class="card">
                    <img src="images/regions/southafricajpg.jpg" alt="South Africa">
                    <div class="overlay">South Africa</div>
                </div>
                <div class="card">
                    <img src="images/regions/australia.jpg" alt="Australia">
                    <div class="overlay">Australia</div>
                </div>
                <div class="card">
                    <img src="images/regions/northamerica.png" alt="North America">
                    <div class="overlay">North America</div>
                </div>
                <div class="card">
                    <img src="images/regions/southamerica.jpg" alt="South America">
                    <div class="overlay">South America</div>
                </div>
            </div>
        </div>
    </section>

    <div class="featured">
        <h1>Featured Hosts</h1>
        <div class="featured-grid">
            <div class="featured-card">
                <img src="images/placeholder.png">
                <img src="images/placeholder.png" class="profilepic">
            </div>
            <div class="featured-card">
                <img src="images/placeholder.png">
            </div>
            <div class="featured-card">
                <img src="images/placeholder.png">
            </div>
            <div class="featured-card">
                <img src="images/placeholder.png">
            </div>
            <div class="featured-card">
                <img src="images/placeholder.png">
            </div>
        </div>
    </div>

    <div class="recent">
        <h1>Recently Viewed</h1>
        <div class="featured-grid">
            <div class="featured-card">
                <img src="images/placeholder.png">
                <img src="images/placeholder.png" class="profilepic">
            </div>
            <div class="featured-card">
                <img src="images/placeholder.png">
            </div>
            <div class="featured-card">
                <img src="images/placeholder.png">
            </div>
            <div class="featured-card">
                <img src="images/placeholder.png">
            </div>
            <div class="featured-card">
                <img src="images/placeholder.png">
            </div>
        </div>
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
        background-color: #1B5299;
        color: #3b1b06;
        padding: 25px 93.26px 45.63px 93.26px;
    }

    .navbar .logo {
        display: flex;
        align-items: center;
        gap: 5px;
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

    .review-grid {
        display:flex;
        margin: 10px 93.26px;
        margin-bottom: 50px;
        gap: 10px;
    }
    .review-card {
        width: 329.916px;
        height: 204.568px;
        flex-shrink: 0;
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

</style>