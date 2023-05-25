<?php

require_once 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $conn->query("SELECT * FROM url_cache where id = ".$id)->fetch(PDO::FETCH_ASSOC);
    require_once 'html_form.php';

}
 else {
     echo '404';
     exit;
 }


?>