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

    $sql = "SELECT  MAX(id_topic) as id_topic
    FROM    topic";
    $id_topic;
    $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) { 
            $id_topic = $row['id_topic'];
        }



    header( "location: index.php?menu=5&id_topic=$id_topic");   
    exit(0);
?>