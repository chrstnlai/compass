<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Europe</title>
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
            max-wdith:200px;
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
    <h1>Exploring Europe</h1>
</header>
<main>
    <div class="destination">
        <h2>France: City of Love and Culture</h2>
        <img src="images/europe/france1.jpg" alt="Eiffel Tower in Paris">
        <p>Immerse yourself in the romantic atmosphere of Paris, explore world-class museums, savor exquisite cuisine, and discover the rich cultural heritage that makes France a timeless destination. From the Louvre to the charming countryside, France offers an unforgettable experience.</p>
    </div>
    <div class="destination">
        <h2>Italy: Art and History Intertwined</h2>
        <img src="images/europe/italy.jpg" alt="Colosseum in Rome">
        <p>Journey through a land of incredible art, ancient history, and culinary delights. Explore the ancient ruins of Rome, the romantic canals of Venice, and the Renaissance treasures of Florence. Italy is a living museum that captivates travelers with its beauty and passion.</p>
    </div>
    <div class="destination">
        <h2>Greece: Cradle of Western Civilization</h2>
        <img src="images/europe/greece.jpg" alt="Acropolis in Athens">
        <p>Step back in time in the birthplace of democracy and Western philosophy. From the iconic Acropolis in Athens to the stunning islands of the Aegean, Greece offers a perfect blend of ancient archaeological sites, crystal-clear waters, and warm Mediterranean hospitality.</p>
    </div>
    <div class="destination">
        <h2>United Kingdom: Historic Charm and Modern Vibrancy</h2>
        <img src="images/europe/uk.jpeg" alt="London Cityscape">
        <p>Experience the perfect fusion of historic traditions and contemporary culture. From the royal landmarks of London to the scenic landscapes of Scotland, the United Kingdom offers diverse experiences. Explore world-class museums, iconic architecture, and the rich tapestry of British heritage.</p>
    </div>
</main>
<footer style="text-align: center; margin-top: 20px; color: #666;">
</footer>
</body>
</html>