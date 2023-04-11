<?php
session_start();
//if(isset($_SESSION["username"]) && $_SESSION["id"]==session_id()){
//header("location:index.php");
//die();
// }
//$RoomName=$_POST['rn'];
//$RoomPassword=$_POST['rpwd'];
//$Roomid=$_POST['room'];
//ตัวแปร
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Private Room</title>
    <!-- รอ logo -->
    <!-- <link rel="icon" type="image/x-icon" href="../../logo.jpg"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        function password_show_hide() {
            let x = document.getElementById("password");
            let show_eye = document.getElementById("show_eye");
            let hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("is-hidden");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }

        function savePassword() {
            var passwordInput = document.getElementById("password-input");
            var password = passwordInput.value;
            if (password != "rpwd") {
                // Save the password to a database or use it in your application
                alert("Your password has been saved!");
                passwordInput.value = "";
                closePassword();
            }
        }
    </script>
    <style>
        .bg-image {
            width: 100%;
            height: 900px;
            background-image: url('../../bg.jpg');
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="bg-image">
        <!--ใส่ข้อมูล ชื่อห้องแชท-->
        <section class="section">
            <div class="block">
                <div class="container">
                    <img src="../../header.jpg">
                </div>
                <div class="container">
                    <div class="card ">
                        <div class="card header has-background-black">
                            <p class="card-header-title has-text-white">
                                กรอกข้อมูลห้องแชท Pigpig แบบลับๆ
                            </p>
                        </div>
                        <form method="post" action="/SE_Project/CreateRoom_rew/Private/crsuccesspri.php">
                            <div class="card-content">
                                <div class="field">
                                    <label class="label">ชื่อห้องแชท Pigpig ของคุณ</label>
                                    <div class="control">
                                        <input type="text" name="rn" class="input" required>
                                    </div>
                                    <label class="label">รหัสห้องแชทแบบลับๆ</label>
                                    <input type="password" id="password-input" name="rpwd" class="input mb-3" placeholder="Enter your new password">

                                    <!--<form method="post" action="createroomsucces.php">-->
                                    <div class="field is-grouped mt-5">
                                        <div class="control ">
                                            <button type="submit" class="button is-dark">ไปแชทกันเลย!</button>
                                        </div>
                                        <div class="control">
                                            <button type="reset" class="button is-light">อยากล้างข้อมูลหรือเปล่า? กดปุ่มนี้สิ</button>
                                        </div>
                                    </div>
                                    <!--</form>-->
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