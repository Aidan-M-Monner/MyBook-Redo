<?php 
    $data = file_get_contents("php://input");

    if($data != "") {
        $data = (array)json_decode($data);
    }

    if(isset($data['action']) && $data['action'] == "like_post") {
        echo ('like post');
    }