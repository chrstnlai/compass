<!-- Login PHP -->
<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to fetch user by username
    $stmt = $pdo->prepare("SELECT userID, username, pw, securityLevel FROM Users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password
        if ($password === $user['pw']) {
            // Regenerate session ID for security
            session_regenerate_id();

            // Store user data in session
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['securityLevel'] = $user['securityLevel'];
            
            header('Location:dashboard.php');

            exit;
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
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
                width: 100%;
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
                width: 100%;
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
    </head>
    <body>

    <?php include 'nav.php'; ?>

    <div class="main-container">
        <h2>Sign In</h2>
        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            <!-- Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="signup-btn">Sign In</button>
        </form>
    </div>

    <div class="footer">
        &copy; <?php echo date("Y"); ?> COMPASS. All rights reserved.
    </div>
    </body>
</html>