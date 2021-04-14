<?
    header("Access-Control-Allow-Origin: *");
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    //$json = file_get_contents('php://input');
    //$obj = json_decode($json, true);
    //$id = $obj['id'];
    //$id = json_decode(file_get_contents('php://input'), true)['id'];
    $id = $_POST['id'];
    $result = $mysqli->query("SELECT * FROM `Articles` WHERE id=$id");
    echo json_encode($result->fetch_assoc());
?>