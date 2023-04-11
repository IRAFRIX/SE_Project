<?php
session_start();
//if(isset($_SESSION["username"]) && $_SESSION["id"]==session_id()){
//header("location:index.php");
//die();
//}
//$RoomName=$_POST['rn'];
//$RoomPassword=$_POST['rpwd'];
//$Roomid=$_POST['room'];
//ตัวแปร
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .bg-image {
            width: 100%;
            height: 900px;
            background-image: url('../../bg.jpg');
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
    </style>
    <!-- รอ logo -->
    <!-- <link rel="icon" type="image/x-icon" href="../../logo.jpg"> -->
    <title>Create Public Room</title>
</head>

<body>
    <div class="bg-image">
        <section class="section">
            <div class="block">     
                <div class="container">
                    <img src="../../header.jpg">
                </div>
                <div class="container">
                    <div class="card">
                        <header class="card-header has-background-black ">
                            <p class="card-header-title has-text-white">กรอกข้อมูลห้องแชท Pigpig</p>
                        </header>
                        <form method="post" action="/SE_Project/CreateRoom_rew/Public/crsuccesspub.php">
                            <div class="card-content">
                                <div class="field">
                                    <label class="label">ชื่อห้องแชท</label>
                                    <div class="control">
                                        <input type="text" name="rn" class="input" placeholder="Enter your room's name" required>
                                    </div>

                                </div>
                                <div class="field is-grouped mt-5">
                                    <div class="control">
                                        <button type="submit" class="button is-dark">ไปแชทกันเลย!</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-light">อยากล้างข้อมูลหรือเปล่า? กดปุ่มนี้สิ</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <p align="center"><button class="button is-warning is-light" onclick="location.href='../roomtypeselect.php'">กลับสู่หน้าสร้างห้อง</button></p>
    </div>
</body>

</html>