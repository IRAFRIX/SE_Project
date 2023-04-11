<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <title>Join Room</title>
   <!-- <link rel="icon" href="logo.jpg" type="image/icon type"> -->
  <style>
    .bg-image {
      width: 100%;
      height: 900px;
      background-image: url('../bg.jpg');
      background-size: 100% 100%;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>
  <div class="bg-image">
    <?php
    $conn = new PDO("mysql:host=localhost;dbname=pigdata;charset=utf8", "root", "");
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $sql = "SELECT name FROM rooms WHERE id=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$id]);
      $room = $stmt->fetch();
      if ($room) {
        echo "กำลังอยู่ในห้อง: " . $room['name'] . "";
      } else {
        echo "ไม่พบห้องที่เลือก";
      }
      $conn = null;
    } else if (isset($_GET['pid'])) {
      $id = $_GET['pid'];
      $sql = "SELECT name,password FROM pvt_rooms WHERE id=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$id]);
      $room = $stmt->fetch();
      if ($room) {
        echo "กำลังอยู่ในห้อง: " . $room['name'] . "";
        echo "<br>รหัสห้องคือ: " . $room['password'] . "";
      } else {
        echo "ไม่พบห้องที่เลือก";
      }
      $conn = null;
    } else {
      echo "ไม่พบห้องที่เลือก";
    }
    ?>
    <div class="container">
      <img src="../header.jpg">
    </div>
    <center>
      <iframe src="../testminigame/minigame.html" width="500" height="400"></iframe>
    </center>
    <p align="center"><a href="../homepage.php">กลับสู่หน้าหลัก</a></p>
  </div>
</body>

</html>