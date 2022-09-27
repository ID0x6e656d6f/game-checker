<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<title>Game checker | Registrazione</title>
	<link rel="stylesheet" href="../1css/main.css">
	<link rel="stylesheet" href="../1css/registration.css">
	<style>
		body {
			min-height: 85vh;
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
				<h2>Game Check registration</h2>
				<form id="register" method="POST">
					<br>
					<table>
						<br>
						<p class="required">* fields are required</p><br><br>
						<tr>
							<td style="float:right;"><label><span class="required">*</span>Nickname:&nbsp;</label></td>
							<td><input type="text" name="user" id="nick" required><br></td>
						</tr>
						<tr>
							<td style="float:right;"><label><span class="required">*</span>Password:&nbsp;</label></td>
							<td><input type="password" name="pass" id="pass" required></td>
						</tr>
						<tr>
							<td><br><label>Your platform:</label></td>
							<td colspan="2" style="text-align: center;">
								<br><label><input type="radio" name="platform[]" id="platform" value="PC" required>PC&nbsp;</label>
								<label><input type="radio" name="platform[]" id="platform" value="Ps4" required>Ps4&nbsp;</label>
								<label><input type="radio" name="platform[]" id="platform" value="XBox" required>XBox&nbsp;</label>
								<label><input type="radio" name="platform[]" id="platform" value="Switch" required>Switch&nbsp;</label>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><br><button type="submit">Register</button><br><br></td>
						</tr>
					</table>
				</form>
			</div>
		</center>
	</div>
	<script>
		$(document).ready(function () { //se la pagina è pronta
			$('#register').submit(function (e) { // se il submit viene eseguito
				if ($("#pass").val().length < 6) {
					alert("Password troppo corta, riprova");
				} else {
					e.preventDefault();
					$.ajax({
						type: "POST",
						url: 'regProcess.php', // url della pagina dove avverà il processo
						data: ({
							username: $("#nick").val(),
							password: sha($("#pass").val()),
							platform: $("#platform:checked").val(),
						}), //dati mandati
						success: function (data) { // se lo scambio vine eseguito con successo
							if(data == 0){
                                location.href = "../login/login.php";
                            }
                            else if(data == 1){
                                alert("Caratteri del nome non ammessi");
                            }
                            else if(data == 3){
                                alert("Utente già presente nel database");
                            }
						}
					});
				}
			});
		});
	</script>
	<script src="../js/sha-256.js"></script>
</body>

</html>