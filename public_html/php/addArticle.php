<?
    header("Access-Control-Allow-Origin: *");
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    
    $mysqli->query("INSERT INTO `Articles`(`title`, `text`, `author`) VALUES ('$title','$text','$author')");
    echo json_encode(['result'=>'success']);
?>