<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Africa</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Krona+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', Arial, sans-serif;
            line-height: 1.6;
            margin: 0 auto;
            background-color: #ffffff;
            text-align: center;
        }
        header {
            background-color: #1B5299FF;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        header h1 {
            font-family: 'Krona One', sans-serif;
        }
        .destination {
            background-color: white;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: inline-block;
            text-align: left;
            max-width: 800px;
            box-sizing: border-box;
        }
        img {
            max-width: 600px;
            height: auto;
            border-radius: 5px;
            margin: 10px 0;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<?php include 'nav.php'; ?>
<body>
<header>
    <h1>Exploring South Africa</h1>
</header>
<main>
    <div class="destination">
        <h2>Cape Town: Natural Beauty and Urban Charm</h2>
        <img src="images/southafrica/cape-town.jpg" alt="Cape Town Landscape">
        <p>Nestled between majestic mountains and the sparkling Atlantic Ocean, Cape Town offers a breathtaking blend of natural beauty and cosmopolitan culture. From the iconic Table Mountain to the vibrant neighborhoods, this city is a testament to South Africa's diverse landscapes and rich heritage.</p>
    </div>
    <div class="destination">
        <h2>Kruger National Park: Wildlife Wonderland</h2>
        <img src="images/southafrica/kruger.jpg" alt="Kruger National Park Safari">
        <p>Embark on an unforgettable safari adventure in one of Africa's largest game reserves. Kruger National Park is home to an incredible diversity of wildlife, including the legendary Big Five. Experience the raw beauty of nature, witness incredible animal encounters, and immerse yourself in the untamed wilderness.</p>
    </div>
    <div class="destination">
        <h2>Durban: Coastal Gem and Cultural Melting Pot</h2>
        <img src="images/southafrica/durban.jpg" alt="Durban Coastline">
        <p>Discover the vibrant coastal city of Durban, where warm Indian Ocean waters meet a rich cultural tapestry. Known for its golden beaches, world-class surf, and incredible Indian, African, and European influences, Durban offers a unique blend of culinary delights, historical sites, and tropical charm.</p>
    </div>
    <div class="destination">
        <h2>Johannesburg: Urban Pulse and Historical Significance</h2>
        <img src="images/southafrica/johannesburg.jpg" alt="Johannesburg Cityscape">
        <p>Experience the dynamic heart of South Africa in Johannesburg, a city of resilience, innovation, and profound historical importance. From the Apartheid Museum to the vibrant neighborhoods of Soweto, Johannesburg tells a powerful story of transformation, offering insights into the country's complex past and hopeful future.</p>
    </div>
</main>
<footer style="text-align: center; margin-top: 20px; color: #666;">
</footer>
</body>
</html>