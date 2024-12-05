<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "17carat_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Функция для получения списка элементов
function getItems() {
    global $conn;
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Функция для сохранения данных из формы обратной связи
function saveFeedback($address, $phone) {
    global $conn;
    $sql = "INSERT INTO feedback (address, phone) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $address, $phone);
    $stmt->execute();
    $stmt->close();
}
?>
