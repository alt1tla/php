<?php
// подкл к бд
$db = require ('db.php');
$connect = mysqli_connect($db['host'], $db['username'], $db['password'], $db['database']);

// принимаем данные
$input = file_get_contents('php://input');
$data = json_decode($input, true);
// выбор обл знаний для селекта
// if (isset($data['fieldId'])) {
$fieldId = $data['fieldId'];
// }
// выводим хэштеги свзянные с обл
$sql = "SELECT h.id, h.name FROM hashtags h INNER JOIN hash_connect hc ON h.id = hc.hash_id WHERE hc.field_id = '$fieldId'";
$res = mysqli_query($connect, $sql);
// массив этих хэштегов
$selectedHashtags = array();
while ($row = $res->fetch_assoc()) {
    $selectedHashtags[] = $row;
}
// возвращаем массив
echo json_encode($selectedHashtags);