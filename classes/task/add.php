<?php 

include_once '../../backend/db.php';

if (isset($_POST['send'])) {

    $name = $_POST['task'];

    $sql = "INSERT INTO tasks (name) VALUES ('$name')";

    $val = $db->query($sql);

    if ($val) {
        header('location: index.php');
    }
}


?>