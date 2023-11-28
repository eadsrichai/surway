<?php
   
    $id_topic =  $_GET['id_topic'];


    $sql = "DELETE FROM topic WHERE id_topic like '$id_topic'";

    include_once('../system/db.php');

    $stmt = $conn->prepare($sql);
    if (!$stmt->execute()) {
        echo "Error update data into database: " . $stmt->error;
        exit;
    }

    header( "location: index.php?menu=6");   
    exit(0);
?>