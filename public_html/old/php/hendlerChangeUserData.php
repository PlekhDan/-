<?php
    session_start();
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    $value = $_POST['value'];
    $item = $_POST['item']; //либо name либо lastname
    $id = $_SESSION['id']; //берем из сессии id пользователя
    $mysqli->query("UPDATE `Users` SET `$item`='$value' WHERE `id`=$id"); //вводим изменения в базу данных
    $_SESSION[$item] = $value; //вводим изменения в сессию
    echo json_encode(['result'=>'success']);
?>