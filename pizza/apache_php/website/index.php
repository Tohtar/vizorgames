<?php
$servername = "db";  // Имя контейнера MariaDB, как указано в docker-compose.yml
$username = "root";  // Имя пользователя базы данных
$password = "pizza_password";  // Пароль пользователя базы данных
$dbname = "pizza_orders";  // Имя базы данных

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Соединение не установлено: " . $conn->connect_error);
} else {
    echo "Соединение установлено успешно!";
}

// Закрываем соединение
$conn->close();
?>
