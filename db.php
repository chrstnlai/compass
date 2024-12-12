<?php
$host = "webdev.iyaserver.com";
$user = "anikets";
$password = "AcadDev_Singh_6362298333";
$dbname = "anikets_compass";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>