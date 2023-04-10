<?php
    session_start();
    if(isset($_SESSION['id'])){
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
    <h1 class="title has-text-centered">PigPig</h1>
    <br>
    <div class="columns">
        <div class="column is-3"></div>
        <div class="column is-6">
            <?php
                if(isset($_SESSION['add_login'])){
                    if($_SESSION['add_login']=='error'){
                    echo "<div class='alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
                }else{
                    echo "<div class='alert alert-success'>เพิ่มบัญชีเป็นที่เรียบร้อยแล้ว</div>";
                }
                unset($_SESSION['add_login']);
            }
            ?>
            <DIV class="card">
                <div class="has-text-centered">กรอกข้อมูล</div>
                <div class="columns is-centered is-vcentered is-multiline is-mobile">
                    <form action="register_save.php" method="post">
                        <div class="my-3 columns is-fullwidth">
                            <div class="column is-half">
                                User ID
                            </div>
                            <div class="column is-half">
                                <input class="is-expanded form-control" type="text" name="login" required>
                            </div>
                        </div>
                        <div class="my-3 columns is-fullwidth">
                            <div class="column is-half">
                                Password
                            </div>
                            <div class="column is-half">
                                <input class="is-expanded form-control" type="password" name="pwd" required>
                            </div>
                        </div>
                        <div class="my-3 columns is-fullwidth">
                            <div class="column is-half">
                                Pig Name
                            </div>
                            <div class="column is-half">
                                <input class="is-expanded form-control" type="text" name="pigname" required>
                            </div>
                        </div>
                        <div class="my-3 columns is-fullwidth">
                            <div class="column is-half">
                                อีเมล:
                            </div>
                            <div class="column is-half">
                                <input class="is-expanded form-control" type="email" name="email"  required>
                            </div>
                        </div>
                        <div class="has-text-centered">
                            <div class="column">
                                <button class="button is-primary is-small" type="submit">
                                    สมัครสมาชิก
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </DIV>
        </div>
        <div class="column is-3"></div>
    </div>
    </div>
    <br>
    <p align= "center"><a href="login.php">กลับสู่หน้าเข้าสู่ระบบ</a></p>
</body>
</html>