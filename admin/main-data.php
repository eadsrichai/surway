<?php
    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];

        switch($menu){
            case '1' : include_once('surway-show-all.php'); break;
            case '2' : include_once('surway-add-form.php'); break;
            case '3' : include_once('surway-add-question-form.php'); break;

        }
    }
?>