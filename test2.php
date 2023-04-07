<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Password Input Block with Bootstrap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
		
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
</head>
<body>
	<div class="container mt-5">
    <button class="btn btn-primary" onclick="closePassword()">Close Password</button>
		<button class="btn btn-primary" onclick="createPassword()">Create Password</button>
		<div id="password-input-block" class="mt-3" style="display: none;">
			<input type="password" id="password-input" class="form-control mb-3" placeholder="Enter your new password">
			<button class="btn btn-primary mr-3" onclick="savePassword()">Save Password</button>
		</div>
	</div>
</body>
</html>
