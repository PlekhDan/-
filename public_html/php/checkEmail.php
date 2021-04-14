<?
    header("Access-Control-Allow-Origin: *");
    $mysqli = new mysqli('localhost','p9152834_studies','2%O2u5F9','p9152834_studies');
    $email = trim(mb_strtolower($_POST['email']));
    $result = $mysqli->query("SELECT id FROM `Users` WHERE email='$email'");
    if ($result->num_rows) echo json_encode(['result'=>'exist']);
    else echo json_encode(['result'=>'email not founds']);
?>