<?php
    $connect = new mysqli('127.0.0.1','root','1234','quanlicasy2024');
    if($connect->errno!== 0)
    {
        die("Error: Could not connect to the database. An error ".$connect->error." ocurred.");
    }
    //Chọn hệ ký tự là utf8 để có thể in ra tiếng Việt.
    $connect->set_charset('utf8');
?>
