<?php
    include '../../backend/db.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id = $id";

    if ($db->query($sql)) {
        header('location: index.php');
    }
?>