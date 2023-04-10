<?php
    session_start();

    $RoomName=$_POST['rn'];
    //$Roomid=$_POST['rid'];
    //$PriRoomid=$_POST['roomCode']
    //ตัวแปร
    $rid = array();
    for ($i = 1; $i <= 4999; $i++) {
        $id = sprintf('%04d', $i);
        array_push($rid, $id);
    }
    echo implode(', ', $rid);


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
        สร้างห้อง <?php echo $RoomName; ?> (ID: <?php echo $Roomid; ?>) สำเร็จแล้ว!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</body>
</html>