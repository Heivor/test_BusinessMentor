
<?php

require_once 'db.php';

if (isset($_POST['Job'])) {
    $job = $_POST['Job'];
    $data = [
        'url' => $job['url'],
        'hash' => md5($job['payload']),
        'response' => $job['response'],
        'payload' => $job['payload'],
    ];

    if (isset($_GET['id'])) {
        $data['id'] = $_GET['id'];
        $sql = "UPDATE url_cache SET hash=:hash,url=:url, response=:response, payload=:payload WHERE id=:id";
        $stmt= $conn->prepare($sql);
        $stmt->execute($data);
    } else {
        $sql = "INSERT INTO `url_cache`(`hash`, `url`, `response`,`payload`) VALUES (:hash, :url, :response, :payload)";
        $stmt= $conn->prepare($sql);
        $stmt->execute($data);
    }

    header("Location: /");



}




?>