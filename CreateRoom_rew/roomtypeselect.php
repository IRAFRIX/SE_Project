<?php
    session_start();
    if(isset($_SESSION["username"]) && $_SESSION["id"]==session_id()){
      header("location:index.php");
      die();
    }
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
    <title>Document</title>
</head>
<body>
<section class="hero is-info">
  <div class="hero-body">
    <p class="title">
      เลือกรูปแบบห้องแชทของคุณ
    </p>
  </div>
</section>
    <div class="container is-flex is-justify-content-center">
        <div class="box">
            <!-- สร้างปุ่ม public -->
            <button class="button is-primary" onclick="location.href='/SE_Project/CreateRoom_rew/Public/crpublic.php'">Public</button>

            <!-- สร้างปุ่ม private -->
            <button class="button is-danger" onclick="location.href='/SE_Project/CreateRoom_rew/Private/crprivate.php'">Private</button>
        </div>
    </div>
</body>
</html>
