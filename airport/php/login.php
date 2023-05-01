<?php
require_once('db.php');

$telephone = $_POST['telephone'];
$pass = $_POST['pass'];

if (empty($telephone) || empty($pass)) {
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `clients` WHERE telephone = '$telephone' AND pass = '$pass' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Добро пожаловать " . $row['name'];
            header('Location: ../profile.html');
        }
    } else {
        echo "Нет такого пользовотеля";
    }
}
?>