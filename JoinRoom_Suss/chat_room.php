<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
<?php
$conn = new PDO("mysql:host=localhost;dbname=pigdata;charset=utf8", "root", "");
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="SELECT name FROM rooms WHERE id=?";
  $stmt=$conn->prepare($sql);
  $stmt->execute([$id]);
  $room=$stmt->fetch();
  if($room){
    echo "กำลังอยู่ในห้อง: ".$room['name']."";
  } else {
    echo "ไม่พบห้องที่เลือก1";
  }
  $conn=null;
} else if (isset($_GET['pid'])){
  $id=$_GET['pid'];
  $sql="SELECT name FROM pvt_rooms WHERE id=?";
  $stmt=$conn->prepare($sql);
  $stmt->execute([$id]);
  $room=$stmt->fetch();
  if($room){
    echo "กำลังอยู่ในห้อง: ".$room['name']."";
  } else {
    echo "ไม่พบห้องที่เลือก2";
  }
  $conn=null;
} else {
  echo "ไม่พบห้องที่เลือก3";
}
?>

    <p align= "center"><a href="index.php">กลับสู่หน้าหลัก</a></p>
</body>
</html>