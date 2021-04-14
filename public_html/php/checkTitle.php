<?
    header("Access-Control-Allow-Origin: *");
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    $title = $_POST['title'];
    $result = $mysqli->query("SELECT * FROM `Articles` WHERE title='$title'");
    if ($result->num_rows) echo json_encode(['result'=>'exist']);
    else echo json_encode(['result'=>'title not founds']);
?>