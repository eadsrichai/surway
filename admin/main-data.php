<?php
    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];

        switch($menu){
            case '1' : include_once('surway-report-all.php'); break;
            case '2' : include_once('surway-add-form.php'); break;
            case '3' : include_once('surway-add-question-form.php'); break;
            case '4' : include_once('surway-show-question.php'); break;
            case '5' : include_once('surway-create-form.php'); break;
            case '6' : include_once('surway-show-all.php'); break;

            case '101' : include_once('../login/admin/change-password-form.php'); break;
            case '102' : include_once('../login/admin/user-update-profile-form.php'); break;
            case '103' : include_once('../login/admin/user-management-form.php'); break;

        }
    }
?>