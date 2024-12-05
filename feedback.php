<?php
include 'script.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    saveFeedback($address, $phone);
    header("Location: thank-you.html"); // Перенаправление на страницу благодарности
    exit();
}
?>
