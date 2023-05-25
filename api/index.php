<?php

require_once '../db.php';
header("Content-type: application/json; charset=utf-8");
$data = json_decode(file_get_contents('php://input'), true);
if ($data) {
    $hash = md5($data['payload']);
    $url = $_SERVER['REQUEST_URI'];
    $stmt = $conn->prepare("SELECT * FROM url_cache where hash = :hash and url = :url");
    $stmt->execute(['hash' => $hash,'url' => $url]);
    $urlCache = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($urlCache) {
        echo json_encode($urlCache['response']);
    } else {
        echo json_encode(['error' => 'not found']);
    }
}



?>