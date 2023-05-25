<?php

require_once 'db.php';

$urlCaches = $conn->query("SELECT * FROM url_cache")->fetchAll();

$data = [
    'url' => '',
    'payload' => '',
    'response' => '',
]

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег FORM</title>
</head>
<body>

<?php
require_once 'html_form.php';
?>

<br/>

<table>
    <thead>
    <tr>
        <th>Отправляемые данные</th>
        <th>Ответ</th>
        <th>Ссылка</th>
        <th>Редатирование</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($urlCaches as $urlCache) { ?>
        <tr>
            <td><?=$urlCache['payload']?></td>
            <td><?=$urlCache['response']?></td>
            <td><?=$urlCache['url']?></td>
            <td><a target="_blank" href="edit.php?id=<?=$urlCache['id']?>">Редактирование</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>


