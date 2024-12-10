<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krona+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<nav>
    <div class="navbar">
        <div class="logo">
            <a href="search.php" style="text-decoration: none; display: flex; align-items: center; gap: 5px;">
                <img src="images/CompassTransparent.png" alt="logoimage" style="width: 80px; height: auto;">
                <h2>COMPASS</h2>
            </a>
        </div>
        <div class="aboutus">
            <a href="about.php">About Us</a>
        </div>
        <div class="menu">
            <div class="menu-toggle">
                <div class="profile-icon">
                    <img src="images/Login.png" alt="login" class="login-icon">
                </div>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="signup.php">Sign up</a></li>
                        <li><a href="signin.php">Log in</a></li>
                        <li><a href="referral.php">Referral</a></li>
                        <li><a href="team.php">Meet the Team</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

</html>
<style>
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
        color: #3b1b06;
        padding: 0px 93.26px 0px 93.26px;
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


    .navbar .aboutus {
        margin-left: auto;
        padding-right: 35px;
    }

    .navbar .aboutus a {
        color:white;
        text-decoration: none;
        font-family:lato;
    }

    .navbar .aboutus a:hover {
        color: darkgrey;
    }

    .menu {
        position: relative;
        cursor: pointer;
    }

    .menu-toggle {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .profile-icon {
        font-size: 24px;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 40px;
        right: 0;
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        width: 200px;
    }

    .dropdown-menu ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .dropdown-menu ul li {
        padding: 10px 20px;
        border-bottom: 1px solid #ddd;
    }

    .dropdown-menu ul li:last-child {
        border-bottom: none;
    }

    .dropdown-menu ul li a {
        text-decoration: none;
        color: #333;
        font-size: 14px;
    }

    .dropdown-menu ul li a:hover {
        color: #007bff;
    }

    .menu:hover .dropdown-menu {
        display: block;
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

    .login-icon {
        width: 75px;
    }


    @media (max-width: 768px) {
        .navbar {
            padding: 10px;
        }
    }
</style>
