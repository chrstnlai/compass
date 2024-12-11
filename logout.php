<?php
session_start();
session_unset();
session_destroy();
header('Location: signin.php');
exit;
?>

<html>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VB72JR3SZD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VB72JR3SZD');
    </script>
</head>
</html>
