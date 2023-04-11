<?php
// include file config.php
require_once "config.php";

// check if form is submitted
if (isset($_POST['roomSelect'])) {
  $selectedRoomId = $_POST['roomSelect'];
  header("location:chat_room.php?id=$selectedRoomId");
  die();
} elseif (isset($_POST['roomCode'])) {
  $roomCode = $_POST['roomCode'];
  $conn = new PDO("mysql:host=localhost;dbname=pigdata;charset=utf8", "root", "");
  $stmt = $conn->prepare("SELECT * FROM pvt_rooms WHERE password = ?");
  $stmt->execute([$roomCode]);
  $room = $stmt->fetch();
  if ($room) {
    header("location:JoinRoom_Suss/chat_room.php?pid={$room['id']}");
    die();
  } else {
    echo "รหัสห้องผิด";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>homepage</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <style>
    .bg-image {
      width: 100%;
      height: 900px;
      background-image: url('bg.jpg');
      background-size: 100% 100%;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>
<div class="bg-image">
  <!-- open nav -->
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="logo.jpg" alt="">
      </a>
    </div>


    <div class="navbar-menu" id="nav-links">
      <div class="navbar-start">
      <a class="navbar-item" >   </a>
      <a class="navbar-item" >   </a>
      <?php
      // ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือไม่
      session_start(); // เปิด session
      if (isset($_SESSION['user_id'])) { // ตรวจสอบว่ามีตัวแปร session ชื่อ username หรือไม่
      ?>
        <a class="navbar-item" href="/SE_Project/CreateRoom_rew/roomtypeselect.php">
          Create Room
        </a>
        <?php
      }else{

      }
      ?>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            More
          </a>
          <div class="navbar-dropdown">
            <a class="navbar-item" >
              About Me
            </a>
            <a class="navbar-item ">
              Jobs
            </a>
            <a class="navbar-item">
              Contact
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              Report an issue
            </a>
          </div>
        </div>
      </div>
  </nav>
  <!-- close nav -->
  
<br>
    <div>

      <form id="roomForm" action="/JoinRoom_Suss/chat_room.php" method="post">

        <label>เข้าห้อง</label>

        <select name="roomSelect" id="roomSelect" class="form-select">

          <?php

          $conn = new PDO("mysql:host=localhost;dbname=pigdata;charset=utf8", "root", "");
          $sql = "SELECT * FROM rooms";
          foreach ($conn->query($sql) as $row) {
            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
          }
          $conn = null;
          ?>

        </select>

        <button type="submit">Join</button>

      </form>
      <form id="myForm" action="javascript:void(0)" method="post">

      </form>

    </div>
    <form id="codeForm" action="" method="post">
      <br>
      <label>เข้าร่วมโดยรหัส</label>

      <div class="field has-addons">
        <div class="control">
          <input class="input" type="text" name="roomCode" placeholder="Enter code">
        </div>
        <div class="control">
          <button type="submit" class="button is-dark">Join</button>
        </div>
      </div>

    </form>
    <?php
    if (isset($_SESSION['id'])) {
      // ผู้ใช้งานได้ทำการ login แล้ว ให้แสดงปุ่มออกจากระบบ
      echo '<br><form action="LoginANDRegister/logout.php" method="POST">
            <button class="button is-warning is-light" type="submit">ออกจากระบบ</button>
      </form>';
    } else {
      // ผู้ใช้งานยังไม่ได้ทำการ login ให้แสดงปุ่ม login
      echo '<br><form action="LoginANDRegister/login.php" method="POST">
      <button class="button is-primary is-light" type="submit">เข้าสู่ระบบ</button>
      </form>';
    }
    ?>
    <div class="container">
      <img src="header.jpg">
    </div>
  </div>

</body>
<script>
  const roomSelect = document.getElementById("roomSelect");
  const roomForm = document.getElementById("roomForm");

  roomForm.addEventListener("submit", function(event) {
    event.preventDefault(); // prevent default form submission behavior
    const selectedRoomId = roomSelect.value; // get selected room id
    window.location.href = "JoinRoom_Suss/chat_room.php?id=" + selectedRoomId; // redirect to chat_room.php with selected room id in URL
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
