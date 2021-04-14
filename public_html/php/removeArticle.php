<?
    header("Access-Control-Allow-Origin: *");
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    $id = $_POST['id'];
    $mysqli->query("DELETE FROM `Articles` WHERE id=$id");
    echo json_encode(['result'=>'success']);
?>