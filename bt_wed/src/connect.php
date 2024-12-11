<?php
    $connect = new mysqli('127.0.0.1','root','admin123','quanlybanhang',3308);
    if($connect->errno!== 0)
    {
        die("Error: Could not connect to the database. An error ".$connect->error." ocurred.");
    }
    echo 'Kết nối thành công!';
    //Chọn hệ ký tự là utf8 để có thể in ra tiếng Việt.
    $connect->set_charset('utf8');
?>
