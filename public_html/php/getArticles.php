<?php
    header("Access-Control-Allow-Origin: *");
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    $result = $mysqli->query("SELECT articles.id, articles.title, articles.text, users.name AS author, articles.date_added FROM `articles`,`users` WHERE users.id = articles.author");
    //var_dump($result->fetch_assoc());
    //echo '<hr>';
// NULL == false
// Наличие чего-либо - это всегда TRUE
    $articles = [];
    while($row = $result->fetch_assoc()){
        $articles[] = $row;
    }
    echo json_encode($articles);
?>