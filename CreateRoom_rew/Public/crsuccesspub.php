<?php
    session_start();

    $RoomName=$_POST['rn'];
    $u = (int)($_SESSION["user_id"]);

    $conn = new PDO("mysql:host=localhost;dbname=pigdata;charset=utf8","root","");
    $sql1 = "INSERT INTO rooms (name,created_by) VALUES ('$RoomName','$u')";
    $conn->exec($sql1);

    $conn=null;

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
     <!-- <link rel="icon" href="logo.jpg" type="image/icon type"> -->
</head>
<body>
    <div class="notification is-warning" role="alert">
        สร้างห้อง <?php echo $RoomName; ?> สำเร็จแล้ว!
    </div>
    <p align= "center"><button class="button is-warning is-light" onclick="location.href='/SE_Project/homepage.php'">กลับสู่หน้าหลัก</a></p>
</body>
</html>