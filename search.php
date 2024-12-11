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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VB72JR3SZD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VB72JR3SZD');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krona+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>


<nav>
    <?php include 'nav.php'; ?>
    <div class=" title">
 <h1>Where are you traveling?</h1>
        <h2> For solo travelers that want a personal experience. </h2>
    </div>
    <div class="search">
        <form action="results.php">
            <input type="text"  placeholder="Where?" class="search-input">
            <input type="text"  placeholder="Check In:" class="search-input">
            <input type="text"  placeholder="Check Out:" class="search-input">
            <button type="submit">
                <img src="images/Search.png" alt="Search" class="search-icon">
            </button>
        </form>
    </div>
</nav>

<main>
    <section>
        <div class="explore">
            <h1>Explore Regions</h1>
            <div class="grid">
                <a href="asia.php" class="card-link">
                <div class="card">
                    <img src="images/regions/asia.jpg" alt="Asia">
                    <div class="overlay">Asia</div>
                </div>
                </a>
                <a href="europe.php" class="card-link">
                <div class="card">
                    <img src="images/regions/europe.jpg" alt="Europe">
                    <div class="overlay">Europe</div>
                </div>
                </a>
                <a href="southafrica.php" class="card-link">
                <div class="card">
                    <img src="images/regions/southafricajpg.jpg" alt="South Africa">
                    <div class="overlay">South Africa</div>
                </div>
                </a>
                <a href="australia.php" class="card-link">
                <div class="card">
                    <img src="images/regions/australia.jpg" alt="Australia">
                    <div class="overlay">Australia</div>
                </div>
                </a>
                <a href="northamerica.php" class="card-link">
                <div class="card">
                    <img src="images/regions/northamerica.png" alt="North America">
                    <div class="overlay">North America</div>
                </div>
                </a>
                <a href="southamerica.php" class="card-link">
                <div class="card">
                    <img src="images/regions/southamerica.jpg" alt="South America">
                    <div class="overlay">South America</div>
                </div>
                </a>
            </div>
        </div>
    </section>

    <div class="featured">
        <h1>Featured Hosts</h1>
        <div class="featured-grid">
            <div class="featured-card">
                <div class="profile-image-container">
                    <img src="images/host/profile1.png" alt="Host profile" class="profile-image">
                </div>
                <img src="images/host/denmark.png">
                <h3 class="hostcardinfo">Thomas in Denmark</h3>
            </div>
            <div class="featured-card">
                <div class="profile-image-container">
                    <img src="images/host/profile2.png" alt="Host profile" class="profile-image">
                </div>
                <img src="images/host/london.png">
                <h3 class="hostcardinfo">Emily in London</h3>
            </div>
            <div class="featured-card">
                <div class="profile-image-container">
                    <img src="images/host/profile3.png" alt="Host profile" class="profile-image">
                </div>
                <img src="images/host/la.png">
                <h3 class="hostcardinfo">Ben in Los Angeles</h3>
            </div>
            <div class="featured-card">
                <div class="profile-image-container">
                    <img src="images/host/profile4.png" alt="Host profile" class="profile-image">
                </div>
                <img src="images/host/paris.png">
                <h3 class="hostcardinfo">Sarah in Paris</h3>
            </div>
        </div>
    </div>

    <div class="recent">
        <h1>Recently Viewed</h1>
        <div class="featured-grid">
            <div class="featured-card">
                <div class="profile-image-container">
                    <img src="images/host/profile1.png" alt="Host profile" class="profile-image">
                </div>
                <img src="images/host/denmark.png">
                <h3 class="hostcardinfo">Thomas in Denmark</h3>
            </div>
            <div class="featured-card">
                <div class="profile-image-container">
                    <img src="images/host/profile2.png" alt="Host profile" class="profile-image">
                </div>
                <img src="images/host/london.png">
                <h3 class="hostcardinfo">Emily in London</h3>
            </div>
            <div class="featured-card">
                <div class="profile-image-container">
                    <img src="images/host/profile3.png" alt="Host profile" class="profile-image">
                </div>
                <img src="images/host/la.png">
                <h3 class="hostcardinfo">Ben in Los Angeles</h3>
            </div>
            <div class="featured-card">
                <div class="profile-image-container">
                    <img src="images/host/profile4.png" alt="Host profile" class="profile-image">
                </div>
                <img src="images/host/paris.png">
                <h3 class="hostcardinfo">Sarah in Paris</h3>
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
<footer>
    <p>&copy; 2024 Compass. All rights reserved.</p>
    <a href="admin/adminlanding.php"> Admin Page</a>
</footer>
</body>
</html>

<style>

    body {
        font-family: lato;
        margin: 0;
        padding: 0;
    }

    nav {
        background-color: #1B5299;
        margin: 0;
        padding: 0 0 50px 0;
    }


    nav .title {
        text-align: center;
    }

    nav h1 {
        font-size: 65px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        color:white;
        font-family: "Krona One";
        margin-bottom: 50px;
        margin-top: 70px;
    }

    .search-input {
        width: 150px;
        height: 30px;
        padding: 10px;
        border: 2px solid white;
        border-radius: 10px;
        background-color: transparent;
        color: white;
        font-size: 13px;
        outline: none;
    }

    .search-input::placeholder {
        color: white;
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
        margin-top: 60px;
    }

    .search button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .search img {;
        flex-shrink: 0;
        position: relative;
        padding-left: 10px;
    }

    .search-icon {
        width: 30px;
        height: 30px;
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
        width:auto;
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

    .featured {
        width: auto;
    }

    .recent {
        width: auto;
    }

    .featured-grid {
        display: flex;
        gap: 10px;
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
        width: 100%;
        height: 100%;
    }

    .profile-image-container {
        position: absolute;
        left: 110px;
        width: 64px;
        height: 64px;
    }

    .profile-image {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    h3 {
        position: absolute;
        color: black;
        top: 250px;
        left: 65px;
        background-color:white;
        padding: 5px;
        border-radius:10px;
    }

    .reviews {
        width: 100%;
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

    footer {
        padding-left: 100px;
        margin-bottom: 30px;

    }

    @media (max-width: 768px) {

        .review-text {
            font-size: 55%;
        }

        body {
            font-size: 14px;
        }

        h1{
            padding: 30px;
        }


        nav h1 {
            font-size: 32px;
            margin-top: 20px;
        }


        .grid {
            padding: 0 30px;
        }

        .featured-grid {
            padding: 0 30px;
            overflow-x: auto;
        }


        .featured-card {
            width: 60%;
            margin-bottom: 20px;
        }

        .profile-image-container {
            left: 75px;
        }

        h3 {
            left: 25px;
        }
        .review-grid {
            margin: 0 30px;
        }

        .card .overlay {
            text-align: center;
        }

        .card {
            height:150px;
        }

        footer {
            text-align: center;
            padding-left: 0px;
        }

    }



    }
</style>