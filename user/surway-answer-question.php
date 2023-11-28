<?php
    $id_topic = $_GET['id_topic'];
    $id_question1 = $_GET['id_question1'];
    $id_question2 = $_GET['id_question2'];
    $id_question3 = $_GET['id_question3'];
    $id_user = $_GET['id_user'];
    $user_ans1 = $_GET['user_ans1'];
    $user_ans2 = $_GET['user_ans2'];
    $user_ans3 = $_GET['user_ans3'];



    include_once('../system/db.php');
    $sql = "INSERT INTO answer(id_answer,id_topic,id_question,id_user,user_ans)
            VALUES(NULL,'$id_topic','$id_question1','$id_user','$user_ans1'),
                  (NULL,'$id_topic','$id_question2','$id_user','$user_ans2'),
                  (NULL,'$id_topic','$id_question3','$id_user','$user_ans3')";

    $stmt = $conn->prepare($sql);
    if (!$stmt->execute()) {
        echo "Error inserting data into database: " . $stmt->error;
        exit;
    }

    header( "location: index.php?menu=1" );   
    exit(0);

?>