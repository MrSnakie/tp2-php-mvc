<?php
    $app = App::getInstance();

    if($_POST){
        if(!empty($_POST['id'])){
            $res = $app->getTable('client')->delete($_POST['id']);
            if($res){
                // message flash
                header('location: admin.php?p=clients.list');
            }
        }
    }