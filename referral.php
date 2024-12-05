
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
            <img src="images/regions/asia.jpg" alt="Guest House Living Room">
        </div>
        <div class="info">
            <div id="text">
                <h2>Refer a Friend and Share the Adventure!</h2>
                <p class="location">We believe traveling is better when shared, even if it's just the joy of exploring new places! Invite your friends to join Compass, the ultimate platform for solo travelers, and earn rewards when they book their first adventure.</p>
            </div>
            <div class="button-container">
                <button class="reserve-btn">Get Your Referral Link</button>
                <button class="meow-btn">Continue</button>
            </div>
        </div>
    </div>
</main>
</body>
</html>

<style>

    #text {
        padding-top: 150px;
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
        margin-top: 110px;
        height: 500px;
    }

    .image-container {
        position: relative;
        flex: 1;
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

    .button-container {
        display: flex;
        justify-content: space-between; /* Ensures buttons are spaced between */
        gap: 20px; /* Optional, to add some space between buttons */
        margin-top: 20px; /* Adds space above the buttons */
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

    .meow-btn {
        color: #678ac8;
        background-color: #ffffff;
        border-radius: 4px;
        border-color: #678ac8;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        align-self: flex-start;
    }

    .reserve-btn:hover {
        background-color: #5675a8;
    }

</style>