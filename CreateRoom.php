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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>CreateRoom</title>
</head>
<body>
<!--ใส่ข้อมูล ชื่อห้องแชท-->
<div class="card text-dark bg-white border-primary">
                <div class="card-header bg-primary text-white">กรอกข้อมูลห้องแชท</div>
                <div class="card-body">
                    <form action="register_save.php" method="post">
                        <div class="row mb-2">
                            <label class="col-mb-3 col-form-label">ชื่อห้องแชท</label>
                            <input type="text" name="rn" class="form-control" require>
                            <div class="row mb-2">
                                <label class="col-mb-3 col-form-label">รหัสผ่านห้องแชท</label>
                                <input type="password" name="rpwd" class="form-control" require>
                            </div>
<!--ปุ่มเปิด-ปิด Private-->
<div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-outline-success" data-bs-toggle="button" aria-pressed="true">
            <input type="button" name="options" id="pub" autocomplete="off">Public
        </label>
        <label class="btn btn-outline-danger">
            <input type="button" name="options" id="pri" autocomplete="off">Private
        </label>
    </div>
</body>
</html>