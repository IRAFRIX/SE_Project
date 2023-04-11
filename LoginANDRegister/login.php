<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        .bg-image {
            width: 100%;
            height: 900px;
            background-image: url('../bg.jpg');
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
    </style>
    <title>Login</title>
    <!-- <link rel="icon" href="logo.jpg" type="image/icon type"> -->
</head>

<body>
    <div class="bg-image">
        <div class="container">
            <img src="../header.jpg">
        </div>
        <div class="container">

            <br>
            <div class="columns">
                <div class="column is-4"></div>
                <div class="column is-4">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<div>
                ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="card">
                    <header class="card-header has-background-black">
                            <p class="card-header-title has-text-white">เข้าสู่ระบบ</p>
                        </header>
                        <div class="columns is-centered is-vcentered is-multiline is-mobile">
                            <form action="verify.php" method="post">
                                <div class="columns my-3 has-text-centered">
                                    <div class="column is-half">
                                        User ID
                                    </div>
                                    <div class="column is-half">
                                        <input type="text" name="login" class="form-control">
                                    </div>
                                </div>
                                <div class="columns my-3 has-text-centered">
                                    <div class="column is-half">
                                        Password
                                    </div>
                                    <div class="column is-half">
                                        <input type="password" name="pwd" class="form-control" id="password">
                                    </div>
                                </div>
                                <center>
                                    <div class="column">
                                        <button type="submit" class="button is-dark is-small">เข้าสู่ระบบ</button>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column is-4"></div>
            </div>
            <br>
            <p align="center">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></p>
            <br>
            <p align="center"><a href="../homepage.php">กลับสู่หน้าหลัก</a></p>
        </div>
    </div>
</body>

</html>
