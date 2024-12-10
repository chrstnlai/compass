
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krona+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'nav.php'; ?>
<main>
    <div class="card">
        <div class="image-container">
            <img src="placeholder.png" alt="Guest House Living Room">
            <button class="see-more">See More Photos</button>
        </div>
        <div class="info">
            <h2>Guest House</h2>
            <p class="location">in Hollywood, Los Angeles, CA, 90046</p>
            <p class="description">
                Experience panoramic mountain views and breathtaking sunsets from our charming tiny house on a scenic ranch. Perfect for romantic getaways or family retreats. Explore miles of nearby hiking and biking trails, and enjoy visits from friendly ranch animals on the private fenced-in property.
            </p>
            <button class="reserve-btn">Reserve</button>
        </div>
    </div>

    <div class="container">
        <div class="profile">
            <div class="profile-info">
                <div class="avatar">
                    <img src="placeholder.png">
                </div>
                <div class="details">
                    <h2>Sarah Wood</h2>
                    <p><span class="rating">⭐ 4.98</span> (124)</p>
                    <blockquote>
                        “I love hosting guests and showing them around LA! There’s so much more than the Hollywood sign and the beach.”
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
                <span>&lt;</span>
                <h3>December 2024</h3>
                <span>&gt;</span>
            </div>
            <table>
                <tr>
                    <th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
                </tr>
                <tr>
                    <td class="inactive">1</td><td>2</td><td>3</td><td>4</td><td>5</td>
                    <td class="highlight">6</td><td>7</td>
                </tr>
                <tr>
                    <td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td>
                </tr>
                <tr>
                    <td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td>
                </tr>
                <tr>
                    <td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td>
                </tr>
                <tr>
                    <td>29</td><td>30</td><td class="inactive">31</td>
                </tr>
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
</main>
</body>
</html>

<style>

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
        width: 50px;
        height: 50px;
        background-color: #ddd;
        border-radius: 50%;
        flex-shrink: 0;
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