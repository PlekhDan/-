<?php
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    
//trim - отрезает пробелы до и после введенного слова
//mb_strtolower - делаем маленькими все буквы, чтобы потом не было проблем
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = trim(mb_strtolower($_POST['email'])); 
    $password = trim($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    $result = $mysqli->query("SELECT id FROM `Users` WHERE `email`='$email'");
    if ($result->num_rows) {
        echo json_encode(['result'=>'exist']);
    } else {
       $mysqli->query("INSERT INTO `Users`(`name`, `lastname`, `email`, `password`) VALUES ('$name','$lastname','$email','$password')"); 
        echo json_encode(['result'=>'success']);
    }
?>