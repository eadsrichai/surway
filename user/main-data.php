<?php
    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];

        switch($menu){
            case '1' : include_once('surway-show-all.php'); break;
            case '4' : include_once('surway-show-question.php'); break;
            case '100' : include_once('surway-show-all.php'); break;
            case '101' : include_once('../login/user/change-password-form.php'); break;
            case '102' : include_once('../login/user/user-update-profile-form.php'); break;

        }
    }
?>