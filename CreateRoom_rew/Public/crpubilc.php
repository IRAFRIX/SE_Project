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
    <div class="block">
        <div class="card">
            <header class="card-header has-background-primary has-text-white">
                <p class="card-header-title">กรอกข้อมูลห้องแชท</p>
            </header>
            <form method="post" action="/SE_Project/CreateRoom_rew/Public/crsuccespub.php">
                <div class="card-content">
                    <div class="field">
                        <label class="label">ชื่อห้องแชท</label>
                            <div class="control">
                                <input type="text" name="rn" class="input" required>
                            </div>
                    </div>
                </div>
                <div class="field is-grouped mt-5">
                    <div class="control">
                        <button type="submit" class="button is-primary">Submit</button>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-light">Reset</button>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>