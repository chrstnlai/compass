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
    <title>Australia</title>
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
    <h1>Exploring Australia</h1>
</header>
<main>
    <div class="destination">
        <h2>Sydney: Iconic Coastal Metropolis</h2>
        <img src="images/australia/sydney2.jpeg" alt="Sydney Opera House and Harbour Bridge">
        <p>Experience the vibrant heart of Australia in Sydney, a city where urban sophistication meets natural beauty. Marvel at the world-famous Opera House, explore the historic Rocks district, and enjoy the stunning beaches that make Sydney a global destination. From Bondi to Darling Harbour, the city offers an unforgettable blend of culture, cuisine, and coastal charm.</p>
    </div>
    <div class="destination">
        <h2>Great Barrier Reef: Natural Wonder of the World</h2>
        <img src="images/australia/great-barrier-reef.jpg" alt="Great Barrier Reef Underwater Scene">
        <p>Dive into the breathtaking underwater world of the Great Barrier Reef, the largest living structure on Earth. This marine paradise stretches over 2,300 kilometers, offering an incredible ecosystem teeming with colorful coral, diverse marine life, and unparalleled natural beauty. Whether snorkeling, diving, or viewing from a glass-bottom boat, the reef promises an extraordinary adventure.</p>
    </div>
    <div class="destination">
        <h2>Melbourne: Cultural Capital and Creative Hub</h2>
        <img src="images/australia/melbourne.jpg" alt="Melbourne City Laneway">
        <p>Discover Melbourne, Australia's cultural powerhouse known for its vibrant arts scene, world-class dining, and unique urban character. Explore hidden laneway cafes, immerse yourself in street art, enjoy the legendary coffee culture, and experience the city's passionate sports and music scenes. Melbourne offers a sophisticated and eclectic urban experience unlike any other.</p>
    </div>
    <div class="destination">
        <h2>Uluru: Sacred Heart of the Outback</h2>
        <img src="images/australia/uluru.jpg" alt="Uluru at Sunset">
        <p>Journey to the spiritual center of Australia at Uluru, the massive sandstone monolith that rises dramatically from the red desert landscape. This sacred site holds deep cultural significance for the Indigenous Australian people and offers a profound connection to the ancient land. Experience the changing colors of Uluru at sunset, learn about Indigenous culture, and witness the raw beauty of the Australian interior.</p>
    </div>
</main>
<footer style="text-align: center; margin-top: 20px; color: #666;">
</footer>
</body>
</html>