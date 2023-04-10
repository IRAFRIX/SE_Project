<?php
    session_start();

    $RoomName=$_POST['rn'];
    //$Roomid=$_POST['rid'];
    //$PriRoomid=$_POST['roomCode']
    //ตัวแปร
    //$rid = sprintf('%04d', rand(0001, 9999));
    //echo "id ของห้องคุณคือ " . $rid;
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
</head>
<body>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        สร้างห้อง <?php echo $RoomName; ?> สำเร็จแล้ว!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <p align= "center"><a href="../roomtypeselect.php">กลับสู่หน้าสร้างห้อง</a></p>
</body>
</html>