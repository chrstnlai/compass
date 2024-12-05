<html>
<nav>
    <div class="navbar">
        <div class="logo">
            <img src="images/CompassTransparent.png" alt="logoimage" style="width: 80px; height: auto;">
            <h2>COMPASS</h2>
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
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Referral</a></li>
                        <li><a href="#">Contact</a></li>
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
        padding: 0 0 50px 0;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #1B5299;
        color: #3b1b06;
        padding: 25px 93.26px 20px 93.26px;
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

    .login-icon {
        width: 75px;
    }
</style>

