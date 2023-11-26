<?php
    $name_topic = $_GET['name_topic'];
    $detail_topic = $_GET['detail_topic'];

    include_once('../system/db.php');
    $sql = "INSERT INTO topic(id_topic,name_topic,detail_topic,status_topic)
            VALUES(NULL,'$name_topic','$detail_topic','1')";

    $stmt = $conn->prepare($sql);
    if (!$stmt->execute()) {
        echo "Error inserting data into database: " . $stmt->error;
        exit;
    }

    header( "location: index.php?menu=3" );   
    exit(0);
?>