<!DOCTYPE html>
<html lang="it">

<head>
	<?php
    session_start();
    if($_SESSION["logged"] == 1){
    header("Location: ../index.php");
    }
    ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<title>Game Checker | Login</title>
	<link rel="stylesheet" href="../1css/main.css">
	<link rel="stylesheet" href="../1css/login.css">
	<style>
		body {
			min-height: 85vh; /*la pagina altrimenti prende le dimensioni del contenitore e quindi è piccola, troppo*/
		}
	</style>
</head>

<body>
	<div class="bodyPage">
		<div class="nav-bar">
			&nbsp&nbsp<a href="../index.php"><img src="../img/logo3.png" height="99%"></a>
		</div>
		<center>
        <br><br>
			<div class="container">
				<h2>Game Checker Login</h2>
				<form id="login" method="POST">
					<br>
					<table>
						<tr>
							<td><label><span class="required">*</span>Nickname</label></td>
							<td><input type="text" name="nick" id="nick" required></td>
						</tr>
						<tr>
							<td><label><span class="required">*</span>Password</label></td>
							<td><input type="password" name="pass" id="pass"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><br><button type="submit">Login</button></td>
						</tr>
						<tr>
							<td colspan="2"><br><a class="regLnk" href="../registration/registrazione.php">Register now!</a></td>
						</tr>
						<h3 id="Output"></h3> <!-- Output messaggio se trova o meno l utente -->
					</table>
				</form>
			</div>
		</center>
	</div>
	<script>
		$(document).ready(function () {
			$('#login').submit(function (e) {
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: 'login_process.php',
					data: ({
						username: $("#nick").val(),
						password: sha($("#pass").val()),
					}),
					success: function (data) {
						result = data;
						if (result == 1) {//successo
							$("#Output").html("Welcome");
							location.href = "../index.php";
						}
						else {
							$("#Output").html("Incorrect credientals, try again");
						}
					}
				});
			});
		});
	</script>
	<script src="../js/sha-256.js"></script>
</body>

</html>