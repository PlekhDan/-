<?php
    header("Access-Control-Allow-Origin: *");
//Чтобы сохранить, что мы это мы, надо открыть сессиию
    session_start(); //Начало сессии. Устанавливаем индивидуальные cookie
    
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    
    $email = trim(mb_strtolower($_POST['email'])); 
    $password = trim($_POST['password']);
    
    $result = $mysqli->query("SELECT * FROM `Users` WHERE `email`='$email'"); //Сравниваем email в базе
    $row = $result->fetch_assoc(); //Преобразуем ответ от базы данных в массив
    //var_damp($row);
    if(password_verify($password,$row['password'])){
        $_SESSION['name'] = $row['name'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        echo json_encode(['result'=>'success']);
    }else{
        echo json_encode(['result'=>'error']);
    }
    //echo "Email: $email \nPassword: $password";
?>
