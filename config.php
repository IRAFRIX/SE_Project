<?php

// กำหนดค่าเชื่อมต่อ MySQL
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pigdata');

// ทำการเชื่อมต่อฐานข้อมูล MySQL
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// ตรวจสอบการเชื่อมต่อ
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}