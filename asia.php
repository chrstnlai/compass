<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VB72JR3SZD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VB72JR3SZD');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asia</title>
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
    <h1>Exploring Asia</h1>
</header>
<main>
    <div class="destination">
        <h2>Japan: Land of Contrasts</h2>
        <img src="images/asia/japan.jpg" alt="Japanese Landscape">
        <p>Experience the perfect blend of ancient traditions and cutting-edge technology. From the bustling streets of Tokyo to the serene temples of Kyoto, Japan offers an unforgettable journey through culture, cuisine, and innovation.</p>
    </div>
    <div class="destination">
        <h2>Thailand: Tropical Paradise</h2>
        <img src="images/asia/thai.jpeg" alt="Thai Beach">
        <p>Discover pristine beaches, mouth-watering street food, and warm hospitality. Whether you're exploring Bangkok's vibrant markets or relaxing on Phuket's crystal-clear waters, Thailand promises an adventure of a lifetime.</p>
    </div>
    <div class="destination">
        <h2>China: Ancient Civilization</h2>
        <img src="images/asia/china.jpg" alt="Great Wall of China">
        <p>Walk through thousands of years of history. The Great Wall, Forbidden City, and terracotta warriors are just a glimpse into China's rich cultural heritage. Modern cities like Shanghai showcase the country's rapid transformation.</p>
    </div>
    <div class="destination">
        <h2>India: Colorful and Diverse</h2>
        <img src="images/asia/india.jpg" alt="Indian Temple">
        <p>A sensory explosion awaits in India. From the majestic Taj Mahal to the bustling streets of Mumbai, experience a land of incredible diversity, spirituality, and vibrant culture.</p>
    </div>
</main>
<footer style="text-align: center; margin-top: 20px; color: #666;">
</footer>
</body>
</html>