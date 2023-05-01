<?php
require_once('db.php');
$name = $_POST['name'];
$surname = $_POST['surname'];
$doc = $_POST['doc'];
$telephone = $_POST['telephone'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];


if (empty($name) || empty($surname) || empty($doc) || empty($telephone) || empty($pass) || empty($repeatpass)){
    echo "Заполните все поля";
} else {
    if($pass != $repeatpass){
        echo "Пароли не совпадают  ";
    } else {
        $sql = "INSERT INTO `clients` (name, surname, doc, telephone, pass) VALUES ('$name', '$surname', '$doc', '$telephone', '$pass')";
        if ($conn->query($sql) === TRUE ) {
            echo "  Вы успешно зарегистрировались";
            header('Location: ../login.html');
        }
        else {
            echo "Ошибка: " .$conn->error;
        }
        
    }
}
?>




