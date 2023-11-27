<?php

    include_once('../system/db.php');

    $sql = "INSERT INTO user(u_user,p_user,pre_user,fname_user,lname_user,email_user,tel_user,id_role,status_user)
            VALUES(?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss",$u_user,$p_user,$pre_user,$fname_user,$lname_user,$email_user,$tel_user,$id_role,$status_user);
    
    $u_user = $_GET['u_user'];
    $p_user = $_GET['p_user'];
    $pre_user = $_GET['pre_user'];
    $fname_user = $_GET['fname_user'];
    $lname_user = $_GET['lname_user'];
    $email_user = $_GET['email_user'];
    $tel_user = $_GET['tel_user'];
    $status_user = "0";
    $id_role = "2";

    $stmt->execute(); 
    $stmt->close();  
    $conn->close();  
   
    header( "location: index.php" );
    exit(0);
?>