<?php
    $status_topic = $_GET['status_topic'];
    $id_topic =  $_GET['id_topic'];

 echo $status_topic;
 echo $id_topic;

    $sql = "UPDATE topic set status_topic='$status_topic' WHERE id_topic like '$id_topic'";

    include_once('../system/db.php');

    $stmt = $conn->prepare($sql);
    if (!$stmt->execute()) {
        echo "Error update data into database: " . $stmt->error;
        exit;
    }

    header( "location: index.php?menu=6");   
    exit(0);
?>