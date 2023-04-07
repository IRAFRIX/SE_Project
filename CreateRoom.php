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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>

		function password_show_hide(){
            let x=document.getElementById("password");
            let show_eye=document.getElementById("show_eye");
            let hide_eye=document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if(x.type==="password"){
                x.type="text";
                show_eye.style.display="none";
                hide_eye.style.display="block";
            }else{
                x.type="password";
                show_eye.style.display="block";
                hide_eye.style.display="none";
            }
        }
		
		function createPassword() {
            var passwordInputBlock = document.getElementById("password-input-block");
			passwordInputBlock.style.display = "block";
		}
		
		function closePassword() {
            var passwordInputBlock = document.getElementById("password-input-block");
			passwordInputBlock.style.display = "none";
		}
		
		function savePassword() {
			var passwordInput = document.getElementById("password-input");
			var password = passwordInput.value;
			if (password != "") {
				// Save the password to a database or use it in your application
				alert("Your password has been saved!");
				passwordInput.value = "";
				closePassword();
			}
		}
	</script>
    <title>CreateRoom</title>
</head>
<body>
<!--ใส่ข้อมูล ชื่อห้องแชท-->
<div class="card text-dark bg-white border-primary">
                <div class="card-header bg-primary text-white">กรอกข้อมูลห้องแชท</div>
                <div class="card-body">
                    <!--<form action="register_save.php" method="post">-->
                        <div class="row mb-2">
                            <label class="col-mb-3 col-form-label">ชื่อห้องแชท</label>
                            <input type="text" name="rn" class="form-control" require>

<!--ปุ่มเปิด-ปิด Private-->
    <div class="container mt-5">
        <button class="btn btn-success" onclick="closePassword()">Public</button>
		<button class="btn btn-danger" onclick="createPassword()">Private</button>
		<div id="password-input-block" class="mt-3" style="display: none;">
			<input type="password" id="password-input" class="form-control mb-3" placeholder="Enter your new password">
			<button class="btn btn-primary mr-3" onclick="savePassword()">Save Password</button>
		</div>
	</div>
</body>
</html>