<?php
    session_start();

    //$RoomName=$_POST['rn'];
    //$RoomPassword=$_POST['rpwd'];
    //$Roomid=$_POST['room'];
    //ตัวแปร
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CreateRoom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
		function password_show_hide() {
            let x = document.getElementById("password");
            let show_eye = document.getElementById("show_eye");
            let hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("is-hidden");
            if(x.type === "password"){
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
		
		function savePassword() {
			var passwordInput = document.getElementById("password-input");
			var password = passwordInput.value;
			if (password != "rpwd") {
				// Save the password to a database or use it in your application
				alert("Your password has been saved!");
				passwordInput.value = "";
				closePassword();
			}
		}

        let rid = [];
        for (let i = 1; i <= 9999; i++) {
        let id = ("000" + i).slice(-4);
        ids.push(id);
        }
        console.log(rid);

	</script>
</head>
<body>
    <!--ใส่ข้อมูล ชื่อห้องแชท-->
    <section class="section">
        <div class="block">
            <div class="container">
                <div class="card">
                    <header class="card-header has-background-primary has-text-white">
                        <p class="card-header-title">
                            กรอกข้อมูลห้องแชทแบบ Private
                        </p>
                    </header>
                    <form method="post" action="/SE_Project/CreateRoom_rew/Private/crsuccespri.php">
                    <div class="card-content">
                        <div class="field">
                            <label class="label">ชื่อห้องแชท</label>
                            <div class="control">
                                <input type="text" name="rn" class="input" required>
                            </div>
                            <label class="label">รหัสห้องแชท</label>
                            <input type="password" id="password-input" class="input mb-3" placeholder="Enter your new password">
                            
                            <!--<form method="post" action="createroomsucces.php">-->
                            <div class="field is-grouped mt-5">
                            <div class="control">
                                <button type="submit" class="button is-primary">Submit</button>
                            </div>
                            <div class="control">
                                <button type="reset" class="button is-light">Reset</button>
                            </div>
                            </div>
                            <!--</form>-->
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>