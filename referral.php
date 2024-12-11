<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files (install via Composer: `composer require phpmailer/phpmailer`)
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $to = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $name = htmlspecialchars($_POST['name']);
    $messageBody = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit();
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use Gmail's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'compassiya@gmail.com'; // Your USC email address
        $mail->Password = 'cxbe ypwq jmpk pklb'; // Use an app password if 2FA is enabled
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS encryption
        $mail->Port = 587; // TLS port

        // Email details
        $mail->setFrom('cjkawagu@usc.edu', 'Compass'); // Sender's email and name
        $mail->addAddress($to, $name); // Recipient's email and name

        // Email content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "You might like this web page...";
        $mail->Body = "
            <p>Hello,</p>
            <p>A friend suggested you might like this webpage:</p>
            <a href='https://cmlai.webdev.iyaserver.com/compass/search.php'>Visit this page</a>
            <p>Message from your friend:</p>
            <blockquote>$messageBody</blockquote>
        ";
        $mail->AltBody = "Hello,\n\nA friend suggested you might like this webpage: https://cmlai.webdev.iyaserver.com/compass/search.php\n\nMessage from your friend:\n$messageBody";

        // Send the email
        if ($mail->send()) {
            echo "Mail sent successfully to " . htmlspecialchars($to) . ".";
        }
    } catch (Exception $e) {
        echo "Failed to send the email. Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krona+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Send Referral</title>
</head>

<?php include 'nav.php'; ?>

<body>
    <div class = "main-container">
        <h2>Send a Referral</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Recipient's Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
            </div>

            <div class="form-group">
                <label for="name">Recipient's Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
            </div>

            <div class="form-group">
                <label for="message">Your Message:</label><br>
                <textarea id="message" name="message" rows="5" required></textarea><br><br>
            </div>

            <button type="submit" class="signup-btn">Send Email</button>
        </form>
    </div>
</body>
</html>

<style>
        /* General Styles */
        body {
            font-family: Lato, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Header Section */
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }

        /* Main Container */
        .main-container {
            max-width: 600px;
            margin: 30px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .main-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-family: Lato, sans-serif;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 15px;
            font-family: Lato, sans-serif;
        }

        .form-group label {
            font-family: Lato, sans-serif;
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            font-family: Lato, sans-serif;
            width: 30%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-group input:focus {
            font-family: Lato, sans-serif;
            border-color: #007bff;
            outline: none;
        }

        /* Button */
        .signup-btn {
            display: block;
            width: 20%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .signup-btn:hover {
            background-color: #0056b3;
        }

        /* Footer Section */
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        body {
            font-family: lato;
            margin: 0;
            padding: 0;
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

        .search button {
            background: none; /* Removes the gray background */
            border: none; /* Removes the border */
            cursor: pointer; /* Changes the cursor to a pointer */
            padding: 0; /* Removes padding if necessary */
        }

        .search img {;
            flex-shrink: 0;
            position: relative;
            padding-left: 10px;
        }

        .search-icon {
            width: 30px; /* Adjust width as needed */
            height: 30px; /* Adjust height as needed */
        }

        .login-icon {
            width: 75px;
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

        @media (max-width: 768px) {
            .main-container {
                padding:40px;
            }
        }
    </style>