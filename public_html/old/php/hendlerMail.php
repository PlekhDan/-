<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $text = $_POST["text"];
    mail("demo-site@lezenford.com", "First site", "\nИмя: $name\nE-mail: $email\n$text");
    echo"success";
?>