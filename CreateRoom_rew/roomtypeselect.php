<?php
session_start();
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
      background-image: url('../bg.jpg');
      background-size: 100% 100%;
      background-repeat: no-repeat;
    }
  </style>
  <title>Create </title>
</head>

<body>
  <div class="bg-image">
    <div class="container">
      <img src="../header.jpg">
    </div>
    <section class="hero is-info">
      <div class="hero-body">
        <p class="title">
          เลือกรูปแบบห้องแชทของคุณ
        </p>
      </div>
    </section>
    <br><br>
    <div class="container is-flex is-justify-content-center">
      <div class="box">
        <!-- สร้างปุ่ม public -->
        <button class="button is-primary" onclick="location.href='/SE_Project/CreateRoom_rew/Public/crpublic.php'">Public</button>

        <!-- สร้างปุ่ม private -->
        <button class="button is-danger" onclick="location.href='/SE_Project/CreateRoom_rew/Private/crprivate.php'">Private</button>
      </div>
    </div>
    <br>
    <p align="center"><a href="../homepage.php">กลับสู่หน้าหลัก</a></p>
  </div>
</body>

</html>