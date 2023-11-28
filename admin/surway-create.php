<?php
    $title_q = $_GET['title_q'];
    $id_topic = $_GET['id_topic'];
    $ch1_q  = $_GET['ch1_q'];
    $ch2_q  = $_GET['ch2_q'];
    $ch3_q  = $_GET['ch3_q'];
    $ch4_q  = $_GET['ch4_q'];


    include_once('../system/db.php');
    $sql = "INSERT INTO question(id_q,id_topic,title_q,ch1_q,ch2_q,ch3_q,ch4_q)
            VALUES(NULL,'$id_topic','$title_q','$ch1_q','$ch2_q','$ch3_q','$ch4_q')";

    $stmt = $conn->prepare($sql);
    if (!$stmt->execute()) {
        echo "Error inserting data into database: " . $stmt->error;
        exit;
    }

    header( "location: index.php?menu=5&id_topic=$id_topic" );   
    exit(0);
?>