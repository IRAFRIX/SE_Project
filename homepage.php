<?php
// include file config.php
require_once "config.php";

// check if form is submitted
if(isset($_POST['roomSelect'])){
  $selectedRoomId = $_POST['roomSelect'];
  header("location:chat_room.php?id=$selectedRoomId");
  die();
} elseif(isset($_POST['roomCode'])) {
  $roomCode = $_POST['roomCode'];
  $conn=new PDO("mysql:host=localhost;dbname=pigdata;charset=utf8","root","");
  $stmt = $conn->prepare("SELECT * FROM pvt_rooms WHERE password = ?");
  $stmt->execute([$roomCode]);
  $room = $stmt->fetch();
  if($room) {
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
    <title>Chat Room</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

</head>
<body>
<div>

  <form id="roomForm" action="chat_room.php" method="post">

    <label>เข้าห้อง</label>

    <select name="roomSelect" id="roomSelect" class="form-select">

      <?php

        $conn=new PDO("mysql:host=localhost;dbname=pigdata;charset=utf8","root","");
        $sql="SELECT * FROM rooms";
        foreach($conn->query($sql) as $row){
          echo "<option value=" .$row['id'].">".$row['name']."</option>";
        }
        $conn=null;
      ?>

    </select>

    <button type="submit">Join</button>

  </form>
  <form id="myForm" action="javascript:void(0)" method="post">

    </form>

</div>
<form id="codeForm" action="" method="post">

    <label>เข้าร่วมโดยรหัส</label>

    <div class="field has-addons">
      <div class="control">
        <input class="input" type="text" name="roomCode" placeholder="Enter code">
      </div>
      <div class="control">
        <button type="submit" class="button is-primary">Join</button>
      </div>
    </div>

  </form>
  <?php
    session_start();
    if(isset($_SESSION['id'])){
    // ผู้ใช้งานได้ทำการ login แล้ว ให้แสดงปุ่มออกจากระบบ
      echo '<form action="LoginANDRegister/logout.php" method="POST">
            <button type="submit">ออกจากระบบ</button>
      </form>';
    } else {
    // ผู้ใช้งานยังไม่ได้ทำการ login ให้แสดงปุ่ม login
      echo '';
    }
  ?>
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